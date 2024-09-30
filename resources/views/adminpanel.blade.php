@extends('layouts.admin')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-8">Admin Panel</h1>

        <div class="bg-white shadow-md rounded p-6">
            <h2 class="text-2xl font-bold mb-4">Siparişler ve İstatistikler</h2>

            <!-- Toplam Sipariş Sayısı -->
            <div class="mb-4">
                <p class="text-lg">Toplam Sipariş Sayısı: <strong>{{ $totalOrders }}</strong></p>
            </div>

            <!-- Toplam Gelir -->
            <div class="mb-8">
                <p class="text-lg">Toplam Gelir: <strong>{{ number_format($totalRevenue, 2) }} ₺</strong></p>
            </div>

            <!-- Sipariş Listesi -->
            <h3 class="text-xl font-semibold mb-4">Sipariş Detayları</h3>
            <table class="w-full table-auto border-collapse border border-gray-400">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-4 py-2">Sipariş ID</th>
                        <th class="border border-gray-300 px-4 py-2">Masa Numarası</th>
                        <th class="border border-gray-300 px-4 py-2">Sipariş Edilen Ürünler</th>
                        <th class="border border-gray-300 px-4 py-2">Toplam Fiyat</th>
                        <th class="border border-gray-300 px-4 py-2">Tarih</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $order->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $order->table_number }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                @if($order->menuItems && $order->menuItems->isNotEmpty())
                                    <ul>
                                        @foreach($order->menuItems as $menuItem)
                                            <li>{{ $menuItem->name }} - {{ $menuItem->price_m ?? $menuItem->price_l }} ₺</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>Menü öğesi bulunamadı.</p>
                                @endif
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                @if($order->menuItems)
                                    {{ $order->menuItems->sum(function ($menuItem) {
                                        return $menuItem->price_m ?? $menuItem->price_l;
                                    }) }} ₺
                                @else
                                    0 ₺
                                @endif
                            </td>
                            <td class="border border-gray-300 px-4 py-2">{{ $order->created_at->format('d-m-Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
