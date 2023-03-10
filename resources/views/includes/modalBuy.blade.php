<div class="hidden w-full h-screen bg-black bg-opacity-60 drop-shadow-2xl " id="modalBuy">
    <div class="w-[500px] h-[650px] @if($errors->any()) h-[750px] @endif top-[20%] left-[20%] fixed rounded-xl bg-[#FFFFFF]" id="modal">
        <div class="bg-white flex flex-col px-[19px] pt-[25px] pb-[10px]">
            <p class="text-[#333333] leading-8 text-2xl font-normal font-[Manrope] pb-3">
                Оптовый заказ производителю
            </p>
            <p class="text-[#333333] font-normal font-[Manrope] leading-5">
                Пожалуйста укажите данные о вашей организации,
                интересующий объем продукции, а также другую
                информацию, которую вы посчитаете важной
            </p>
        </div>
        <div class="absolute top-0 right-0 m-[20px] cursor-pointer" id="closeModal">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg" >
                <path d="M10.4956 8.49879L16.5814 2.4263C16.8479 2.15975 16.9976 1.79824 16.9976 1.42129C16.9976 1.04434 16.8479 0.682831 16.5814 0.416287C16.3148 0.149743 15.9534 0 15.5765 0C15.1996 0 14.8381 0.149743 14.5716 0.416287L8.5 6.50294L2.42837 0.416287C2.16186 0.149743 1.8004 -2.8085e-09 1.42351 0C1.04661 2.8085e-09 0.685149 0.149743 0.418643 0.416287C0.152137 0.682831 0.00241535 1.04434 0.00241535 1.42129C0.00241535 1.79824 0.152137 2.15975 0.418643 2.4263L6.50443 8.49879L0.418643 14.5713C0.285989 14.7029 0.180699 14.8594 0.108847 15.0319C0.0369938 15.2044 0 15.3894 0 15.5763C0 15.7632 0.0369938 15.9482 0.108847 16.1207C0.180699 16.2932 0.285989 16.4497 0.418643 16.5813C0.550213 16.714 0.706747 16.8193 0.879214 16.8911C1.05168 16.963 1.23667 17 1.42351 17C1.61034 17 1.79533 16.963 1.9678 16.8911C2.14026 16.8193 2.2968 16.714 2.42837 16.5813L8.5 10.4946L14.5716 16.5813C14.7032 16.714 14.8597 16.8193 15.0322 16.8911C15.2047 16.963 15.3897 17 15.5765 17C15.7633 17 15.9483 16.963 16.1208 16.8911C16.2933 16.8193 16.4498 16.714 16.5814 16.5813C16.714 16.4497 16.8193 16.2932 16.8912 16.1207C16.963 15.9482 17 15.7632 17 15.5763C17 15.3894 16.963 15.2044 16.8912 15.0319C16.8193 14.8594 16.714 14.7029 16.5814 14.5713L10.4956 8.49879Z" fill="#CCCCCC"/>
            </svg>
        </div>
        <form action="{{ route('saveBuy', $product->id) }}" class="px-[19px] pt-0 pb-[25px]" method="POST" enctype='multipart/form-data'>
            @csrf
            @if ($errors->any() && ($errors->has('nameModal') || $errors->has('numberModal') ||  $errors->has('emailModal') ||  $errors->has('text')))
                <p class="hidden" id="hasErrorModal"></p>
            @endif
            <div class="flex flex-col border-none">
                <x-inputModal title="Ваше имя" name="nameModal" value="{{ request()->old('nameModal') }}" pattern="^[А-Яа-яЁё\s]+$"/>
                @error('nameModal')
                    <x-validationError message="{{ $message }}"/>
                @enderror
                <x-inputModal title="Телефон" name="numberModal" value="{{ request()->old('numberModal') }}" pattern="[7-9]{1}[0-9]{10}"/>
                @error('numberModal')
                    <x-validationError message="{{ $message }}"/>
                @enderror
                <x-inputModal title="Электронная почта" name="emailModal" value="{{ request()->old('emailModal') }}" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                @error('emailModal')
                    <x-validationError message="{{ $message }}"/>
                @enderror

                <label>
                    <p class="pt-3 border-solid text-[#333333] font-[Manrope] text-base font-bold pb-[6px]">
                        Текст заказа
                    </p>
                    <textarea class="
                    pt-[13px] pl-3 w-full h-32 border rounded
                    @unless($errors->has('text')) border-[#CCCCCC] @endunless
                    border-solid
                    @if($errors->has('text')) border-[#C53737] @endif
                    resize-none" type="text" name="text">
                    {{ old('text') }}
                    </textarea>
                </label>
                @error('text')
                <x-validationError message="{{ $message }}"/>
                @enderror
                <div class="pt-6">
                    <label>
                        <input class="w-[60%] h-11 text-center rounded text-[#333333] font-[Manrope] text-base font-normal bg-[#FFED4E] text-base leading-5 cursor-pointer" value="Отправить" type="submit">
                    </label>
                </div>
            </div>
        </form>
    </div>

</div>
