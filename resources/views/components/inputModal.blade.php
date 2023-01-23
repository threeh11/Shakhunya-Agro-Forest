@props([
    'title' => '',
    'name' => '',
    'value' => '',
    'pattern' => '',
])
<div {{ $attributes->class([
    'flex flex-col w-full pt-[13px]'
]) }}>
    <label>
        <p class="border-solid color-[#333333] font-[Manrope] text-base font-bold pb-[6px]">
            {{ $title }}
        </p>
        <input class="
           w-full h-11 pl-3 border rounded
           @unless($errors->has($name)) border-[#CCCCCC] @endunless
           border-solid
           @if($errors->has($name)) border-[#C53737] @endif"
           type="text"
           name="{{ $name }}"
           value="{{ $value }}"
           pattern="{{ $pattern }}">
    </label>
</div>

