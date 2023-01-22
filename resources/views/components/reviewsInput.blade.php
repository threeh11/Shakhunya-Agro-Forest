@props([
    'placeholder' => '',
    'title' => '',
    'type' => '',
    'name' => '',
    'pattern' => '',
])
<input
    class="mr-2.5 px-3 w-[90%] h-11 border rounded border-solid border-[#CCCCCC]"
    required
    placeholder="{{ $placeholder }}"
    title="{{ $title }}"
    type="{{ $type }}"
    pattern="{{ $pattern }}"
    name="{{ $name }}"
>
