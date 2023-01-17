@props(['title' => '', 'name' => ''])
<div {{ $attributes->class([
    'flex flex-col w-full pb-[13px]'
]) }}>
    <label>
        <p class="border-solid color-[#333333] font-[Manrope] text-base font-bold pb-[6px]">
            {{ $title }}
        </p>
        <input class="w-full h-11 pl-3 border rounded border-solid border-[#CCCCCC]" type="text" name="{{ $name }}">
    </label>
</div>

