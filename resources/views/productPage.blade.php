@extends('layouts.base')

@include('includes.modalBuy')
@include('includes.modalPhoto')

@section('content')
    <x-content @class(['mt-10'])>
        <x-breadcrumb :product=$product />
        <div class="flex flex-row w-full h-[592px]">
            <div class="flex flex-row gap-2">
                @foreach($listImages as $image)
                    @if (1  === $loop->iteration)
                        <div class="flex flex-col gap-2">
                            <img class="w-[110px] h-[110px]" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                    @elseif (2 === $loop->iteration)
                            <img class="w-[110px] h-[110px]" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                        </div>
                    @elseif (3 === $loop->iteration)
                        <img class="w-[472px] h-[454px]" src="{{ asset($image) }}" alt="{{ $product->name }}" id="{{ 'image' . $loop->iteration }}">
                    @endif
                @endforeach
            </div>
            <div class="flex flex-col pl-10">
                <h1 class="text-[#333333] font-['Manrope'] text-3xl  leading-10 font-normal pb-7">
                    {{ $product->name }}
                </h1>
                <p class="text-[#333333] font-['Manrope'] text-2xl font-bold leading-10 font-normal pb-8">
                    {{ $product->price }}
                </p>
                <button class="w-[30%] bg-[#FFED4E] p-3 text-[#333333] font-['Manrope'] text-base leading-5" id="buttonBuy">
                    Купить
                </button>
            </div>
        </div>
        <div class="flex flex-row justify-between">
            <x-h3menu id="descriptionMenu" @class(['border-[#FFED4E]'])>
                Описание
            </x-h3menu>
            <x-h3menu id="reviewsMenu">
                Отзывы
            </x-h3menu>
            <x-h3menu id="questionMenu">
                Вопросы
            </x-h3menu>
            <x-h3menu id="contactsMenu">
                Контакты
            </x-h3menu>
        </div>
        <div class=" pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="descriptionBlock">
            {{ $product->description }}
        </div>

        <div class="hidden pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="reviewsBlock">
            <div class="flex flex-col">
                <p class="my-1 font-['Manrope'] text-base font-bold leading-5 text-black">
                    <! -- Имя-->
                    Константин
                </p>
                <p class="mt-1 font-['Manrope'] font-normal leading-4 text-xs text-gray">
                    <! -- Дата-->
                    09.01.2023
                </p>
                <p class="mt-5 mb-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    Преимущества
                </p>
                <p class="font-['Manrope'] font-normal leading-4 text-base text-black">
                    <! -- Текст преимуществ-->
                    Грамотная работа менеджеров!
                </p>
                <p class="mt-5 mb-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    Недостатки
                </p>
                <p class="font-['Manrope'] font-normal leading-4 text-base text-black">
                    <! -- Текст недостатков-->
                    Нет недостатков
                </p>
                <p class="mt-5 mb-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    Комментарий
                </p>
                <p class="font-['Manrope'] font-normal leading-4 text-base text-black">
                    <! -- Текст комментария-->
                    Всё на лучшем уровне! Работой компании и менеджеров доволен, всё грамотно объяснили,
                    заказ на деревянные поддоны пришёл в срок. Качеством и ценой деревянных поддонов доволен.
                     Всем советую!
                </p>
            </div>
            <div class="flex flex-col mt-6 border-t-2 border-t-grayUltraLight ">
                <p class="my-6 font-['Manrope'] text-2xl font-normal leading-8 text-black">
                    Написать отзыв
                </p>
                <div class="my-2.5 flex flex-row">
                    <p class="font-['Manrope'] text-base font-bold leading-5 text-black">
                        Оценка товара
                    </p>
                    <section class="flex flex-row mx-1">
                        <label class="mx-1.5 inline-flex text-center cursor-pointer fill-grayUltraLight " for="star-1">
                            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2235 20.9946C18.044 20.9953 17.867 20.9536 17.7072 20.8731L11.983 17.9234L6.25874 20.8731C6.07286 20.9693 5.86329 21.0122 5.65385 20.997C5.44441 20.9818 5.2435 20.9091 5.07396 20.7871C4.90443 20.6651 4.77306 20.4988 4.6948 20.3069C4.61654 20.1151 4.59453 19.9056 4.63126 19.702L5.75366 13.4824L1.12937 9.0634C0.985099 8.92169 0.882751 8.74399 0.833317 8.54936C0.783882 8.35473 0.789226 8.15053 0.848775 7.95866C0.913829 7.76232 1.03349 7.58786 1.19419 7.45507C1.35489 7.32229 1.55019 7.2365 1.75792 7.20744L8.15559 6.2905L10.9728 0.623194C11.0647 0.436415 11.2082 0.278894 11.3869 0.168676C11.5655 0.0584575 11.7721 0 11.983 0C12.1938 0 12.4004 0.0584575 12.5791 0.168676C12.7577 0.278894 12.9012 0.436415 12.9931 0.623194L15.844 6.27946L22.2417 7.19639C22.4494 7.22545 22.6447 7.31124 22.8054 7.44403C22.9661 7.57681 23.0858 7.75127 23.1508 7.94761C23.2104 8.13948 23.2157 8.34368 23.1663 8.53831C23.1169 8.73294 23.0145 8.91064 22.8702 9.05235L18.246 13.4713L19.3684 19.691C19.4084 19.8981 19.3874 20.1122 19.3079 20.3079C19.2283 20.5037 19.0935 20.6729 18.9194 20.7957C18.7161 20.9359 18.4714 21.0058 18.2235 20.9946Z" fill="#E7E7E7"/>
                            </svg>
                        </label>
                        <label class="mx-1.5 inline-flex text-center cursor-pointer fill-grayUltraLight" for="star-2">
                            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2235 20.9946C18.044 20.9953 17.867 20.9536 17.7072 20.8731L11.983 17.9234L6.25874 20.8731C6.07286 20.9693 5.86329 21.0122 5.65385 20.997C5.44441 20.9818 5.2435 20.9091 5.07396 20.7871C4.90443 20.6651 4.77306 20.4988 4.6948 20.3069C4.61654 20.1151 4.59453 19.9056 4.63126 19.702L5.75366 13.4824L1.12937 9.0634C0.985099 8.92169 0.882751 8.74399 0.833317 8.54936C0.783882 8.35473 0.789226 8.15053 0.848775 7.95866C0.913829 7.76232 1.03349 7.58786 1.19419 7.45507C1.35489 7.32229 1.55019 7.2365 1.75792 7.20744L8.15559 6.2905L10.9728 0.623194C11.0647 0.436415 11.2082 0.278894 11.3869 0.168676C11.5655 0.0584575 11.7721 0 11.983 0C12.1938 0 12.4004 0.0584575 12.5791 0.168676C12.7577 0.278894 12.9012 0.436415 12.9931 0.623194L15.844 6.27946L22.2417 7.19639C22.4494 7.22545 22.6447 7.31124 22.8054 7.44403C22.9661 7.57681 23.0858 7.75127 23.1508 7.94761C23.2104 8.13948 23.2157 8.34368 23.1663 8.53831C23.1169 8.73294 23.0145 8.91064 22.8702 9.05235L18.246 13.4713L19.3684 19.691C19.4084 19.8981 19.3874 20.1122 19.3079 20.3079C19.2283 20.5037 19.0935 20.6729 18.9194 20.7957C18.7161 20.9359 18.4714 21.0058 18.2235 20.9946Z" fill="#E7E7E7"/>
                            </svg>
                        </label>
                        <label class="mx-1.5 inline-flex text-center cursor-pointer fill-grayUltraLight" for="star-3">
                            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2235 20.9946C18.044 20.9953 17.867 20.9536 17.7072 20.8731L11.983 17.9234L6.25874 20.8731C6.07286 20.9693 5.86329 21.0122 5.65385 20.997C5.44441 20.9818 5.2435 20.9091 5.07396 20.7871C4.90443 20.6651 4.77306 20.4988 4.6948 20.3069C4.61654 20.1151 4.59453 19.9056 4.63126 19.702L5.75366 13.4824L1.12937 9.0634C0.985099 8.92169 0.882751 8.74399 0.833317 8.54936C0.783882 8.35473 0.789226 8.15053 0.848775 7.95866C0.913829 7.76232 1.03349 7.58786 1.19419 7.45507C1.35489 7.32229 1.55019 7.2365 1.75792 7.20744L8.15559 6.2905L10.9728 0.623194C11.0647 0.436415 11.2082 0.278894 11.3869 0.168676C11.5655 0.0584575 11.7721 0 11.983 0C12.1938 0 12.4004 0.0584575 12.5791 0.168676C12.7577 0.278894 12.9012 0.436415 12.9931 0.623194L15.844 6.27946L22.2417 7.19639C22.4494 7.22545 22.6447 7.31124 22.8054 7.44403C22.9661 7.57681 23.0858 7.75127 23.1508 7.94761C23.2104 8.13948 23.2157 8.34368 23.1663 8.53831C23.1169 8.73294 23.0145 8.91064 22.8702 9.05235L18.246 13.4713L19.3684 19.691C19.4084 19.8981 19.3874 20.1122 19.3079 20.3079C19.2283 20.5037 19.0935 20.6729 18.9194 20.7957C18.7161 20.9359 18.4714 21.0058 18.2235 20.9946Z" fill="#E7E7E7"/>
                            </svg>
                        </label>
                        <label class="mx-1.5 inline-flex text-center cursor-pointer fill-grayUltraLight" for="star-4">
                            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2235 20.9946C18.044 20.9953 17.867 20.9536 17.7072 20.8731L11.983 17.9234L6.25874 20.8731C6.07286 20.9693 5.86329 21.0122 5.65385 20.997C5.44441 20.9818 5.2435 20.9091 5.07396 20.7871C4.90443 20.6651 4.77306 20.4988 4.6948 20.3069C4.61654 20.1151 4.59453 19.9056 4.63126 19.702L5.75366 13.4824L1.12937 9.0634C0.985099 8.92169 0.882751 8.74399 0.833317 8.54936C0.783882 8.35473 0.789226 8.15053 0.848775 7.95866C0.913829 7.76232 1.03349 7.58786 1.19419 7.45507C1.35489 7.32229 1.55019 7.2365 1.75792 7.20744L8.15559 6.2905L10.9728 0.623194C11.0647 0.436415 11.2082 0.278894 11.3869 0.168676C11.5655 0.0584575 11.7721 0 11.983 0C12.1938 0 12.4004 0.0584575 12.5791 0.168676C12.7577 0.278894 12.9012 0.436415 12.9931 0.623194L15.844 6.27946L22.2417 7.19639C22.4494 7.22545 22.6447 7.31124 22.8054 7.44403C22.9661 7.57681 23.0858 7.75127 23.1508 7.94761C23.2104 8.13948 23.2157 8.34368 23.1663 8.53831C23.1169 8.73294 23.0145 8.91064 22.8702 9.05235L18.246 13.4713L19.3684 19.691C19.4084 19.8981 19.3874 20.1122 19.3079 20.3079C19.2283 20.5037 19.0935 20.6729 18.9194 20.7957C18.7161 20.9359 18.4714 21.0058 18.2235 20.9946Z" fill="#E7E7E7"/>
                            </svg>
                        </label>
                        <label class="mx-1.5 inline-flex text-center cursor-pointer fill-grayUltraLight" for="star-5">
                            <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.2235 20.9946C18.044 20.9953 17.867 20.9536 17.7072 20.8731L11.983 17.9234L6.25874 20.8731C6.07286 20.9693 5.86329 21.0122 5.65385 20.997C5.44441 20.9818 5.2435 20.9091 5.07396 20.7871C4.90443 20.6651 4.77306 20.4988 4.6948 20.3069C4.61654 20.1151 4.59453 19.9056 4.63126 19.702L5.75366 13.4824L1.12937 9.0634C0.985099 8.92169 0.882751 8.74399 0.833317 8.54936C0.783882 8.35473 0.789226 8.15053 0.848775 7.95866C0.913829 7.76232 1.03349 7.58786 1.19419 7.45507C1.35489 7.32229 1.55019 7.2365 1.75792 7.20744L8.15559 6.2905L10.9728 0.623194C11.0647 0.436415 11.2082 0.278894 11.3869 0.168676C11.5655 0.0584575 11.7721 0 11.983 0C12.1938 0 12.4004 0.0584575 12.5791 0.168676C12.7577 0.278894 12.9012 0.436415 12.9931 0.623194L15.844 6.27946L22.2417 7.19639C22.4494 7.22545 22.6447 7.31124 22.8054 7.44403C22.9661 7.57681 23.0858 7.75127 23.1508 7.94761C23.2104 8.13948 23.2157 8.34368 23.1663 8.53831C23.1169 8.73294 23.0145 8.91064 22.8702 9.05235L18.246 13.4713L19.3684 19.691C19.4084 19.8981 19.3874 20.1122 19.3079 20.3079C19.2283 20.5037 19.0935 20.6729 18.9194 20.7957C18.7161 20.9359 18.4714 21.0058 18.2235 20.9946Z" fill="#E7E7E7"/>
                            </svg>
                        </label>
                    </section>
                    <div class="mx-1">
                        <input type="radio" name="stars" id="star-1" class="invisible ml-2.5 bg-accent" />
                        <input type="radio" name="stars" id="star-2" class="invisible bg-accent" checked />
                        <input type="radio" name="stars" id="star-3" class="invisible bg-accent" />
                        <input type="radio" name="stars" id="star-4" class="invisible bg-accent" />
                        <input type="radio" name="stars" id="star-5" class="invisible bg-accent" />
                      </div>
                </div>
                <form action="{{ route('saveReviews', $product->id) }}" method="POST" class="flex flex-col mt-6">
                    @csrf
                    <div class="flex flex-row">
                        <x-inputReviews name="name" placeholder="Имя" type="text"/>
                        <x-inputReviews name="number" placeholder="Телефон" type="tel"/>
                        <x-inputReviews name="email" placeholder="Электронная почта" type="email"/>
                    </div>
                    <x-textareaReviews text="Приемущества" name="advantages"/>
                    <x-textareaReviews text="Недостатки" name="disadvantages"/>
                    <x-textareaReviews text="Комментарий" name="comment"/>
                    <input class="w-[33%] mt-3 h-11 text-center rounded bg-accent w-[90%] text-black font-[Manrope] cursor-pointer text-base font-normal" type="submit" value="Отправить">
                </form>
            </div>
        </div>
        <div class="hidden pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="questionBlock">
            <div class="flex flex-col">
                <p class="my-1 font-['Manrope'] text-base font-bold leading-5 text-black">
                    <! -- Имя-->
                    Константин
                </p>
                <p class="mt-1 font-['Manrope'] font-normal leading-4 text-xs text-gray">
                    <! -- Дата-->
                    09.01.2023
                </p>
                <p class="my-6 font-['Manrope'] font-normal leading-4 text-base text-black">
                    <! -- Текст вопроса-->
                    Добрый день, интересует прайс на всю продукцию. Условия оптовых поставок.
                </p>
            </div>
            <div class="flex flex-col mt-6 border-t-2 border-t-grayUltraLight">
                <p class="my-6 font-['Manrope'] text-2xl font-normal leading-8 text-black">
                    Задать вопрос
                </p>
                <div class="flex flex-row">
                    <input class="mr-2.5 px-3 w-[90%] h-11 border rounded border-solid border-[#CCCCCC]" placeholder="Имя" type="text">
                    <input class="mx-2.5 px-3 w-[90%] h-11 border rounded border-solid border-[#CCCCCC]" placeholder="Телефон" type="tel">
                    <input class="ml-2.5 px-3 w-[90%] h-11 border rounded border-solid border-[#CCCCCC]" placeholder="Электронная почта" type="email">
                </div>
                <textarea class="p-3 my-6 h-40 border rounded border-solid border-[#CCCCCC]"></textarea>
                <div class="my-2.5 w-[33%] min-w-fit h-11 float-left text-center rounded bg-accent">
                    <p class="mx-2.5 my-2.5 px-2 w-[90%] text-black font-[Manrope] text-base font-normal cursor-pointer">
                        Отправить
                    </p>
                </div>
            </div>
        </div>
        <div class="block pt-5 text-[#333333] font-['Manrope'] text-base leading-6 font-normal" id="contactsBlock">
            <div class="grid grid-cols-2">
                <p class="mt-2.5 mb-1.5 bg-black my-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    Телефон
                </p>
                {{ $contacts[0]->phone }}
                <p class="mt-2.5 mb-1.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    ОГРН
                </p>
                {{ $contacts[0]->OGRN }}
                <p class="mt-2.5 mb-1.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    Электронная почта
                </p>
                {{ $contacts[0]->email }}
                <p class="mt-2.5 mb-1.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    ИНН
                </p>
                {{ $contacts[0]->INN }}
                <p class="mt-2.5 mb-1.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    Наименование
                </p>
                {{ $contacts[0]->naming }}
                <p class="mt-2.5 mb-1.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    КПП
                </p>
                {{ $contacts[0]->KPP }}
                <p class="my-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    Юридический адрес
                </p>
                {{ $contacts[0]->legal_address }}
                <p class="my-2.5 font-['Manrope'] text-base font-bold leading-5 text-black">
                    Дата регистрации
                </p>
                {{ $contacts[0]->date_reg }}
            </div>
            {{ $contacts[0]->email }}
        </div>
    </x-content>

@endsection

