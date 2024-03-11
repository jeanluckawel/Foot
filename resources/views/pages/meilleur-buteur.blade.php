@include('App.app')
@include('App.header')
@section('title', 'milleur-buteur')

<br>
<br>
<br>
<br>



<!-- ====== Call To Action Section Start -->
<section class="py-20 lg:py-[120px] bg-white dark:bg-dark">
    <div class="container mx-auto">
        <div
            class="relative z-10 overflow-hidden rounded bg-primary py-12 px-8 md:p-[70px]"
        >
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4 lg:w-1/2">
               <span class="block mb-4 text-base font-medium text-white">
               Find Your Next Dream App
               </span>
                    <h2
                        class="mb-6 text-3xl font-bold leading-tight text-white sm:mb-8 sm:text-[40px]/[48px] lg:mb-0"
                    >
                        <span class="xs:block"> Get started with </span>
                        <span>our free trial</span>
                    </h2>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="flex flex-wrap lg:justify-end">
                        <a
                            href="javascript:void(0)"
                            class="inline-flex py-3 my-1 mr-4 text-base font-medium transition bg-white rounded-md hover:bg-shadow-1 text-primary px-7"
                        >
                            Get Pro Version
                        </a>
                        <a
                            href="javascript:void(0)"
                            class="inline-flex py-3 my-1 text-base font-medium text-white transition rounded-md bg-secondary px-7 hover:bg-opacity-90"
                        >
                            Start Free Trial
                        </a>
                    </div>
                </div>
            </div>
            <div>
            <span class="absolute top-0 left-0 z-[-1]">
               <svg
                   width="189"
                   height="162"
                   viewBox="0 0 189 162"
                   fill="none"
                   xmlns="http://www.w3.org/2000/svg"
               >
                  <ellipse
                      cx="16"
                      cy="-16.5"
                      rx="173"
                      ry="178.5"
                      transform="rotate(180 16 -16.5)"
                      fill="url(#paint0_linear)"
                  />
                  <defs>
                     <linearGradient
                         id="paint0_linear"
                         x1="-157"
                         y1="-107.754"
                         x2="98.5011"
                         y2="-106.425"
                         gradientUnits="userSpaceOnUse"
                     >
                        <stop stop-color="white" stop-opacity="0.07" />
                        <stop offset="1" stop-color="white" stop-opacity="0" />
                     </linearGradient>
                  </defs>
               </svg>
            </span>
                <span class="absolute bottom-0 right-0 z-[-1]">
               <svg
                   width="191"
                   height="208"
                   viewBox="0 0 191 208"
                   fill="none"
                   xmlns="http://www.w3.org/2000/svg"
               >
                  <ellipse
                      cx="173"
                      cy="178.5"
                      rx="173"
                      ry="178.5"
                      fill="url(#paint0_linear)"
                  />
                  <defs>
                     <linearGradient
                         id="paint0_linear"
                         x1="-3.27832e-05"
                         y1="87.2457"
                         x2="255.501"
                         y2="88.5747"
                         gradientUnits="userSpaceOnUse"
                     >
                        <stop stop-color="white" stop-opacity="0.07" />
                        <stop offset="1" stop-color="white" stop-opacity="0" />
                     </linearGradient>
                  </defs>
               </svg>
            </span>
            </div>
        </div>
    </div>
</section>
<!-- ====== Call To Action Section End -->

<!-- ====== Table Section Start -->
<section class="bg-white dark:bg-dark py-20 lg:py-[120px]">
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="max-w-full overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                        <tr class="text-center bg-red-500">
                            <th
                                class="w-1/6 min-w-[160px] border-l border-transparent py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                            >
                                TLD
                            </th>
                            <th
                                class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                            >
                                Duration
                            </th>
                            <th
                                class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4"
                            >
                                Registration
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td
                                class="text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] dark:bg-dark-3 dark:border-dark dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                            >
                                .com
                            </td>
                            <td
                                class="text-dark border-b border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                            >
                                1 Year
                            </td>
                            <td
                                class="text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] dark:bg-dark-3 dark:border-dark dark:text-dark-7 py-5 px-2 text-center text-base font-medium"
                            >
                                $75.00
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Table Section End -->

@include('App.footer')
