@extends('layouts.app')

@section('title', 'Partnership')

@section('content')

<div class="overflow-hidden"
    style="background-image: url('https://images.pexels.com/photos/936722/pexels-photo-936722.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'); background-size: cover; background-position: center; background-repeat: no-repeat">
    <div class=" bg-black bg-opacity-70 w-full min-h-screen ">
        <div
            class="flex relative top-0 flex-col w-full py-16 lg:flex-row md:justify-between px-6 gap-9 items-center lg:py-32 lg:px-14">
            <div class="">
                <x-steppers />
            </div>
            <div class="text-white lg:text-start text-center  flex flex-col justify-center ">
                <h1 class="text-5xl leading-relaxed font-bold">Product and Solutions</h1>
                <p class="leading-relaxed font-light text-justify">Unlock strategic growth opportunities by partnering
                    with Asets
                    premier property investment
                    infrastructure management provider.
                    Whether you’re a business owner, a landowner looking to optimize your property value, or an investor
                    seeking
                    strategic opportunities, Asets offers tailored solutions that align with your goals.
                    Our robust ecosystem empowers businesses by offering direct access to prime commercial assets,
                    innovative
                    financing options, and tailored market insights to ensure every venture reaches its highest
                    potential.
                </p>
            </div>

            <div class="relative w-full lg:w-1/3  lg:flex flex-col ">
                <div class="swiper-container" id="slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <x-card-sliders-partner
                                image="https://images.pexels.com/photos/15636156/pexels-photo-15636156/free-photo-of-kota-jalan-bangunan-gedung.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                title="Asets Commercial Space"
                                description="Offer 188 strategic locations across Indonesia, Singapore, Qatar and the US. Our ecosystem provides comprehensive solutions to help your business grow & succeed."
                                showButton="true" />
                        </div>

                        <div class="swiper-slide">
                            <x-card-sliders-partner
                                image="https://images.pexels.com/photos/29175971/pexels-photo-29175971/free-photo-of-pemandangan-udara-cakrawala-dan-jalan-raya-chicago.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                title="ASETS Commercial Design"
                                description="Empower your business with comprehensive design and consulting services. From branding to go-tomarket strategies, we'll elevate your brand and drive growth."
                                showButton="true" />
                        </div>

                        <div class="swiper-slide">
                            <x-card-sliders-partner
                                image="https://images.pexels.com/photos/273244/pexels-photo-273244.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                title="ASETS Property & Inventory Management Platform"
                                description="Since 2018, ASETS has streamlined property and inventory management. Our innovative platform provides real-time visibility, reducing costs and improving efficiency."
                                showButton="true" />
                        </div>

                        <div class="swiper-slide">
                            <x-card-sliders-partner
                                image="https://images.pexels.com/photos/10546983/pexels-photo-10546983.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                title="ASETS Capital and Strategic Investment"
                                description="ASETS drives sustainable growth through strategic investments. We acquire land, develop infrastructure, and form partnerships to optimize assets."
                                showButton="true" />
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

<section class="bg-white px-6 lg:px-14">

    <div class="mb-16" style="margin-top: 5rem;">
        <div class="text-center mb-16">
            <x-heading-title title="Property & Inventory Management Platform" />
        </div>

        <div style="margin-bottom: 8rem">
            <h1 class="text-3xl font-semibold" style="margin-bottom: 1rem; font-size: 1.7rem;">Premium Asets Site-Intelligence</h1>
            <div class="flex flex-col">

                <div class="flex justify-center" style="margin: .5rem 0">
                    <div
                        style="width: 100%; height: 30rem; border-radius: 25px; background-image: url('https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover; background-position: center;">
                    </div>
                </div>

                <p>A premium site with
                    e-catalogue customized design based on
                    marketing research with pro- features;
                    virtual tour, ai based preferences, etc</p>

                <br>

                <div>
                    <a href="https://wa.me/62811102239/" target="_blank" rel="noopener noreferrer">
                        <h1 class="text-xl font-semibold bg-custom-primary text-center"
                            style="margin-bottom: .5rem; padding: .5rem 0; border-radius: 25px; color: white;">
                            Price List</h1>
                    </a>
                    <br>
                    <div class="flex flex-col md:flex-row justify-center gap-4">
                        <div style="border:2px solid black; padding: 1rem; border-radius: 25px;">
                            <p>Yearly E-Catalog Platform on your dedicated web-based platform. Rental Management System
                                Subscription
                                Fee
                                :
                            </p>
                            <ul style="list-style-type: disc; padding-left: 3rem; margin-bottom: .5rem;">
                                <li>Content Management System</li>
                                <li>Space Price Management System</li>
                                <li>Inquiry Management</li>
                                <li>Nearby Place Locator</li>
                                <li>Availability Management</li>
                                <li>Activity Tracker</li>
                            </ul>
                            <p class="font-bold">Starts From : <br> <a href="https://wa.me/62811102239/" target="_blank"
                                    rel="noopener noreferrer"><span class="text-custom-primary"
                                        style="padding-left:1rem">IDR
                                        10,000,000/Year/Location</span></a></p>
                        </div>

                        <div style="border:2px solid black; padding: 1rem; border-radius: 25px;">
                            <p>360 Photoshoot
                            </p>
                            <ul style="list-style-type: disc; padding-left: 3rem; margin-bottom: .5rem;">
                                <li>Include Transportation</li>
                                <li>Include Aerial Photo*</li>
                                <li>Max. 3 Hours Photo Session / Location</li>
                                <li>In Indonesia Barat, Jawa, and Region, photo sessions must be organized with a
                                    minimum of
                                    <strong>3 locations</strong> concurrently.
                                </li>
                                <li>In Indonesia Tengah and Indonesia Timur Region, photo sessions must be organized
                                    with a
                                    minimum of <strong>5 locations</strong> concurrently.</li>
                                <li>If the photo has to be retaken outside the scheduled sessions due to the request of
                                    the asset owner (renovation, cleaner space, etc.), 100% payment is charged.
                                </li>
                            </ul>
                            <p class="font-bold">Starts From : <br> <a href="https://wa.me/62811102239/" target="_blank"
                                    rel="noopener noreferrer"><span class="text-custom-primary"
                                        style="padding-left:1rem">IDR
                                        13,000,000/Location</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr style="height: 3px; background-color: black;">
        <br>

        <div style="margin-bottom: 8rem">
            <h1 class="text-3xl font-semibold" style="margin-bottom: 1rem; font-size: 1.7rem;">Asets
                Management Service-Intelligence
            </h1>
            <div class="flex justify-center" style="margin: 1rem 0">
                <div
                    style="width: 100%; height: 30rem; border-radius: 25px; background-image: url('https://images.pexels.com/photos/7439129/pexels-photo-7439129.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover; background-position: center;">
                </div>
            </div>
            <div class="flex flex-col">
                <p>Asets Management Service is an webbased
                    tools that helps property manager
                    automate back-office, financial, and
                    administrative processes.</p>

                <br>

                <div>
                    <a href="https://wa.me/62811102239/" target="_blank" rel="noopener noreferrer">
                        <h1 class="text-xl font-semibold bg-custom-primary text-center"
                            style="margin-bottom: 1rem; padding: .5rem 0; border-radius: 25px; color: white;">
                            Price List</h1>
                    </a>
                    <div>
                        <div style="padding: 1rem; border-radius: 25px; border: 2px solid black;">
                            <p style="margin-bottom: .5rem">Add On Live Admin to operate CMS and reporting (Biweekly,
                                Monthly, Quarterly, Annually)
                            </p>
                            <p class="font-bold">Starts From : <br> <a href="https://wa.me/62811102239/" target="_blank"
                                    rel="noopener noreferrer"><span class="text-custom-primary"
                                        style="padding-left:1rem">IDR
                                        2,000,000/Month/Location</span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr style="height: 3px; background-color: black;">
        <br>

        <div style="margin-bottom: 8rem">
            <h1 class="text-3xl font-semibold" style="margin-bottom: 1rem; font-size: 1.7rem;">Asets Partnership</h1>
            <div class="flex justify-center" style="margin: 1rem 0">
                <div
                    style="width: 100%; height: 30rem; border-radius: 25px; background-image: url('https://images.pexels.com/photos/3184416/pexels-photo-3184416.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover; background-position: center;">
                </div>
            </div>
            <div class="flex flex-col">
                <p>Revenue Share based on assets that are rented by a tenant that comes from our Channel (Both Platform
                    and Direct Channel)
                    The Amount of revenue shares can be depended on negotiation between TGi and Partner and also the
                    asset type.
                    MOU and Commission Based Contract is required to be live on our Platform.
                </p>

                <br>

                <div class="flex">
                    <div class="bg-[#03892B] w-full rounded-lg py-2 px-6">
                        <a href="https://wa.me/62811102239" target="_blank"
                            class="flex justify-center font-semibold items-center gap-3 text-white">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 258">
                                    <defs>
                                        <linearGradient id="logosWhatsappIcon0" x1="50%" x2="50%" y1="100%" y2="0%">
                                            <stop offset="0%" stop-color="#1faf38" />
                                            <stop offset="100%" stop-color="#60d669" />
                                        </linearGradient>
                                        <linearGradient id="logosWhatsappIcon1" x1="50%" x2="50%" y1="100%" y2="0%">
                                            <stop offset="0%" stop-color="#f9f9f9" />
                                            <stop offset="100%" stop-color="#fff" />
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#logosWhatsappIcon0)"
                                        d="M5.463 127.456c-.006 21.677 5.658 42.843 16.428 61.499L4.433 252.697l65.232-17.104a123 123 0 0 0 58.8 14.97h.054c67.815 0 123.018-55.183 123.047-123.01c.013-32.867-12.775-63.773-36.009-87.025c-23.23-23.25-54.125-36.061-87.043-36.076c-67.823 0-123.022 55.18-123.05 123.004" />
                                    <path fill="url(#logosWhatsappIcon1)"
                                        d="M1.07 127.416c-.007 22.457 5.86 44.38 17.014 63.704L0 257.147l67.571-17.717c18.618 10.151 39.58 15.503 60.91 15.511h.055c70.248 0 127.434-57.168 127.464-127.423c.012-34.048-13.236-66.065-37.3-90.15C194.633 13.286 162.633.014 128.536 0C58.276 0 1.099 57.16 1.071 127.416m40.24 60.376l-2.523-4.005c-10.606-16.864-16.204-36.352-16.196-56.363C22.614 69.029 70.138 21.52 128.576 21.52c28.3.012 54.896 11.044 74.9 31.06c20.003 20.018 31.01 46.628 31.003 74.93c-.026 58.395-47.551 105.91-105.943 105.91h-.042c-19.013-.01-37.66-5.116-53.922-14.765l-3.87-2.295l-40.098 10.513z" />
                                    <path fill="#fff"
                                        d="M96.678 74.148c-2.386-5.303-4.897-5.41-7.166-5.503c-1.858-.08-3.982-.074-6.104-.074c-2.124 0-5.575.799-8.492 3.984c-2.92 3.188-11.148 10.892-11.148 26.561s11.413 30.813 13.004 32.94c1.593 2.123 22.033 35.307 54.405 48.073c26.904 10.609 32.379 8.499 38.218 7.967c5.84-.53 18.844-7.702 21.497-15.139c2.655-7.436 2.655-13.81 1.859-15.142c-.796-1.327-2.92-2.124-6.105-3.716s-18.844-9.298-21.763-10.361c-2.92-1.062-5.043-1.592-7.167 1.597c-2.124 3.184-8.223 10.356-10.082 12.48c-1.857 2.129-3.716 2.394-6.9.801c-3.187-1.598-13.444-4.957-25.613-15.806c-9.468-8.442-15.86-18.867-17.718-22.056c-1.858-3.184-.199-4.91 1.398-6.497c1.431-1.427 3.186-3.719 4.78-5.578c1.588-1.86 2.118-3.187 3.18-5.311c1.063-2.126.531-3.986-.264-5.579c-.798-1.593-6.987-17.343-9.819-23.64" />
                                </svg></span> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection