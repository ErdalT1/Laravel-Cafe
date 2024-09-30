@foreach($menuItems as $item)
    <div class="mb-8">
        <img src="{{ asset($item['image']) }}" alt="Image" class="rounded mb-8">
        <div class="text-center">
            <h3 class="tm-text-gold text-3xl mb-4">{{ $item['name'] }}</h3>
            <p class="tm-text-green text-2xl">{{ $item['priceS'] ?? $item['priceM'] }} / {{ $item['priceL'] }} ₺</p>
        </div>
    </div>
@endforeach
