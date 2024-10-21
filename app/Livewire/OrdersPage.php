<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('My Orders')]
class OrdersPage extends Component
{
    use WithPagination;

    public function render()
    {
        $orders = Order::where('user_id', auth()->guard()->id())->latest()->paginate(6);
        return view('livewire.orders-page', [
            'orders' => $orders,
        ]);
    }
}