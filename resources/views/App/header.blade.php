@include('App.app')
<script type="module" defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
<header class="fixed w-full">
    <nav class="bg-red-500 border-gray-200 px-4 lg:px-6 py-2.5 ">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="{{ asset('img/LogoUDbl.png') }}" class="mr-3 h-6 sm:h-9" alt="cif" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CIF</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="#" class="text-white  hover:bg-yellow-500   font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 ">Contact</a>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg lg:hidden" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white   ">Accueil</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white   ">Classement</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-white  ">Meilleur buteur</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- ====== Navbar Section Start -->
{{--<header--}}
{{--    x-data="--}}
{{--   {--}}
{{--   navbarOpen: true--}}
{{--   }--}}
{{--   "--}}
{{--    class="flex items-center w-full bg-red-500 "--}}
{{-->--}}
{{--    <div class="container mx-auto ">--}}
{{--        <div class="relative flex items-center justify-between -mx-4">--}}
{{--            <div class="max-w-full px-4 w-60">--}}
{{--                <a href="javascript:void(0)" class="block w-full py-5">--}}
{{--                    <img--}}
{{--                        src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-primary.svg"--}}
{{--                        alt="logo"--}}
{{--                        class="dark:hidden"--}}
{{--                    />--}}
{{--                    <img--}}
{{--                        src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg"--}}
{{--                        alt="logo"--}}
{{--                        class="hidden dark:block"--}}
{{--                    />--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="flex items-center justify-between w-full px-4">--}}
{{--                <div>--}}
{{--                    <button--}}
{{--                        @click="navbarOpen = !navbarOpen"--}}
{{--                        :class="navbarOpen && 'navbarTogglerActive' "--}}
{{--                        id="navbarToggler"--}}
{{--                        class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"--}}
{{--                    >--}}
{{--               <span--}}
{{--                   class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"--}}
{{--               ></span>--}}
{{--                        <span--}}
{{--                            class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"--}}
{{--                        ></span>--}}
{{--                        <span--}}
{{--                            class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"--}}
{{--                        ></span>--}}
{{--                    </button>--}}
{{--                    <nav--}}
{{--                        :class="!navbarOpen && 'hidden' "--}}
{{--                        id="navbarCollapse"--}}
{{--                        class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none dark:bg-dark-2 lg:dark:bg-transparent"--}}
{{--                    >--}}
{{--                        <ul class="block lg:flex">--}}
{{--                            <li>--}}
{{--                                <a--}}
{{--                                    href="javascript:void(0)"--}}
{{--                                    class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex dark:text-dark-6 dark:hover:text-white"--}}
{{--                                >--}}
{{--                                    Home--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a--}}
{{--                                    href="javascript:void(0)"--}}
{{--                                    class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex dark:text-dark-6 dark:hover:text-white"--}}
{{--                                >--}}
{{--                                    Payment--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a--}}
{{--                                    href="javascript:void(0)"--}}
{{--                                    class="flex py-2 text-base font-medium text-body-color hover:text-dark lg:ml-12 lg:inline-flex dark:text-dark-6 dark:hover:text-white"--}}
{{--                                >--}}
{{--                                    Features--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--                <div class="justify-end hidden pr-16 sm:flex lg:pr-0">--}}
{{--                    <a--}}
{{--                        href="javascript:void(0)"--}}
{{--                        class="py-3 text-base font-medium px-7 text-dark dark:text-white hover:text-primary"--}}
{{--                    >--}}
{{--                        Login--}}
{{--                    </a>--}}
{{--                    <a--}}
{{--                        href="javascript:void(0)"--}}
{{--                        class="py-3 text-base font-medium text-white rounded-md bg-primary px-7 hover:bg-primary/90"--}}
{{--                    >--}}
{{--                        Sign Up--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}
<!-- ====== Navbar Section End -->

{{--button nemu script --}}

