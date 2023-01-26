@props([
    'placeholder' => '',
    'type' => '',
    'pattern' => '',
    'title' => '',
    'name' => '',
])
<input
    class="mr-[1.66%] my-1 px-3 h-11 text-base border rounded border-solid border-[#CCCCCC]"
    required
    placeholder="{{ $placeholder }}"
    title="{{ $title }}"
    type="{{ $type }}"
    pattern="{{ $pattern }}"
    name="{{ $name }}"
>
