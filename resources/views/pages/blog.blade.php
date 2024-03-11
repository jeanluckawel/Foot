@include('App.app')
@include('App.header')
@section('title', 'Blog')
<br>

<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32 text-center lg:text-left">
        <div
            class="block rounded-lg bg-red-500 ">
            <div class="flex flex-wrap items-center">
                <div class="block w-full shrink-0 grow-0 basis-auto lg:flex lg:w-6/12 xl:w-4/12">
                    <img src="{{ asset('img/foot') }}" alt="Trendy Pants and Shoes"
                         class="w-full rounded-t-lg lg:rounded-tr-none lg:rounded-bl-lg" />
                </div>
                <div class="w-full shrink-0 grow-0 basis-auto lg:w-6/12 xl:w-8/12">
                    <div class="px-6 py-12 md:px-12">
                        <h2 class="display-5 mb-6 text-4xl font-bold text-white">
                            CIF - UDBL 2024
                        </h2>
                        <p class="mb-12 text-neutral-500 dark:text-neutral-300">
                            La CIF est la première édition organisée à la faculté des sciences de l'information à l'UDBL. Ce championnat vise à promouvoir l'excellence sportive facultaire
                        </p>

                        <div class="grid md:grid-cols-3 lg:gap-x-12">
                            <div class="mb-12 md:mb-0">
                                <h2 class="mb-4 text-3xl font-bold text-white ">
                                    8
                                </h2>
                                <h5 class="mb-0 text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                    Equipes
                                </h5>
                            </div>

                            <div class="mb-12 md:mb-0">
                                <h2 class="mb-4 text-3xl font-bold text-white">
                                    2
                                </h2>
                                <h5 class="mb-0 text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                    Journée
                                </h5>
                            </div>

                            <div class="">
                                <h2 class="mb-4 text-3xl font-bold text-white ">
                                    4
                                </h2>
                                <h5 class="mb-0 text-lg font-medium text-neutral-500 dark:text-neutral-300">
                                    Matchs
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose -->


<section>
    <h1 class="mb-12 text-center font-sans text-5xl font-bold">Articles récents</h1>
    <div class="mx-auto grid max-w-screen-lg grid-cols-1 gap-5 p-5 sm:grid-cols-2 md:grid-cols-3 lg:gap-10">
        @foreach($foots as $foot)
            <article class="h-90 col-span-1 m-auto min-h-full cursor-pointer overflow-hidden rounded-lg pb-2 shadow-lg transition-transform duration-200 hover:translate-y-2">
                <a href="#" class="block h-full w-full">
                    <img class="max-h-50 w-full object-cover" alt="featured image" src="{{ asset('storage/'.$foot->image) }}" />
                    <div class="w-full bg-white p-4">
                        <p class="font-medium text-black">{{ $foot->created_at->format('d-m-Y H:i:s') }}</p>
{{--                        time --}}

                        <p class="mb-2 text-xl font-medium text-red-500">{{ $foot->title }}</p>
                        <p class="text-md font-light text-gray-400">{{ $foot->description }}</p>
                        <div class="justify-starts mt-4 flex flex-wrap items-center">
                            <div class="mr-2 mt-1 rounded-2xl bg-yellow-500 py-1.5 px-4 text-xs text-white">CIF</div>
                            <div class="mr-2 mt-1 rounded-2xl bg-red-500 py-1.5 px-4 text-xs text-white"> 1Xbet </div>
                        </div>
                    </div>
                </a>
            </article>
        @endforeach

    </div>
</section>

<div class=" mx-auto max-w-screen-lg bg-red-500 p-8 text-white md:flex md:items-center md:justify-around md:p-16 lg:rounded-xl">
    <div class="mr-10 mb-10 md:mb-0">
        <h2 class="mb-8 max-w-lg text-3xl font-bold sm:text-4xl">La CIF  Accueille les équipes suivantes dans sa première édition 2024.</h2>
        <ul class="flex max-w-xl flex-wrap gap-4">
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-yellow-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">L3 RESEAUX</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-yellow-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">L1 B</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-yellow-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">L4 MSI, DSG, GL</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-yellow-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">L2 B</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-yellow-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">L2 A</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-yellow-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">L3 MSI, DSG, GL</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-yellow-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">L4 RESEAUX</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-yellow-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">L1 A</p>
            </li>
        </ul>
    </div>
    <div class="whitespace-nowrap">
      <a href="#">  <button class="focus:outline-4 rounded-xl bg-yellow-400 px-4 py-3 font-medium text-white shadow-md outline-white transition  ">Voir classement</button> </a>
    </div>
</div>
<br>

<!-- ====== Brands Section Start -->
{{--<section class="bg-white py-20 dark:bg-dark lg:py-[120px]">--}}
{{--    <div class="container mx-auto">--}}
{{--        <div class="flex flex-wrap -mx-4">--}}
{{--            <div class="w-full px-4">--}}
{{--                <div class="flex flex-wrap items-center justify-center">--}}
{{--                    <a--}}
{{--                        href="javascript:void(0)"--}}
{{--                        class="mx-4 flex w-[150px] items-center justify-center py-5 2xl:w-[180px]"--}}
{{--                    >--}}
{{--                        <img--}}
{{--                            src="{{ asset('img/LogoUDbl.png') }}"--}}
{{--                            alt="image"--}}
{{--                            class="w-full h-10"--}}
{{--                        />--}}
{{--                    </a>--}}
{{--                    <a--}}
{{--                        href="javascript:void(0)"--}}
{{--                        class="mx-4 flex w-[150px] items-center justify-center py-5 2xl:w-[180px]"--}}
{{--                    >--}}
{{--                        <img--}}
{{--                            src="https://cdn.tailgrids.com/2.0/image/assets/images/brands/lineicons.svg"--}}
{{--                            alt="image"--}}
{{--                            class="w-full h-10"--}}
{{--                        />--}}
{{--                    </a>--}}
{{--                    <a--}}
{{--                        href="javascript:void(0)"--}}
{{--                        class="mx-4 flex w-[150px] items-center justify-center py-5 2xl:w-[180px]"--}}
{{--                    >--}}
{{--                        <img--}}
{{--                            src="https://cdn.tailgrids.com/2.0/image/assets/images/brands/uideck.svg"--}}
{{--                            alt="image"--}}
{{--                            class="w-full h-10"--}}
{{--                        />--}}
{{--                    </a>--}}
{{--                    <a--}}
{{--                        href="javascript:void(0)"--}}
{{--                        class="mx-4 flex w-[150px] items-center justify-center py-5 2xl:w-[180px]"--}}
{{--                    >--}}
{{--                        <img--}}
{{--                            src="https://cdn.tailgrids.com/2.0/image/assets/images/brands/ayroui.svg"--}}
{{--                            alt="image"--}}
{{--                            class="w-full h-10"--}}
{{--                        />--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- ====== Brands Section End -->

@include('App.footer')


