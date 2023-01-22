@props([
    'text' => '',
    'name' => ''
])
<p class="my-2.5 py-3 font-['Manrope'] text-base font-bold leading-5 text-black">
    {{ $text }}
</p>
<textarea class="p-3 h-40 border rounded border-solid border-[#CCCCCC] resize-none" name="{{ $name }}"></textarea>
