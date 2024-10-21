<?php

namespace App\Livewire;

use App\Models\Address;
use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Attributes\Title;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

#[Title('Order Detail')]
class OrderDetailPage extends Component
{
    public $order_id;

    public function mount($order_id) {
        $this->order_id = $order_id;
    }

    public function generatePdf() {

        $order_items = OrderItem::with('product')->where('order_id', $this->order_id)->get();
        $address = Address::where('order_id', $this->order_id)->first();
        $order = Order::where('id', $this->order_id)->first();
        $data = [
            'order_items' => $order_items,
            'address' => $address,
            'order' => $order,
        ];
        $pdf = Pdf::loadView('invoice-pdf', $data);

        return response()->streamDownload(function() use($pdf) {
            echo $pdf->stream();
        }, 'invoice.pdf');
    }

    public function render()
    {
        $order_items = OrderItem::with('product')->where('order_id', $this->order_id)->get();
        $address = Address::where('order_id', $this->order_id)->first();
        $order = Order::where('id', $this->order_id)->first();
        return view('livewire.order-detail-page', [
            'order_items' => $order_items,
            'address' => $address,
            'order' => $order
        ]);
    }
}