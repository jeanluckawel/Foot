@include('App.app')
@include('App.header')
@section('title', 'Blog')



<section class="py-20">
    <h1 class="mb-12 text-center font-sans text-5xl font-bold">Recent Posts</h1>
    <div class="mx-auto grid max-w-screen-lg grid-cols-1 gap-5 p-5 sm:grid-cols-2 md:grid-cols-3 lg:gap-10">

        <article class="h-90 col-span-1 m-auto min-h-full cursor-pointer overflow-hidden rounded-lg pb-2 shadow-lg transition-transform duration-200 hover:translate-y-2">
            <a href="#" class="block h-full w-full">
                <img class="max-h-40 w-full object-cover" alt="featured image" src="https://images.unsplash.com/photo-1660241588741-d653d53348fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw5fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" />
                <div class="w-full bg-white p-4">
                    <p class="text-md font-medium text-indigo-500">Nature</p>
                    <p class="mb-2 text-xl font-medium text-gray-800">A Visit to Mount Abignale</p>
                    <p class="text-md font-light text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse vel neque ipsam?</p>
                    <div class="justify-starts mt-4 flex flex-wrap items-center">
                        <div class="mr-2 mt-1 rounded-2xl bg-blue-100 py-1.5 px-4 text-xs text-gray-600">#js</div>
                        <div class="mr-2 mt-1 rounded-2xl bg-blue-100 py-1.5 px-4 text-xs text-gray-600">#icefactory</div>
                    </div>
                </div>
            </a>
        </article>

        <article class="h-90 col-span-1 m-auto min-h-full cursor-pointer overflow-hidden rounded-lg pb-2 shadow-lg transition-transform duration-200 hover:translate-y-2">
            <a href="#" class="block h-full w-full">
                <img class="max-h-40 w-full object-cover" alt="featured image" src="https://images.unsplash.com/photo-1660213372424-deecb106a28e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0Mnx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" />
                <div class="w-full bg-white p-4">
                    <p class="text-md font-medium text-indigo-500">Gardening</p>
                    <p class="mb-2 text-xl font-medium text-gray-800">Sunflowers are my favorite</p>
                    <p class="text-md font-light text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse vel neque ipsam?</p>
                    <div class="justify-starts mt-4 flex flex-wrap items-center">
                        <div class="mr-2 mt-1 rounded-2xl bg-blue-100 py-1.5 px-4 text-xs text-gray-600">#js</div>
                        <div class="mr-2 mt-1 rounded-2xl bg-blue-100 py-1.5 px-4 text-xs text-gray-600">#icefactory</div>
                    </div>
                </div>
            </a>
        </article>

        <article class="h-90 col-span-1 m-auto min-h-full cursor-pointer overflow-hidden rounded-lg pb-2 shadow-lg transition-transform duration-200 hover:translate-y-2">
            <a href="#" class="block h-full w-full">
                <img class="max-h-40 w-full object-cover" alt="featured image" src="https://images.unsplash.com/photo-1660227868332-93e0a0a8c67e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzOXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" />
                <div class="w-full bg-white p-4">
                    <p class="text-md font-medium text-indigo-500">Coding</p>
                    <p class="mb-2 text-xl font-medium text-gray-800">Getting to know the Ice Factory Pattern</p>
                    <p class="text-md font-light text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse vel neque ipsam?</p>
                    <div class="justify-starts mt-4 flex flex-wrap items-center">
                        <div class="mr-2 mt-1 rounded-2xl bg-blue-100 py-1.5 px-4 text-xs text-gray-600">#js</div>
                        <div class="mr-2 mt-1 rounded-2xl bg-blue-100 py-1.5 px-4 text-xs text-gray-600">#icefactory</div>
                    </div>
                </div>
            </a>
        </article>
    </div>
</section>

<div class=" mx-auto max-w-screen-lg bg-red-500 p-8 text-white md:flex md:items-center md:justify-around md:p-16 lg:rounded-xl">
    <div class="mr-10 mb-10 md:mb-0">
        <h2 class="mb-8 max-w-lg text-3xl font-bold sm:text-4xl">Announcement banner for your new features</h2>
        <ul class="flex max-w-xl flex-wrap gap-4">
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-green-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">A new feature for you</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-green-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">Feature Enhancements</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-green-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">Site Speedup</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-green-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">More Components</p>
            </li>
            <li class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6 text-green-300">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                </svg>
                <p class="text-gray-100">Further Enhancements to the Dashboard</p>
            </li>
        </ul>
    </div>
    <div class="whitespace-nowrap">
        <button class="focus:outline-4 rounded-xl bg-emerald-400 px-4 py-3 font-medium text-white shadow-md outline-white transition hover:bg-emerald-500">Try these now</button>
    </div>
</div>


