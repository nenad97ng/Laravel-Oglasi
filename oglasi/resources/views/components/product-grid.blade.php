@props(['products'])
{{-- <x-product-featured-card :product="$products[0]" /> --}}

        @if ( $products->count() > 1)
                <div class="lg:grid lg:grid-cols-6">
                @foreach ($products as $product )
                <x-product-card
                :product="$product"
                 class="{{ 'col-span-2' }}" />
            @endforeach
        </div>
            @endif
