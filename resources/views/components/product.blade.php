@props([
    'id' => '',
    'city' => '',
    'rating' => '',
    'name' => '',
    'price' => '',
])
<div{{ $attributes->class([
    "w-[286px] h-[375px] border rounded-[5px] p-[16px] mr-[10px] grow-0 shrink-[0] mb-[10px] "
]) }}>
    <a href="{{ route('product', $id) }}" >
        <img src="https://sun9-59.userapi.com/impg/DAPpVXgTqaIaOurCnHzLr1LGiA0-CTKIPjmUjw/12b68k21pI8.jpg?size=254x234&quality=96&sign=33f7bf9c0e0ff8561f2d103bdbf4331e&type=album" alt="">
    </a>
    <div class="flex flex-row justify-between">
        <p class="font-[Manrope] font-normal not-italic text-[14px] text-gray">{{ $city }}</p>
        <p class="flex flex-row align-sub font-[Manrope] font-normal not-italic text-[14px] text-gray">
            {{ $rating }}
            <svg class="mt-[2px] ml-[7px]" width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.4455 14.9961C12.3173 14.9966 12.1908 14.9669 12.0767 14.9093L7.98797 12.8024L3.89924 14.9093C3.76647 14.978 3.61677 15.0087 3.46717 14.9979C3.31757 14.987 3.17407 14.9351 3.05297 14.8479C2.93187 14.7608 2.83804 14.642 2.78214 14.505C2.72624 14.3679 2.71052 14.2183 2.73675 14.0729L3.53847 9.63025L0.235407 6.47386C0.132353 6.37263 0.0592477 6.2457 0.0239372 6.10668C-0.0113733 5.96766 -0.00755635 5.8218 0.0349786 5.68476C0.0814458 5.54451 0.166922 5.4199 0.281706 5.32505C0.39649 5.23021 0.535987 5.16893 0.684366 5.14817L5.25413 4.49322L7.26643 0.445139C7.33208 0.311725 7.43458 0.19921 7.56219 0.120483C7.6898 0.0417553 7.83737 0 7.98797 0C8.13858 0 8.28614 0.0417553 8.41375 0.120483C8.54137 0.19921 8.64387 0.311725 8.70952 0.445139L10.7459 4.48533L15.3156 5.14028C15.464 5.16104 15.6035 5.22232 15.7183 5.31716C15.8331 5.41201 15.9186 5.53662 15.965 5.67687C16.0076 5.81391 16.0114 5.95977 15.9761 6.09879C15.9408 6.23781 15.8676 6.36474 15.7646 6.46597L12.4615 9.62236L13.2632 14.065C13.2919 14.2129 13.2769 14.3658 13.2201 14.5057C13.1632 14.6455 13.0669 14.7664 12.9426 14.8541C12.7974 14.9542 12.6226 15.0042 12.4455 14.9961Z" fill="#FFED4E"/>
            </svg>
        </p>
    </div>
    <p class="font-[Manrope] font-normal not-italic text-[16px] text-black break-keep">{{ $name }}</p>
    <p class="font-[Manrope] font-bold not-italic text-[16px] text-black">{{ $price }}</p>
</div>
