@props([
    'text' => '',
    'name' => '',
    'id' => '',
])
<p class="mb-1 mt-3.5 font-['Manrope'] text-base font-bold leading-5 text-black">
    {{ $text }}
</p>
<textarea class="p-3 h-40 border rounded border-solid border-[#CCCCCC]" name="{{ $name }}" id="{{ $id }}"></textarea>
