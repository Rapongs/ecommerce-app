<x-mail::message>
# Pesanan anda telah berhasil

Terimakasih atas pesanan anda. Nomer pesanan anda adalah: {{$order->id}}.

<x-mail::button :url="$url">
Lihat Pesanan
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
