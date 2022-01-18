@props(['product'])
<article
class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl col-span-2">
<div class="py-6 px-5 lg:flex">
    <div class="flex-1 lg:mr-8">

        <img src="{{ asset('storage/p' . trim($product->product_picture, '/public')) }}" alt="Product Picture" class="rounded-xl">
    </div>

    <div class="flex-1 flex flex-col justify-between">
        <header class="mt-8 lg:mt-0">
            <div class="space-x-2">
                    <x-category-button :category="$product->category" />
            </div>

            <div class="mt-4">
                <h1 class="text-3xl">
                    <a href="/products/{{ $product->slug }}">
                        {{ $product->name }}
                    </a>
                </h1>

                <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $product->created_at->diffForHumans()}}</time>
                    </span>
            </div>
        </header>

        <div class="text-sm mt-2 space-y-4">
              {!! $product->description !!}
        </div>

        <footer class="flex justify-between items-center mt-8">
            <div class="flex items-center text-sm">
                <img src="/images/lary-avatar.svg" alt="Lary avatar">
                <div class="ml-3">
                    <a href="/?author={{ $product->author->username }}">  {{ $product->author->name}}</a></h5>
                </div>
            </div>

            <div class="hidden lg:block">
                <a href="/products/{{ $product->slug}}"
                   class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                >Read More</a>
            </div>
        </footer>
    </div>
</div>
</article>
