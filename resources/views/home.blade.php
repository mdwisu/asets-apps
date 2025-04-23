@extends('layouts.app')

@section('title', 'The Big Bang Of Commercial Universe Is Coming')

@section('content')

    <div class="overflow-hidden"
        style="background-image: url('https://images.pexels.com/photos/936722/pexels-photo-936722.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'); background-size: cover; background-position: center; background-repeat: no-repeat">
        <div class=" bg-black bg-opacity-70 w-full min-h-screen ">
            <div
                class="flex relative top-0 flex-col w-full py-16 lg:flex-row md:justify-between px-6 gap-9 items-center lg:py-32 lg:px-14">
                <div>
                    <x-steppers />
                </div>
                <div class="text-white lg:text-start flex flex-col justify-center">
                    <h5 class="mb-1 leading-relaxed font-semibold">Welcome To</h5>
                    <h1 class="text-6xl leading-relaxed font-bold">Asets</h1>
                    <h5 class="mb-2">Asets - <span class="italic font-semibold">Empowering Your Business and Beyond</span>
                    </h5>
                    <p class="lg:leading-relaxed font-light text-justify" x-text="translations.description">Asets, a global
                        leader in
                        Property Investment Management,
                        introduces
                        Indonesia's first
                        AI-powered e-commerce platform to support businesses at every level. Through the Asets Virtual
                        Intelligence
                        System (AVIS), we connect millions of MSMEs to a network of strategic assets and financial
                        institutions,
                        providing essential tools to drive growth and online success. With Asets, unlock new opportunities
                        to
                        elevate your business.
                    </p>
                    {{-- CTA Button --}}
                    <div class="mt-5 flex gap-4 flex-col justify-center lg:justify-start md:flex-row">
                        <div class="">
                            <a href="https://wa.me/62811102239?text=Halo%20saya%20ingin%20bertanya%20lebih%20lanjut"
                                target="_blank">
                                <x-button-primary>Site Survey <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                    </svg>
                                </x-button-primary>
                            </a>
                        </div>

                        <div class="">
                            <a href="https://www.instagram.com/asets.co/" target="_blank" rel="noopener noreferrer">
                                <x-button-primary>Explore Insight <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                </x-button-primary>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="relative w-full lg:w-1/3  lg:flex flex-col ">
                    <div class="swiper-container" id="slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <x-card-sliders
                                    image="https://images.pexels.com/photos/10546983/pexels-photo-10546983.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                    title="Commercial Assets Finder"
                                    description="This service assists businesses and investors in locating potential and strategic commercial assets, such as office spaces, retail locations, or industrial zones..."
                                    qr="/assets/img/qr-instagram.png" showButton="true" showQR="true" />
                            </div>

                            <div class="swiper-slide">
                                <x-card-sliders
                                    image="https://images.pexels.com/photos/273244/pexels-photo-273244.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                    title="Assets Property Management"
                                    description="This service provides comprehensive management of commercial property assets, covering administration and day-to-day operations..."
                                    qr="/assets/img/qr-instagram.png" showButton="true" showQR="true" />
                            </div>

                            <div class="swiper-slide">
                                <x-card-sliders
                                    image="https://images.pexels.com/photos/4186017/pexels-photo-4186017.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                    title="Assets Capital Investment"
                                    description="This service focuses on offering capital investment opportunities for business and landowners to enhance their business potential..."
                                    qr="/assets/img/qr-instagram.png" showButton="true" showQR="true" />
                            </div>
                        </div>
                    </div>

                    <div class="flex lg:justify-start justify-around gap-5 mt-4">
                        <x-button-icons id="prev">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-11">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>
                        </x-button-icons>
                        <x-button-icons id="next">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-11">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </x-button-icons>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <section class="bg-white px-6 lg:px-14">

        {{-- FILTERED SECTION AMOUNT --}}
        <div class="relative flex -top-20">
            <x-filter-search />
        </div>

        {{-- GALERY IMAGE --}}
        <div class="">
            <div class="w-full pb-12">
                <x-galery-image />
            </div>
        </div>
        <br>

        {{-- SPBU CARD LOCATION SECTION --}}
        <div class="mb-16">
            <div class="text-center">
                <x-heading-title title="Asets Commercial Location Listing" />
            </div>

            <div x-data="paginationComponentSPBU()" x-init="fetchData()">

                <div x-show="isLoading" class="text-center py-4">
                    <span class="flex gap-2 justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 24 24">
                            <g fill="none" stroke="#610086" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path stroke-dasharray="16" stroke-dashoffset="16" d="M12 3c4.97 0 9 4.03 9 9">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s"
                                        values="16;0" />
                                    <animateTransform attributeName="transform" dur="1.5s" repeatCount="indefinite"
                                        type="rotate" values="0 12 12;360 12 12" />
                                </path>
                                <path stroke-dasharray="64" stroke-dashoffset="64" stroke-opacity="0.3"
                                    d="M12 3c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9c0 -4.97 4.03 -9 9 -9Z">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="1.2s"
                                        values="64;0" />
                                </path>
                            </g>
                        </svg></span>
                    Loading please wait ...
                </div>

                <div x-show="!isLoading">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4  gap-4 auto-rows-fr ">
                        <template x-for="listing in listingData" :key="listing.listing_id">
                            <div class="rounded-lg flex-col flex ">
                                <div class="relative px-4 flex justify-between top-9 left-1 z-10">
                                    <span :class="listing.available == 1 ? 'bg-custom-primary' : 'bg-zinc-700'"
                                        class="text-xs rounded shadow py-1 px-4 text-white"
                                        x-text="`${listing.available == 1 ? 'Available Commercial Space' : 'Leased'}`"></span>

                                    @auth
                                        <!-- Tombol Love, hanya ditampilkan jika pengguna sudah login -->
                                        <a href="#" class="love-button">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="gray" viewBox="0 0 24 24" stroke="white"
                                                stroke-width="2">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </a>
                                    @else
                                        <!-- Tombol Love dengan link ke halaman login jika belum login -->
                                        <a href="{{ route('login-form') }}" class="love-button">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="gray" viewBox="0 0 24 24" stroke="white"
                                                stroke-width="2">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </a>
                                    @endauth
                                </div>

                                <div x-data="{ isLoading: true, activeSlide: 1, slides: listing.photos }" x-init="setTimeout(() => { isLoading = false }, 1000)" class="relative w-full group">

                                    <div x-show="isLoading"
                                        class="absolute inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 z-50">
                                        <div class="flex flex-col items-center">
                                            <div
                                                class="w-16 h-16 border-4 border-white border-t-transparent rounded-full animate-spin">
                                            </div>
                                            <p class="mt-3 text-white text-lg">Loading...</p>
                                        </div>
                                    </div>

                                    <!-- Slider Container -->
                                    <div class="rounded-2xl overflow-hidden">
                                        <template x-for="(slide, index) in slides" :key="index">
                                            <div x-show="activeSlide === index + 1"
                                                class="transform transition-transform duration-300 ease-in-out">
                                                <img class="rounded-2xl w-full h-72 object-cover"
                                                    :src="slide.image_url ||
                                                        'https://th.bing.com/th/id/OIP.H1gHhKVbteqm1U5SrwpPgwAAAA?rs=1&pid=ImgDetMain'"
                                                    :alt="'Slide ' + (index + 1)" />
                                            </div>
                                        </template>
                                    </div>

                                    <!-- Navigation Buttons -->
                                    <button @click="activeSlide = activeSlide > 1 ? activeSlide - 1 : slides.length"
                                        class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300  backdrop-blur-md text-white rounded-full p-1 hover:bg-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5" d="m14 7l-5 5l5 5" />
                                        </svg>
                                    </button>
                                    <button @click="activeSlide = activeSlide < slides.length ? activeSlide + 1 : 1"
                                        class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white/30 opacity-0 group-hover:opacity-100 transition-opacity duration-300  backdrop-blur-sm text-white rounded-full p-1 hover:bg-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            viewBox="0 0 24 24">
                                            <path fill="none" stroke="#fff" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5" d="m10 17l5-5l-5-5" />
                                        </svg>
                                    </button>

                                    <!-- Indicators -->
                                    <div class="flex justify-center space-x-2 mt-4 absolute bottom-14 left-0 right-0">
                                        <template x-for="(slide, index) in slides" :key="index">
                                            <button @click="activeSlide = index + 1"
                                                :class="activeSlide === index + 1 ? 'bg-gray-500' : 'bg-gray-200'"
                                                class="w-2 h-2 rounded-full transition-colors duration-300"></button>
                                        </template>
                                    </div>
                                </div>


                                <div class="">
                                    <div
                                        class="rounded-2xl  bg-white flex flex-col shadow-lg p-3 m-2 -top-14 relative h-56">
                                        <div class="flex flex-col text-sm py-1 space-y-3">
                                            <div>
                                                <a :href="`/detail-spbu/${listing.listing_id}`">
                                                    <h5 class="font-bold lg:text-sm text-custom-primary line-clamp-1"
                                                        x-text="listing.name.split(' ').slice(3).join(' ')">
                                                    </h5>
                                                </a>
                                                <p class="mb-3 mt-1 lg:text-xs font-normal text-gray-700 line-clamp-1"
                                                    x-text="(() => {
                                                    const parts = listing.address.split(',').map(part => part.trim());
                                                    return parts[parts.length - 1] === 'Indonesia'
                                                        ? parts[parts.length - 2]
                                                        : parts[parts.length - 1];
                                                })()">
                                                </p>
                                            </div>
                                            <div class="flex flex-col w-full h-full space-y-1">
                                                <div class="flex">
                                                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="size-5 text-custom-primary">
                                                            <path
                                                                d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                                                clip-rule="evenodd" />
                                                            <path
                                                                d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                                                        </svg>
                                                    </p>
                                                    <p class="leading-relaxed ml-2 font-semibold text-custom-primary"
                                                        x-text="listing.starting_display_price ? formatPrice(listing.starting_display_price).replace('Bulan', 'Month') : 'Price not available'">
                                                    </p>
                                                </div>
                                                <div class="flex">
                                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24"
                                                            class="size-5 text-custom-primary" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" />
                                                        </svg>
                                                    </p>
                                                    <p class="leading-relaxed font-semibold ml-2 text-gray-600 line-clamp-2"
                                                        x-text="listing.address"></p>
                                                </div>
                                                <div class="flex ">
                                                    <p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="size-5 text-custom-primary">
                                                            <path
                                                                d="M19.006 3.705a.75.75 0 1 0-.512-1.41L6 6.838V3a.75.75 0 0 0-.75-.75h-1.5A.75.75 0 0 0 3 3v4.93l-1.006.365a.75.75 0 0 0 .512 1.41l16.5-6Z" />
                                                            <path fill-rule="evenodd"
                                                                d="M3.019 11.114 18 5.667v3.421l4.006 1.457a.75.75 0 1 1-.512 1.41l-.494-.18v8.475h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3v-9.129l.019-.007ZM18 20.25v-9.566l1.5.546v9.02H18Zm-9-6a.75.75 0 0 0-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75V15a.75.75 0 0 0-.75-.75H9Z"
                                                                clip-rule="evenodd" />
                                                        </svg>

                                                    </p>
                                                    <p class="leading-relaxed font-semibold ml-2 text-gray-600"
                                                        x-text="`${listing.total_space_available} Total Space Available`">
                                                    </p>
                                                </div>
                                                <br>
                                                <div class="flex mt-auto ">
                                                    <a :href="`/detail-spbu/${listing.listing_id}`"
                                                        class="w-full text-center text-white bg-purple-950 hover:bg-purple-800 focus:ring-4  font-medium rounded-lg text-xs px-3 py-2 ">
                                                        Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="flex justify-center lg:space-x-2 overflow-auto">
                    <!-- First Page Button -->
                    <button data-tooltip-target="tooltip-first-page" @click="goToPage(1)" :disabled="currentPage === 1"
                        class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#610086"
                                d="m4.836 12l6.207 6.207l1.414-1.414L7.664 12l4.793-4.793l-1.414-1.414zm5.65 0l6.207 6.207l1.414-1.414L13.314 12l4.793-4.793l-1.414-1.414z" />
                        </svg>
                    </button>

                    <div id="tooltip-first-page" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-custom-primary rounded-lg shadow-sm opacity-0 tooltip ">
                        Go to first page
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <!-- Previous Page Button -->
                    <button @click="prevPage" :disabled="currentPage === 1"
                        class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="none" stroke="#610086" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m14 7l-5 5m0 0l5 5" />
                        </svg>
                    </button>

                    <!-- Page Numbers -->
                    <template x-for="page in totalPagesArray" :key="page">
                        <button
                            :class="{
                                'bg-custom-primary text-white rounded-lg': page === currentPage,
                                '': page !== currentPage
                            }"
                            @click="goToPage(page)" class="px-3 py-1 text-xs lg:text-base rounded">
                            <span x-text="page"></span>
                        </button>
                    </template>

                    <!-- Next Page Button -->
                    <button @click="nextPage" :disabled="currentPage === totalPages"
                        class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 12 24">
                            <path fill="#610086" fill-rule="evenodd"
                                d="M10.157 12.711L4.5 18.368l-1.414-1.414l4.95-4.95l-4.95-4.95L4.5 5.64l5.657 5.657a1 1 0 0 1 0 1.414" />
                        </svg>
                    </button>

                    <!-- Last Page Button -->
                    <button data-tooltip-target="tooltip-last-page" @click="goToPage(totalPages)"
                        :disabled="currentPage === totalPages" class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#610086"
                                d="m19.164 12l-6.207-6.207l-1.414 1.414L16.336 12l-4.793 4.793l1.414 1.414zm-5.65 0L7.307 5.793L5.893 7.207L10.686 12l-4.793 4.793l1.414 1.414z" />
                        </svg>
                    </button>
                    <div id="tooltip-last-page" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-custom-primary rounded-lg shadow-sm opacity-0 tooltip ">
                        Go to last page
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>

                {{-- <div class="flex justify-center lg:space-x-2 overflow-auto">
                        <button @click="prevPage" :disabled="currentPage === 1" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path fill="none" stroke="#610086" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m14 7l-5 5m0 0l5 5" />
                            </svg>
                        </button>

                        <template x-for="page in totalPagesArray" :key="page">
                            <button
                                :class="{
                                    'bg-custom-primary text-white rounded-lg ': page === currentPage,
                                    '': page !==
                                        currentPage
                                }"
                                @click="goToPage(page)" class="px-3 py-1 text-xs lg:text-base rounded">
                                <span x-text="page"></span>
                            </button>
                        </template>

                        <button @click="nextPage" :disabled="currentPage === totalPages" class="text-xs lg:text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 12 24">
                                <path fill="#610086" fill-rule="evenodd"
                                    d="M10.157 12.711L4.5 18.368l-1.414-1.414l4.95-4.95l-4.95-4.95L4.5 5.64l5.657 5.657a1 1 0 0 1 0 1.414" />
                            </svg>
                        </button>
                </div> --}}

            </div>
        </div>

        <br>
        <br>
        <br>

        {{-- SPACE AVAILABLE SECTION --}}
        <div class="mb-16">
            <div class="text-center">
                <x-heading-title title="Space Available Commercial" />
            </div>

            <div x-data="paginationComponentSpace()" x-init="fetchData()">

                <div x-show="isLoading" class="text-center py-4">
                    <span class="flex gap-2 justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" viewBox="0 0 24 24">
                            <g fill="none" stroke="#610086" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2">
                                <path stroke-dasharray="16" stroke-dashoffset="16" d="M12 3c4.97 0 9 4.03 9 9">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s"
                                        values="16;0" />
                                    <animateTransform attributeName="transform" dur="1.5s" repeatCount="indefinite"
                                        type="rotate" values="0 12 12;360 12 12" />
                                </path>
                                <path stroke-dasharray="64" stroke-dashoffset="64" stroke-opacity="0.3"
                                    d="M12 3c4.97 0 9 4.03 9 9c0 4.97 -4.03 9 -9 9c-4.97 0 -9 -4.03 -9 -9c0 -4.97 4.03 -9 9 -9Z">
                                    <animate fill="freeze" attributeName="stroke-dashoffset" dur="1.2s"
                                        values="64;0" />
                                </path>
                            </g>
                        </svg></span>
                    Loading please wait ...
                </div>

                <div x-show="!isLoading">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4  gap-4 auto-rows-fr ">

                        <template x-for="spaceList in spaceData" :key="spaceList.id">
                            <div class="rounded-lg flex-col flex ">
                                <div class="relative px-4 flex justify-between top-9 left-1 z-10">
                                    <span class="bg-custom-primary text-xs rounded shadow py-1 px-4 text-white"
                                        x-text="`${spaceList.available == 1 ? 'Available' : 'Leased'}`"></span>

                                    @auth
                                        <a href="#" class="love-button">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="gray" viewBox="0 0 24 24" stroke="white"
                                                stroke-width="2">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </a>
                                    @else
                                        <a href="{{ route('login-form') }}" class="love-button">
                                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="gray" viewBox="0 0 24 24" stroke="white"
                                                stroke-width="2">
                                                <path
                                                    d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z" />
                                            </svg>
                                        </a>
                                    @endauth
                                </div>

                                {{-- IMAGES MODALS --}}
                                <div x-data="imageModal" class="relative">

                                    <div class="rounded-2xl overflow-hidden">
                                        <img class="rounded-2xl w-full h-72 object-cover cursor-pointer"
                                            :src="spaceList.photos[0] ??
                                                'https://th.bing.com/th/id/OIP.H1gHhKVbteqm1U5SrwpPgwAAAA?rs=1&pid=ImgDetMain'"
                                            alt="Thumbnail Image" />
                                    </div>

                                    {{-- Modal PupUp --}}
                                    {{-- <div x-show="isOpen" @click="closeModal"
                                        class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50"
                                        x-transition:enter="transition ease-out duration-300"
                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition ease-in duration-300"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                        <div class="relative">
                                            <img :src="spaceList.listing.listing_photos[0] ??
                                                'https://th.bing.com/th/id/OIP.H1gHhKVbteqm1U5SrwpPgwAAAA?rs=1&pid=ImgDetMain'"
                                                alt="Large Image" class="rounded-lg w-[470px] h-[470px] object-cover"
                                                @click.stop />
                                            <button @click="closeModal"
                                                class="absolute top-0 -right-5 bg-custom-primary text-white p-2 rounded-full focus:outline-none hover:bg-purple-600">
                                                X
                                            </button>
                                        </div>
                                    </div> --}}

                                </div>

                                <div class="">
                                    <div
                                        class="rounded-2xl  bg-white flex flex-col shadow-lg p-3 m-2 -top-14 relative min-h-56">

                                        <div class="flex flex-col text-sm py-1 space-y-3">
                                            <div>
                                                <a :href="`/detail-spbu/${spaceList.listing.listing_id}`">
                                                    <h5 class="font-bold lg:text-sm text-custom-primary line-clamp-2"
                                                        x-text="spaceList.listing.listing_address">
                                                    </h5>
                                                </a>
                                                <p class="mb-3 mt-1 lg:text-xs font-normal text-gray-700 line-clamp-1"
                                                    x-text="(() => {
                                                        const parts = spaceList.listing.listing_address.split(',').map(part => part.trim());
                                                        return parts[parts.length - 1] === 'Indonesia'
                                                            ? parts[parts.length - 3]
                                                            : parts[parts.length - 2] || 'No city data';
                                                    })()">
                                                </p>
                                            </div>

                                            <div class="flex flex-col w-full h-full space-y-1">
                                                <div class="flex">
                                                    <p> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="size-5 text-custom-primary">
                                                            <path
                                                                d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                                                clip-rule="evenodd" />
                                                            <path
                                                                d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                                                        </svg>
                                                    </p>

                                                    <p class="leading-relaxed ml-2 font-semibold text-custom-primary"
                                                        x-html="spaceList.display_price.replace('Bulan', 'Month')">
                                                    </p>
                                                </div>
                                                <div class="flex">
                                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 24 24">
                                                            <path fill="#551275"
                                                                d="M21 19h2v2H1v-2h2V4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v15h2V9h3a1 1 0 0 1 1 1zM7 11v2h4v-2zm0-4v2h4V7z" />
                                                        </svg>
                                                    </p>
                                                    <p class="leading-relaxed ml-2 font-semibold text-custom-primary"
                                                        x-text="spaceList.type.name">
                                                    </p>

                                                </div>
                                                <div class="flex ">
                                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                            height="20" viewBox="0 0 15 15">
                                                            <path fill="#3d2369" fill-rule="evenodd"
                                                                d="M11.5 3.05a.45.45 0 0 1 .45.45v4a.45.45 0 0 1-.9 0V4.586L4.586 11.05H7.5a.45.45 0 0 1 0 .9h-4a.45.45 0 0 1-.45-.45v-4a.45.45 0 1 1 .9 0v2.914l6.464-6.464H7.5a.45.45 0 1 1 0-.9z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </p>
                                                    <p class="leading-relaxed ml-2 font-semibold text-custom-primary"
                                                        x-text="`${spaceList.size_sqm} /m2`"></p>
                                                </div>
                                                <br>
                                                <div class="flex mt-auto ">
                                                    <a :href="`/detail-spbu/${spaceList.listing.listing_id}`"
                                                        class="w-full text-center text-white bg-purple-950 hover:bg-purple-800 focus:ring-4  font-medium rounded-lg text-xs px-3 py-2 ">
                                                        Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>

                <div class="flex justify-center lg:space-x-2 overflow-auto">
                    <!-- First Page Button -->
                    <button data-tooltip-target="tooltip-first-page" @click="goToPage(1)" :disabled="currentPage === 1"
                        class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#610086"
                                d="m4.836 12l6.207 6.207l1.414-1.414L7.664 12l4.793-4.793l-1.414-1.414zm5.65 0l6.207 6.207l1.414-1.414L13.314 12l4.793-4.793l-1.414-1.414z" />
                        </svg>
                    </button>

                    <div id="tooltip-first-page" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-custom-primary rounded-lg shadow-sm opacity-0 tooltip ">
                        Go to first page
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <!-- Previous Page Button -->
                    <button @click="prevPage" :disabled="currentPage === 1"
                        class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="none" stroke="#610086" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m14 7l-5 5m0 0l5 5" />
                        </svg>
                    </button>

                    <!-- Page Numbers -->
                    <template x-for="page in totalPagesArray" :key="page">
                        <button
                            :class="{
                                'bg-custom-primary text-white rounded-lg': page === currentPage,
                                '': page !== currentPage
                            }"
                            @click="goToPage(page)" class="px-3 py-1 text-xs lg:text-base rounded">
                            <span x-text="page"></span>
                        </button>
                    </template>

                    <!-- Next Page Button -->
                    <button @click="nextPage" :disabled="currentPage === totalPages"
                        class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 12 24">
                            <path fill="#610086" fill-rule="evenodd"
                                d="M10.157 12.711L4.5 18.368l-1.414-1.414l4.95-4.95l-4.95-4.95L4.5 5.64l5.657 5.657a1 1 0 0 1 0 1.414" />
                        </svg>
                    </button>

                    <!-- Last Page Button -->
                    <button data-tooltip-target="tooltip-last-page" @click="goToPage(totalPages)"
                        :disabled="currentPage === totalPages" class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#610086"
                                d="m19.164 12l-6.207-6.207l-1.414 1.414L16.336 12l-4.793 4.793l1.414 1.414zm-5.65 0L7.307 5.793L5.893 7.207L10.686 12l-4.793 4.793l1.414 1.414z" />
                        </svg>
                    </button>
                    <div id="tooltip-last-page" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-custom-primary rounded-lg shadow-sm opacity-0 tooltip ">
                        Go to last page
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        {{-- ASETS ESG --}}
        <div class="mb-16">
            <div class="text-center">
                <h1 class="font-bold text-4xl lg:text-5xl" style="color: #057A55">Asets ESG Market</h1>
            </div>
            <br>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="flex-col flex">
                    <div class="rounded-2xl overflow-hidden">
                        <div class="transform transition-transform duration-300 ease-in-out">
                            <img class="rounded-2xl w-full h-72 object-cover" src="{{ url('assets/img/esg/esg_1.png') }}"
                                alt="space image">
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white flex flex-col shadow-lg p-3 m-2 -top-14 relative">
                        <div class="flex flex-col text-sm py-1 space-y-3">
                            <h5 class="font-bold text-md lg:text-xl" style="color: #057A55">Social Box</h5>

                            <div style="height: 10rem;" class="px-2 text-sm overflow-y-auto">
                                <p>Ditch single-use plastics! 🌍💚 Switch to reusable bags, bamboo straws, and more. Every
                                    eco-friendly choice counts! 🌱✨ What’s your favorite swap? Share below! ⬇️💬</p>
                            </div>

                            <a href="https://wa.me/62811102239?text=Halo saya ingin bertanya tentang Asets ESG Market: Social Box"
                                target="_blank"
                                class="mt-2 w-full text-center text-white focus:ring-4 font-medium rounded-lg text-lg px-3 py-2"
                                style="background-color: #057A55">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="flex-col flex">
                    <div class="rounded-2xl overflow-hidden">
                        <div class="transform transition-transform duration-300 ease-in-out">
                            <img class="rounded-2xl w-full h-72 object-cover" src="{{ url('assets/img/esg/esg_2.png') }}"
                                alt="space image">
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white flex flex-col shadow-lg p-3 m-2 -top-14 relative">
                        <div class="flex flex-col text-sm py-1 space-y-3">
                            <h5 class="font-bold text-md lg:text-xl" style="color: #057A55">Plastic Pay</h5>

                            <div style="height: 10rem;" class="px-2 text-sm overflow-y-auto">
                                <p>RVM is a automatic system that allows users to return empty plastic bottles in exchange
                                    for plastic points. The collected plastic bottle waste will be recycled into useful
                                    upcycled products.</p>
                            </div>

                            <a href="https://wa.me/62811102239?text=Halo saya ingin bertanya tentang Asets ESG Market: Plastic Pay"
                                target="_blank"
                                class="mt-2 w-full text-center text-white focus:ring-4 font-medium rounded-lg text-lg px-3 py-2"
                                style="background-color: #057A55">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="flex-col flex">
                    <div class="rounded-2xl overflow-hidden">
                        <div class="transform transition-transform duration-300 ease-in-out">
                            <img class="rounded-2xl w-full h-72 object-cover" src="{{ url('assets/img/esg/esg_3.png') }}"
                                alt="space image">
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white flex flex-col shadow-lg p-3 m-2 -top-14 relative">
                        <div class="flex flex-col text-sm py-1 space-y-3">
                            <h5 class="font-bold text-md lg:text-xl" style="color: #057A55">Go Green with Aset ESG ! 🌍💚
                            </h5>

                            <div style="height: 10rem;" class="px-2 text-sm overflow-y-auto">
                                <p>Smart, sustainable, and eco-friendly investments for a greener future! ♻️✨ #GoGreen
                                    #AsetESG</p>
                            </div>

                            <a href="https://wa.me/62811102239?text=Halo saya ingin bertanya tentang Asets ESG Market: Go Green with Asets ESG"
                                target="_blank"
                                class="mt-2 w-full text-center text-white focus:ring-4 font-medium rounded-lg text-lg px-3 py-2"
                                style="background-color: #057A55">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        {{-- NON SPBU SECTIONS --}}
        <div class="mb-16">
            <div class="text-center">
                <x-heading-title title="Asets Curated Space" />
            </div>
            <br>

            <div x-data="paginationComponentNonPMS({!! htmlspecialchars(json_encode($dataNonPMS), ENT_QUOTES, 'UTF-8') !!})">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <template x-for="item in spaceData" :key="item.id">
                        <div class="flex-col flex">
                            <div class="relative px-4 flex justify-between top-9 left-1 z-10">
                                <span class="bg-custom-primary text-xs rounded shadow py-1 px-4 text-white"
                                    x-text="item.available ? 'Available' : 'Not Available'"></span>
                            </div>

                            <div class="rounded-2xl overflow-hidden">
                                <div class="transform transition-transform duration-300 ease-in-out">
                                    <img class="rounded-2xl w-full h-72 object-cover"
                                        :src="item.photos?.length ? item.photos[0] :
                                            'https://th.bing.com/th/id/OIP.H1gHhKVbteqm1U5SrwpPgwAAAA?rs=1&pid=ImgDetMain'"
                                        alt="space image">
                                </div>
                            </div>

                            <div class="rounded-2xl bg-white flex flex-col shadow-lg p-3 m-2 -top-14 relative h-56">
                                <div class="flex flex-col text-sm py-1 space-y-3">
                                    <div>
                                        <a
                                            :href="'https://wa.me/62811102239?text=' + encodeURIComponent(
                                                'Halo, saya ingin bertanya mengenai lokasi: ' + (item.listing
                                                    ?.listing_name || 'Asets Curated Space'))">
                                            <h5 class="font-bold lg:text-sm text-custom-primary line-clamp-2"
                                                x-text="item.listing?.listing_address || 'Address Not Available'"></h5>
                                        </a>
                                        <p class="mb-3 mt-1 lg:text-xs font-normal text-gray-700 line-clamp-1"
                                            x-text="item.listing?.listing_name || 'No Listing Name'"></p>
                                    </div>

                                    <div class="flex flex-col w-full h-full space-y-1">
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" class="size-5 text-custom-primary">
                                                <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                                <path fill-rule="evenodd"
                                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                                    clip-rule="evenodd" />
                                                <path
                                                    d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                                            </svg>
                                            <p class="leading-relaxed ml-2 font-semibold text-custom-primary"
                                                x-text="item.price == 0 ? 'Contact for the price' : new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(item.price)">
                                            </p>
                                        </div>
                                        <div class="flex">
                                            <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <path fill="#3d2369"
                                                        d="M6.25 2A2.25 2.25 0 0 0 4 4.25v15.5A2.25 2.25 0 0 0 6.25 22h7.5A2.25 2.25 0 0 0 16 19.771v-1.52a.75.75 0 0 0-.75-.75c-.453 0-.739-.123-.936-.282c-.208-.167-.38-.425-.511-.789c-.273-.755-.302-1.75-.302-2.68a.75.75 0 0 0-.202-.512l-.165-.177a3 3 0 0 0-.17-.173c-.074-.07-.3-.285-1.183-1.168c-.469-.469-.728-.865-.813-1.168a.6.6 0 0 1-.016-.325a.7.7 0 0 1 .205-.323a.7.7 0 0 1 .322-.204a.6.6 0 0 1 .324.016c.302.085.698.346 1.167.815c.54.54 1.053 1.047 1.512 1.5c.76.752 1.373 1.36 1.72 1.73a.75.75 0 0 0 1.097-1.023A55 55 0 0 0 16 11.424V8.06l2.842 2.842c.421.422.659.994.659 1.59v8.758a.75.75 0 0 0 1.5 0v-8.757a3.75 3.75 0 0 0-1.099-2.652L16 5.939v-1.69A2.25 2.25 0 0 0 13.75 2zm7.124 16.388a2.7 2.7 0 0 0 1.126.534V19h-.75a.75.75 0 0 0-.75.75v.75h-1.5v-.75a2.25 2.25 0 0 1 1.276-2.028c.16.244.356.472.598.666m-1.372-4.342c.002.253.007.526.022.81a3.5 3.5 0 1 1-1.55-6.324q-.2.133-.378.312c-.292.292-.5.63-.597 1.01s-.074.754.025 1.104c.189.673.665 1.291 1.197 1.823A67 67 0 0 0 11.957 14l.004.003l.037.039zM7 3.5h1.5v.75A2.25 2.25 0 0 1 6.25 6.5H5.5V5h.75A.75.75 0 0 0 7 4.25zm4.5 0H13v.75c0 .414.336.75.75.75h.75v1.5h-.75a2.25 2.25 0 0 1-2.25-2.25zm-3 17H7v-.75a.75.75 0 0 0-.75-.75H5.5v-1.5h.75a2.25 2.25 0 0 1 2.25 2.25z" />
                                                </svg>
                                            </p>
                                            <p class="leading-relaxed ml-2 font-semibold text-custom-primary">
                                                Month
                                            </p>
                                        </div>
                                        <div class="flex ">
                                            <p>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 15 15">
                                                    <path fill="#3d2369" fill-rule="evenodd"
                                                        d="M11.5 3.05a.45.45 0 0 1 .45.45v4a.45.45 0 0 1-.9 0V4.586L4.586 11.05H7.5a.45.45 0 0 1 0 .9h-4a.45.45 0 0 1-.45-.45v-4a.45.45 0 1 1 .9 0v2.914l6.464-6.464H7.5a.45.45 0 1 1 0-.9z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </p>
                                            <p x-text="item.size_sqm + ' / m²'"
                                                class="leading-relaxed font-semibold ml-2 text-gray-600 text-custom-primary">
                                            </p>
                                        </div>
                                    </div>

                                    <a :href="'https://wa.me/62811102239?text=' + encodeURIComponent(
                                        'Halo, saya ingin bertanya mengenai lokasi: ' + (item.listing
                                            ?.listing_name || 'Asets Curated Space'))"
                                        class="mt-2 w-full text-center text-white bg-purple-950 hover:bg-purple-800 focus:ring-4 font-medium rounded-lg text-md px-3 py-2">Contact</a>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <div class="flex justify-center lg:space-x-2 overflow-auto">
                    <!-- First Page Button -->
                    <button data-tooltip-target="tooltip-first-page" @click="goToPage(1)" :disabled="currentPage === 1"
                        class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#610086"
                                d="m4.836 12l6.207 6.207l1.414-1.414L7.664 12l4.793-4.793l-1.414-1.414zm5.65 0l6.207 6.207l1.414-1.414L13.314 12l4.793-4.793l-1.414-1.414z" />
                        </svg>
                    </button>

                    <div id="tooltip-first-page" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-custom-primary rounded-lg shadow-sm opacity-0 tooltip ">
                        Go to first page
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <!-- Previous Page Button -->
                    <button @click="prevPage" :disabled="currentPage === 1"
                        class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="none" stroke="#610086" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m14 7l-5 5m0 0l5 5" />
                        </svg>
                    </button>

                    <!-- Page Numbers -->
                    <template x-for="page in totalPagesArray" :key="page">
                        <button
                            :class="{
                                'bg-custom-primary text-white rounded-lg': page === currentPage,
                                '': page !== currentPage
                            }"
                            @click="goToPage(page)" class="px-3 py-1 text-xs lg:text-base rounded">
                            <span x-text="page"></span>
                        </button>
                    </template>

                    <!-- Next Page Button -->
                    <button @click="nextPage" :disabled="currentPage === totalPages"
                        class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="20" viewBox="0 0 12 24">
                            <path fill="#610086" fill-rule="evenodd"
                                d="M10.157 12.711L4.5 18.368l-1.414-1.414l4.95-4.95l-4.95-4.95L4.5 5.64l5.657 5.657a1 1 0 0 1 0 1.414" />
                        </svg>
                    </button>

                    <!-- Last Page Button -->
                    <button data-tooltip-target="tooltip-last-page" @click="goToPage(totalPages)"
                        :disabled="currentPage === totalPages" class="px-3 py-1 text-xs lg:text-base rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                            <path fill="#610086"
                                d="m19.164 12l-6.207-6.207l-1.414 1.414L16.336 12l-4.793 4.793l1.414 1.414zm-5.65 0L7.307 5.793L5.893 7.207L10.686 12l-4.793 4.793l1.414 1.414z" />
                        </svg>
                    </button>
                    <div id="tooltip-last-page" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-custom-primary rounded-lg shadow-sm opacity-0 tooltip ">
                        Go to last page
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

        {{-- ARTICLE SECTIONS --}}
        <div class="">
            <div class="text-center flex flex-col space-y-2">
                <x-heading-title title="Latest Articles And News" />
                <p class="text-gray-600">Stay informed with the latest updates, trends, and insights from our industry
                    and services</p>
            </div>
            <div class="flex justify-center mt-4 mb-6">
                <a href="/news"
                    class="inline-block rounded-xl text-sm bg-purple-950 px-6 py-3 text-white font-medium hover:bg-purple-800 transition">
                    View All News
                </a>
            </div>
            <br>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-6 mb-24 auto-rows-fr">
                @foreach ($articles as $article)
                    <article class="rounded-lg bg-white flex flex-col p-1 hover:bg-gray-100 hover:rounded">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat" data-twe-ripple-init
                            data-twe-ripple-color="light">
                            <img class="rounded-2xl h-64 w-full object-cover"
                                src="https://cms.asets.id/storage/{{ $article['image'] }}"
                                alt="{{ $article['title'] }}" />
                            <a href="{{ route('news.show', $article['slug']) }}">
                                <div
                                    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed">
                                </div>
                            </a>
                        </div>
                        <div class="py-4 px-2">
                            <h5 class="mb-2 text-xl font-bold leading-tight text-purple-950 line-clamp-2">
                                {{ $article['title'] }}</h5>
                            <small class="mb-2 block font-semibold text-gray-600">{{ $article['published_date'] }}</small>
                            <p class="mb-4 text-base line-clamp-5 text-gray-600 text-justify">
                                {{ Str::limit(strip_tags($article['content']), 200) }}
                            </p>
                        </div>
                        <br>
                        <div class="flex mt-auto px-2">
                            <a href="{{ route('news.show', $article['slug']) }}"
                                class="inline-block rounded-xl text-sm bg-purple-950 px-4 py-2 text-white leading-normal">
                                Read More
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

    </section>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('imageModal', () => ({
                isOpen: false, // Modal visibility state

                openModal() {
                    this.isOpen = true; // Buka modal
                },

                closeModal() {
                    this.isOpen = false; // Tutup modal
                }
            }));
        });

        // LOCATION SPBU SCRIPT
        function paginationComponentSPBU() {
            return {
                listingData: [],
                allPagesData: [],
                currentPage: 1,
                perPage: 8,
                totalPages: 1,
                totalPagesArray: [],
                uniqueAreas: [],
                selectedArea: '',
                baseUrl: 'https://pertare.asets.id/api/listings',
                isLoading: false, // Added isLoading state

                formatPrice(displayPrice) {
                    if (!displayPrice) return '';
                    return displayPrice.replace(/m&sup2;/g, 'm²');
                },

                fetchData(url = `${this.baseUrl}?page=1`, pageLimit = 100) {
                    this.isLoading = true; // Set isLoading to true before fetching
                    const self = this;

                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            if (data && data.data) {
                                self.allPagesData.push(...data.data);

                                self.updatePageData();

                                const {
                                    current_page,
                                    last_page,
                                    next_page_url
                                } = data.pagination;
                                self.totalPages = Math.min(last_page, pageLimit);

                                if (next_page_url && current_page < pageLimit) {
                                    self.fetchData(next_page_url, pageLimit);
                                } else {
                                    self.generateUniqueAreas();
                                }
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching data:', error);
                        })
                        .finally(() => {
                            self.isLoading = false; // Set isLoading to false after fetch completes
                        });
                },

                generateUniqueAreas() {
                    this.uniqueAreas = [...new Set(this.allPagesData.map(item => item.area_name))];
                },

                updatePageData() {
                    const filteredData = this.selectedArea ?
                        this.allPagesData.filter(item => item.area_name === this.selectedArea && item.address?.trim()) :
                        this.allPagesData.filter(item => item.address?.trim());

                    this.totalPages = Math.ceil(filteredData.length / this.perPage);

                    const start = (this.currentPage - 1) * this.perPage;
                    this.listingData = filteredData.slice(start, start + this.perPage);

                    this.totalPagesArray = this.generatePageNumbers();
                },

                generatePageNumbers() {
                    const totalPages = this.totalPages;
                    const currentPage = this.currentPage;
                    const pages = [];
                    const pageWindow = 4; // Number of pages to show in the pagination window

                    if (totalPages <= pageWindow) {
                        return Array.from({
                            length: totalPages
                        }, (_, i) => i + 1);
                    }

                    let startPage = Math.max(1, currentPage - Math.floor(pageWindow / 2));
                    let endPage = startPage + pageWindow - 1;

                    if (endPage > totalPages) {
                        endPage = totalPages;
                        startPage = totalPages - pageWindow + 1;
                    }

                    for (let i = startPage; i <= endPage; i++) {
                        pages.push(i);
                    }

                    return pages;
                },

                filterByArea(area = '') {
                    this.selectedArea = area;
                    this.currentPage = 1;
                    this.updatePageData();
                },

                goToPage(page) {
                    if (page === '...') return;
                    this.currentPage = page;
                    this.updatePageData();
                },

                prevPage() {
                    if (this.currentPage > 1) {
                        this.currentPage--;
                        this.updatePageData();
                    }
                },

                nextPage() {
                    if (this.currentPage < this.totalPages) {
                        this.currentPage++;
                        this.updatePageData();
                    }
                },

                goToFirstPage() {
                    this.currentPage = 1;
                    this.updatePageData();
                },

                goToLastPage() {
                    this.currentPage = this.totalPages;
                    this.updatePageData();
                }
            };
        }

        // SPACE AVAILABLE SCRIPT
        function paginationComponentSpace() {
            return {
                spaceData: [],
                allPagesData: [],
                currentPage: 1,
                perPage: 8,
                totalPages: 1,
                totalPagesArray: [],
                uniqueAreas: [],
                selectedArea: '',
                baseUrl: 'https://pertare.asets.id/api/space-available',
                isLoading: false,

                formatPriceToRupiah(value) {
                    return new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 0
                    }).format(value || 0);
                },

                fetchData(url = `${this.baseUrl}?page=1`, pageLimit = 100) {
                    this.isLoading = true;
                    const self = this;

                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            if (data && data.data) {
                                self.allPagesData.push(...data.data);

                                self.updatePageData();

                                const {
                                    current_page,
                                    last_page,
                                    next_page_url
                                } = data.pagination;
                                self.totalPages = Math.min(last_page, pageLimit);

                                if (next_page_url && current_page < pageLimit) {
                                    self.fetchData(next_page_url, pageLimit);
                                } else {
                                    self.generateUniqueAreas();
                                }
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching data:', error);
                        })
                        .finally(() => {
                            self.isLoading = false;
                        });
                },

                generateUniqueAreas() {
                    this.uniqueAreas = [...new Set(this.allPagesData.map(item => item.area_name))];
                },

                updatePageData() {
                    const filteredData = this.selectedArea ?
                        this.allPagesData.filter(item => item.area_name === this.selectedArea) :
                        this.allPagesData;

                    this.totalPages = Math.ceil(filteredData.length / this.perPage);

                    const start = (this.currentPage - 1) * this.perPage;
                    this.spaceData = filteredData.slice(start, start + this.perPage);

                    this.totalPagesArray = this.generatePageNumbers();
                },

                generatePageNumbers() {
                    const totalPages = this.totalPages;
                    const currentPage = this.currentPage;
                    const pages = [];
                    const pageWindow = 4;

                    if (totalPages <= pageWindow) {
                        return Array.from({
                            length: totalPages
                        }, (_, i) => i + 1);
                    }

                    let startPage = Math.max(1, currentPage - Math.floor(pageWindow / 2));
                    let endPage = startPage + pageWindow - 1;

                    if (endPage > totalPages) {
                        endPage = totalPages;
                        startPage = totalPages - pageWindow + 1;
                    }

                    for (let i = startPage; i <= endPage; i++) {
                        pages.push(i);
                    }

                    return pages;
                },

                filterByArea(area = '') {
                    this.selectedArea = area;
                    this.currentPage = 1;
                    this.updatePageData();
                },

                goToPage(page) {
                    if (page === '...') return;
                    this.currentPage = page;
                    this.updatePageData();
                },

                prevPage() {
                    if (this.currentPage > 1) {
                        this.currentPage--;
                        this.updatePageData();
                    }
                },

                nextPage() {
                    if (this.currentPage < this.totalPages) {
                        this.currentPage++;
                        this.updatePageData();
                    }
                },

                goToFirstPage() {
                    this.currentPage = 1;
                    this.updatePageData();
                },

                goToLastPage() {
                    this.currentPage = this.totalPages;
                    this.updatePageData();
                }
            };
        }

        // CURATED SPACE SCRIPT
        function paginationComponentNonPMS(data) {
            return {
                spaceData: data || [],
                allPagesData: [],
                currentPage: 1,
                perPage: 3,
                totalPages: 1,
                totalPagesArray: [],
                uniqueAreas: [],
                selectedArea: '',

                init() {
                    this.allPagesData = this.spaceData;
                    this.updatePageData();
                    this.generateUniqueAreas();
                },

                generateUniqueAreas() {
                    this.uniqueAreas = [...new Set(this.allPagesData.map(item => item.area_name))];
                },

                updatePageData() {
                    let filteredData = this.selectedArea ?
                        this.allPagesData.filter(item => item.area_name === this.selectedArea) :
                        this.allPagesData;

                    this.totalPages = Math.ceil(filteredData.length / this.perPage);

                    const start = (this.currentPage - 1) * this.perPage;
                    this.spaceData = filteredData.slice(start, start + this.perPage);

                    this.totalPagesArray = this.generatePageNumbers();
                },

                generatePageNumbers() {
                    const totalPages = this.totalPages;
                    const currentPage = this.currentPage;
                    const pageWindow = 4;
                    let pages = [];

                    if (totalPages <= pageWindow) {
                        return Array.from({
                            length: totalPages
                        }, (_, i) => i + 1);
                    }

                    let startPage = Math.max(1, currentPage - Math.floor(pageWindow / 2));
                    let endPage = startPage + pageWindow - 1;

                    if (endPage > totalPages) {
                        endPage = totalPages;
                        startPage = Math.max(1, totalPages - pageWindow + 1);
                    }

                    for (let i = startPage; i <= endPage; i++) {
                        pages.push(i);
                    }

                    return pages;
                },

                filterByArea(area = '') {
                    this.selectedArea = area;
                    this.currentPage = 1;
                    this.updatePageData();
                },

                goToPage(page) {
                    if (page === '...') return;
                    this.currentPage = page;
                    this.updatePageData();
                },

                prevPage() {
                    if (this.currentPage > 1) {
                        this.currentPage--;
                        this.updatePageData();
                    }
                },

                nextPage() {
                    if (this.currentPage < this.totalPages) {
                        this.currentPage++;
                        this.updatePageData();
                    }
                },

                goToFirstPage() {
                    this.currentPage = 1;
                    this.updatePageData();
                },

                goToLastPage() {
                    this.currentPage = this.totalPages;
                    this.updatePageData();
                }
            };
        }

        function paginationAsetsHAKITA() {
            return {
                allPagesData: [],
                currentPage: 1,
                perPage: 3, // Updated to display 6 items per page
                totalPages: 1,
                totalPagesArray: [],

                init() {
                    this.allPagesData = Array.from(document.querySelectorAll(".content"));
                    this.updatePageData();
                },

                updatePageData() {
                    this.totalPages = Math.ceil(this.allPagesData.length / this.perPage);

                    const start = (this.currentPage - 1) * this.perPage;
                    const end = start + this.perPage;

                    // Hide all elements first
                    this.allPagesData.forEach(item => item.style.display = "none");

                    // Show only the current page's elements
                    this.allPagesData.slice(start, end).forEach(item => item.style.display = "flex");

                    this.totalPagesArray = this.generatePageNumbers();
                },

                generatePageNumbers() {
                    let pages = [];
                    for (let i = 1; i <= this.totalPages; i++) {
                        pages.push(i);
                    }
                    return pages;
                },

                goToPage(page) {
                    if (page >= 1 && page <= this.totalPages) {
                        this.currentPage = page;
                        this.updatePageData();
                    }
                },

                prevPage() {
                    if (this.currentPage > 1) {
                        this.currentPage--;
                        this.updatePageData();
                    }
                },

                nextPage() {
                    if (this.currentPage < this.totalPages) {
                        this.currentPage++;
                        this.updatePageData();
                    }
                },

                goToFirstPage() {
                    this.currentPage = 1;
                    this.updatePageData();
                },

                goToLastPage() {
                    this.currentPage = this.totalPages;
                    this.updatePageData();
                }
            };
        }
    </script>

@endsection
