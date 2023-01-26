<div {{ $attributes->class([
    "text-[#707070] font-['Manrope'] text-sm leading-5 font-normal pb-10"
]) }}>
    @if(Route::is('product'))
        <a href="{{ route('index') }}">
            Каталог
        </a>
        /
        <a href="{{ route('product', $product->id) }}">
            {{ $product->name }}
        </a>
    @else
        <a href="{{ route('index') }}">
            Каталог
        </a>
    @endif
</div>
