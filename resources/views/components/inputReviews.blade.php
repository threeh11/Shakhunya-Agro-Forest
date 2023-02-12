@props([
    'placeholder' => '',
    'title' => '',
    'type' => '',
    'name' => '',
    'pattern' => '',
    'value' => '',
])
<input
    class=" mr-[1.66%] my-1 px-3 h-11 text-base border rounded border-solid border-[#CCCCCC]
    @unless($errors->has($name)) border-[#CCCCCC] @endunless
    border-solid
    @if($errors->has($name)) border-[#C53737] @endif"
    required
    placeholder="{{ $placeholder }}"
    title="{{ $title }}"
    type="{{ $type }}"
    pattern="{{ $pattern }}"
    name="{{ $name }}"
    value="{{ $value }}"

>
