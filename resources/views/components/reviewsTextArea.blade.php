@props([
    'text' => '',
    'name' => '',
    'id' => '',
    'textArea' => ''
])
<p class="mb-1 mt-3.5 font-['Manrope'] text-base font-bold leading-5 text-black">
    {{ $text }}
</p>
<textarea class="p-3 h-40 border rounded border-solid
    @unless($errors->has($name)) border-[#CCCCCC] @endunless
    border-solid
    @if($errors->has($name)) border-[#C53737] @endif
    " name="{{ $name }}" id="{{ $id }}">
    {{ $textArea }}
</textarea>
