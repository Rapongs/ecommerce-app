<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice - Medicare</title>
</head>
<body>
    <h1>Medicare - Invoice</h1>
    <p>Order ID : {{$order->id}}</p>
    <p>Date : {{$order->created_at}}</p>
    <p>Name : {{$address->full_name}}</p>
    <p>Phone : {{$address->phone}}</p>
    <p>Address : {{$address->street_address}}, {{$address->city}}, {{$address->state}}, {{$address->zip_code}}</p>

    <table style="width: 100%; border: 1px solid; border-collapse: collapse;">
        <thead >
            <tr>
                <th style="border: 1px solid; border-collapse: collapse;">Product</th>
                <th style="border: 1px solid; border-collapse: collapse;">Price</th>
                <th style="border: 1px solid; border-collapse: collapse;">Quantity</th>
                <th style="border: 1px solid; border-collapse: collapse;">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order_items as $item)
            <tr>
                <td style="text-align: center; border: 1px solid; border-collapse: collapse">
                    {{$item->product->name}}
                </td>
                <td style="text-align: center; border: 1px solid; border-collapse: collapse">{{Number::currency($item->unit_amount, 'IDR')}}</td>
                <td style="text-align: center; border: 1px solid; border-collapse: collapse">
                    {{$item->quantity}}
                </td>
                <td style="text-align: center; border: 1px solid; border-collapse: collapse">{{Number::currency($item->total_amount, 'IDR')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h4>Total : {{Number::currency($order->grand_total, 'IDR')}}</h4>
</body>
</html>