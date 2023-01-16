
<header class="bg-head">
    <div class="flex flex-row justify-around items-center justify-items-center container w-[80%] mx-auto">
        <div class="w-[30%] py-[28px]">
            <p class="text-black font-['Manrope'] non-italic text-2xl font-bold leading-8">
                {{ env('APP_NAME') }}
            </p>
        </div>
        <div class="w-[70%] py-[28px] flex flex-row flex-wrap justify-between rounded-[5px] border-[1px solid greyLight] box-border min-h-min">
            <div class="flex border-[greyLight] w-[100] focus:border-grey">
                <label class="flex items-center w-[100%] h-[46px] rounded border border-grayLight ">
                    <svg class="px-2" width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.6714 18.0942L15.8949 14.3287C17.1134 12.7764 17.7745 10.8595 17.7721 8.88603C17.7721 7.12854 17.2509 5.41052 16.2745 3.94922C15.2981 2.48792 13.9103 1.34897 12.2866 0.676412C10.6629 0.00385015 8.87617 -0.172123 7.15245 0.170746C5.42873 0.513616 3.84539 1.35993 2.60266 2.60266C1.35993 3.84539 0.513616 5.42873 0.170746 7.15245C-0.172123 8.87617 0.00385015 10.6629 0.676412 12.2866C1.34897 13.9103 2.48792 15.2981 3.94922 16.2745C5.41052 17.2509 7.12854 17.7721 8.88603 17.7721C10.8595 17.7745 12.7764 17.1134 14.3287 15.8949L18.0942 19.6714C18.1974 19.7755 18.3203 19.8582 18.4556 19.9146C18.591 19.971 18.7362 20 18.8828 20C19.0294 20 19.1746 19.971 19.31 19.9146C19.4453 19.8582 19.5682 19.7755 19.6714 19.6714C19.7755 19.5682 19.8582 19.4453 19.9146 19.31C19.971 19.1746 20 19.0294 20 18.8828C20 18.7362 19.971 18.591 19.9146 18.4556C19.8582 18.3203 19.7755 18.1974 19.6714 18.0942ZM2.22151 8.88603C2.22151 7.56791 2.61238 6.2794 3.34468 5.18342C4.07699 4.08745 5.11785 3.23324 6.33563 2.72882C7.55341 2.22439 8.89342 2.09241 10.1862 2.34957C11.479 2.60672 12.6665 3.24145 13.5986 4.1735C14.5306 5.10555 15.1653 6.29306 15.4225 7.58585C15.6796 8.87864 15.5477 10.2186 15.0432 11.4364C14.5388 12.6542 13.6846 13.6951 12.5886 14.4274C11.4927 15.1597 10.2041 15.5505 8.88603 15.5505C7.11849 15.5505 5.42334 14.8484 4.1735 13.5986C2.92366 12.3487 2.22151 10.6536 2.22151 8.88603Z" fill="#333333"/>
                    </svg>
                    <input type="text" placeholder="Поиск материалов" class="w-full max-w-xs bg-transparent border-none text-grey focus:outline-none" maxlength="30">
                </label>
            </div>
            <p class="flex items-center text-black font-['Manrope'] non-italic desktop2xl:text-xl font-normal leading-8">
                +7 (964) 863-78-78
            </p>
        </div>
    </div>
</header>
