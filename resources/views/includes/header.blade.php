<header>
    <form action="{{ route('search') }}" method="POST" class="bg-head">
        @csrf
        <div class="ml-[18%] flex flex-row items-center justify-items-center w-[62.7083333%] lg:ml-auto mx-auto lg:flex-col lg:w-[90%] lg:gap-[18px]">
            <div class="w-[18.6046512%] py-[35px] lg:w-[100%] lg:flex lg:justify-center lg:py-0 lg:mt-[18px]">
                <a href="{{ route('index') }}" class="text-black whitespace-nowrap font-['Manrope'] order-1 non-italic text-[24px] font-bold leading-8 xl:text-base lg:text-lg">
                    Шахунья-Лес Агро
                </a>
            </div>
            <div class="flex flrx row sm:mb-[20px] w-[100%] lg:order-3 lg:mb-[18px]">
                <div class="pl-[82px] w-[80%] flex flex-row border-[greyLight] focus:border-grey sm:w-[100%] sm:pl-0 ">
                    <label class="flex w-[97.3%] items-center h-[46px] rounded border border-grayLight sm:w-[100%]">
                        <svg class="px-2" width="40" height="40" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.6714 18.0942L15.8949 14.3287C17.1134 12.7764 17.7745 10.8595 17.7721 8.88603C17.7721 7.12854 17.2509 5.41052 16.2745 3.94922C15.2981 2.48792 13.9103 1.34897 12.2866 0.676412C10.6629 0.00385015 8.87617 -0.172123 7.15245 0.170746C5.42873 0.513616 3.84539 1.35993 2.60266 2.60266C1.35993 3.84539 0.513616 5.42873 0.170746 7.15245C-0.172123 8.87617 0.00385015 10.6629 0.676412 12.2866C1.34897 13.9103 2.48792 15.2981 3.94922 16.2745C5.41052 17.2509 7.12854 17.7721 8.88603 17.7721C10.8595 17.7745 12.7764 17.1134 14.3287 15.8949L18.0942 19.6714C18.1974 19.7755 18.3203 19.8582 18.4556 19.9146C18.591 19.971 18.7362 20 18.8828 20C19.0294 20 19.1746 19.971 19.31 19.9146C19.4453 19.8582 19.5682 19.7755 19.6714 19.6714C19.7755 19.5682 19.8582 19.4453 19.9146 19.31C19.971 19.1746 20 19.0294 20 18.8828C20 18.7362 19.971 18.591 19.9146 18.4556C19.8582 18.3203 19.7755 18.1974 19.6714 18.0942ZM2.22151 8.88603C2.22151 7.56791 2.61238 6.2794 3.34468 5.18342C4.07699 4.08745 5.11785 3.23324 6.33563 2.72882C7.55341 2.22439 8.89342 2.09241 10.1862 2.34957C11.479 2.60672 12.6665 3.24145 13.5986 4.1735C14.5306 5.10555 15.1653 6.29306 15.4225 7.58585C15.6796 8.87864 15.5477 10.2186 15.0432 11.4364C14.5388 12.6542 13.6846 13.6951 12.5886 14.4274C11.4927 15.1597 10.2041 15.5505 8.88603 15.5505C7.11849 15.5505 5.42334 14.8484 4.1735 13.5986C2.92366 12.3487 2.22151 10.6536 2.22151 8.88603Z" fill="#333333"/>
                        </svg>
                        <input type="text" name="search" placeholder="Поиск материалов" class="w-full border-none bg-head text-grey focus:outline-none" maxlength="30">
                    </label>
                </div>
                <!-- <a href="{{ route('favorites') }}" class="flex flex-col items-center justify-between h-[46px] px-[49px] cursor-pointer sm:px-0 sm:mx-auto">
                    <svg width="17" height="22" viewBox="0 0 17 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="hover:fill-[#FFED4E] hover:stroke-[#FFED4E] cursor-pointer" d="M0.863482 21.1579L0.861952 21.1571C0.752537 21.0956 0.66143 21.0061 0.597955 20.8978C0.53454 20.7896 0.500981 20.6666 0.500701 20.5412V2.81542H0.500828L0.500574 2.80415C0.487203 2.21104 0.7081 1.63656 1.11539 1.2052C1.52079 0.775847 2.07834 0.522724 2.66818 0.5H14.2499C14.8397 0.522724 15.3973 0.775847 15.8027 1.2052C16.21 1.63656 16.4309 2.21104 16.4175 2.80415L16.4174 2.80415V2.81542V20.54C16.4164 20.6632 16.3833 20.7839 16.3214 20.8904C16.2593 20.9973 16.1703 21.086 16.0632 21.1478L16.3132 21.5808L16.0632 21.1478C15.9555 21.21 15.8334 21.2427 15.709 21.2427C15.5847 21.2427 15.4625 21.21 15.3549 21.1478L15.3512 21.1457L8.49995 17.267L8.24622 17.1233L7.99625 17.2734L1.55583 21.1401L1.55581 21.14L1.54951 21.1439C1.4451 21.2087 1.32566 21.2453 1.20295 21.2499C1.08389 21.2483 0.967133 21.2167 0.863482 21.1579Z" fill="white" stroke="#333333"/>
                    </svg>
                    <p class="font-['Manrope'] font-normal text-[12px] leading-4">Избранное</p>
                </a> -->
            </div>
            <p class="flex items-center text-black font-['Manrope'] non-italic desktop2xl:text-xl font-normal whitespace-nowrap leading-8 sm:hidden lg:order-2">
                +7 (964) 863-78-78
            </p>
        </div>
    </form>
</header>
