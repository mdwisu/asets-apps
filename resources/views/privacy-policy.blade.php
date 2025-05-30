@extends('layouts.app')

@section('title', 'Privacy Policy')

@push('styles')
    <style>
        /* Fixed background styles */
        .privacy-policy-bg {
            background-image: url('{{ asset('assets/img/bg-privacy.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            position: relative;
            z-index: 0;
            /* Ensure proper stacking context */
        }

        /* Overlay with improved opacity */
        .privacy-policy-bg::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            /* Simplified overlay with better opacity */
            z-index: 1;
            pointer-events: none;
            /* Allow clicks to pass through */
        }

        /* Content container with proper z-index */
        .privacy-policy-container {
            position: relative;
            z-index: 2;
        }

        /* Card styling improvements for better contrast against background */
        .privacy-policy-container .bg-white {
            background-color: rgba(255, 255, 255, 0.95) !important;
            /* Slightly transparent white */
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
        }

        @media print {
            .privacy-policy-bg {
                background-image: none !important;
            }

            .privacy-policy-bg::before {
                display: none !important;
            }
        }
    </style>
@endpush

@section('content')
    <div class="privacy-policy-bg pb-16 pt-28">
        <div class="privacy-policy-container container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
            <!-- Main Content Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">

                <!-- Header with logo -->
                <div class="bg-gray-50 border-b border-gray-200 p-6">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-10" src="{{ asset('assets/img/logo-asets.png') }}" alt="PT Global Indo Asets Logo">
                        </div>
                        <div>
                            <h1 class="text-2xl font-bold text-gray-800">Privacy Policy</h1>
                            <p class="text-sm text-gray-500">Last updated: May 2025</p>
                        </div>
                    </div>
                </div>

                <!-- Content Container -->
                <div class="p-6 lg:p-8">
                    <!-- Print/Accessibility Options -->
                    <div class="flex justify-end mb-6 items-center space-x-4">
                        <div class="flex items-center space-x-1">
                            <span class="text-sm text-gray-600">Text Size:</span>
                            <span id="scaleDisplay" class="text-sm font-medium text-gray-800 w-8 text-center">100%</span>
                        </div>

                        <div class="flex border border-gray-200 rounded-lg overflow-hidden">
                            <button id="decreaseText"
                                class="flex items-center justify-center p-2 bg-gray-50 hover:bg-gray-100 transition-colors"
                                aria-label="Decrease text size">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                </svg>
                            </button>

                            <button id="resetText"
                                class="flex items-center justify-center px-2 bg-gray-50 hover:bg-gray-100 transition-colors border-l border-r border-gray-200"
                                aria-label="Reset text size">
                                <span class="text-xs text-gray-600">Reset</span>
                            </button>

                            <button id="increaseText"
                                class="flex items-center justify-center p-2 bg-gray-50 hover:bg-gray-100 transition-colors"
                                aria-label="Increase text size">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                            </button>
                        </div>

                        <button id="printPolicy"
                            class="flex items-center text-sm font-medium text-gray-600 hover:text-blue-600 bg-gray-50 hover:bg-gray-100 transition-colors border border-gray-200 rounded-lg px-3 py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                            </svg>
                            Print Policy
                        </button>
                    </div>
                    <!-- Introduction Banner -->
                    <div class="bg-blue-50 border-l-4 border-blue-500 p-4 mb-8 rounded-r-lg">
                        <p class="text-blue-700">
                            This policy explains how PT Global Indo Asets collects and protects your data.
                            We're committed to safeguarding your privacy and providing transparency about our practices.
                        </p>
                    </div>

                    <!-- Table of Contents -->
                    <nav aria-label="Table of Contents" class="mb-10 p-4 bg-gray-50 rounded-lg" id="toc">
                        <h2 class="text-lg font-bold text-gray-800 mb-4">Contents</h2>
                        <ul class="space-y-1">
                            <li>
                                <a href="#introduction" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">1</span>
                                    Introduction
                                </a>
                            </li>
                            <li>
                                <a href="#scope" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">2</span>
                                    Scope
                                </a>
                            </li>
                            <li>
                                <a href="#data-collection" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">3</span>
                                    Data We Collect
                                </a>
                            </li>
                            <li>
                                <a href="#purpose" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">4</span>
                                    Purpose of Data Collection
                                </a>
                            </li>
                            <li>
                                <a href="#consent" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">5</span>
                                    Consent and Control
                                </a>
                            </li>
                            <li>
                                <a href="#sharing" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">6</span>
                                    Data Sharing and Transfers
                                </a>
                            </li>
                            <li>
                                <a href="#retention" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">7</span>
                                    Data Retention
                                </a>
                            </li>
                            <li>
                                <a href="#security" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">8</span>
                                    Security Measures
                                </a>
                            </li>
                            <li>
                                <a href="#rights" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">9</span>
                                    Your Rights
                                </a>
                            </li>
                            <li>
                                <a href="#updates" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">10</span>
                                    Updates to This Policy
                                </a>
                            </li>
                            <li>
                                <a href="#contact" class="text-blue-600 hover:underline flex items-center">
                                    <span
                                        class="bg-gray-200 text-gray-700 rounded-full w-6 h-6 inline-flex items-center justify-center mr-2 text-sm">11</span>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <!-- Main Content Sections -->
                    <!-- Introduction -->
                    <section id="introduction" class="mb-10 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">1</span>
                            <h2 class="text-xl font-bold text-gray-800">Introduction</h2>
                        </div>
                        <div class="pl-11 space-y-4">
                            <p>
                                This Privacy Policy outlines how PT Global Indo Aset ("Asets," "we," "our," or "us") and our
                                affiliated
                                entities collect, use, disclose, and protect your personal information when you interact
                                with our
                                services, platforms, websites, and technologies.
                            </p>
                            <p>
                                We are committed to protecting your privacy in accordance with global data protection
                                regulations,
                                including the General Data Protection Regulation (GDPR), Indonesian Law No. 27/2022 on
                                Personal
                                Data Protection (UU PDP), and applicable industry standards.
                            </p>
                            <div class="mt-2">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Scope -->
                    <section id="scope" class="mb-10 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">2</span>
                            <h2 class="text-xl font-bold text-gray-800">Scope</h2>
                        </div>
                        <div class="pl-11">
                            <p class="mb-4">
                                This Policy applies to all users, clients, partners, and employees who access or use our
                                services
                                across all Asets business units, including:
                            </p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>Digital Platforms (e.g., ChatBox, SocialBox, AVIS, Stori)</li>
                                <li>Investment & Asset Management Systems (e.g., ASETS, IBMS)</li>
                                <li>International Consulting and Product Factory Services</li>
                                <li>Business Intelligence & Sustainability Tools</li>
                            </ul>
                            <div class="mt-2">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Data We Collect -->
                    <section id="data-collection" class="mb-10 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">3</span>
                            <h2 class="text-xl font-bold text-gray-800">Data We Collect</h2>
                        </div>
                        <div class="pl-11">
                            <p class="mb-4">
                                We collect personal data directly or indirectly depending on your interaction with our
                                services,
                                including but not limited to:
                            </p>

                            <!-- Data Collection Cards -->
                            <div class="grid md:grid-cols-2 gap-4 mb-4">
                                <!-- Identity Data Card -->
                                <div class="bg-gray-50 border-l-4 border-blue-400 rounded-r-lg p-4">
                                    <h3 class="font-bold text-gray-800 mb-2">Identity Data</h3>
                                    <p>Name, ID/passport number, date of birth, nationality</p>
                                </div>

                                <!-- Contact Data Card -->
                                <div class="bg-gray-50 border-l-4 border-blue-400 rounded-r-lg p-4">
                                    <h3 class="font-bold text-gray-800 mb-2">Contact Data</h3>
                                    <p>Phone number, email address, company name</p>
                                </div>

                                <!-- Technical Data Card -->
                                <div class="bg-gray-50 border-l-4 border-blue-400 rounded-r-lg p-4">
                                    <h3 class="font-bold text-gray-800 mb-2">Technical Data</h3>
                                    <p>IP address, device identifiers, browser type, operating system</p>
                                </div>

                                <!-- Usage Data Card -->
                                <div class="bg-gray-50 border-l-4 border-blue-400 rounded-r-lg p-4">
                                    <h3 class="font-bold text-gray-800 mb-2">Usage Data</h3>
                                    <p>Service logs, login frequency, location metadata, and preferences</p>
                                </div>

                                <!-- Financial Data Card -->
                                <div class="bg-gray-50 border-l-4 border-blue-400 rounded-r-lg p-4 md:col-span-2">
                                    <h3 class="font-bold text-gray-800 mb-2">Financial or Transaction Data</h3>
                                    <p>Payment information, service usage history</p>
                                </div>
                            </div>

                            <div class="mt-2">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Purpose of Data Collection -->
                    <section id="purpose" class="mb-10 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">4</span>
                            <h2 class="text-xl font-bold text-gray-800">Purpose of Data Collection</h2>
                        </div>
                        <div class="pl-11">
                            <p class="mb-4">
                                Your data may be used for the following purposes:
                            </p>
                            <ol class="list-decimal pl-5 space-y-2 mb-4">
                                <li>To provide, develop, and maintain Asets products and services</li>
                                <li>To verify identity and manage user access securely</li>
                                <li>To communicate with you regarding updates, changes, and support</li>
                                <li>To enhance user experience through AI-based personalization</li>
                                <li>To fulfill legal and regulatory obligations</li>
                                <li>To support business intelligence, analytics, and product development</li>
                                <li>To carry out due diligence, audits, or corporate restructuring</li>
                                <li>To feature your name/logo (with consent) in case studies or partnership showcases</li>
                            </ol>
                            <div class="mt-2">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Consent and Control -->
                    <section id="consent" class="mb-10 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">5</span>
                            <h2 class="text-xl font-bold text-gray-800">Consent and Control</h2>
                        </div>
                        <div class="pl-11">
                            <div class="bg-gray-50 rounded-lg p-5 border border-gray-200">
                                <p>
                                    By using our services, you consent to our collection and processing of personal data as
                                    described.
                                    You may withdraw consent, request access, or correct your personal data by contacting:
                                </p>
                                <p class="mt-2">
                                    <span class="font-medium">Email:</span>
                                    <a href="mailto:cs@support.asets.co.id"
                                        class="text-blue-600 hover:underline">cs@support.asets.co.id</a>
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Data Sharing and Transfers -->
                    <section id="sharing" class="mb-10 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">6</span>
                            <h2 class="text-xl font-bold text-gray-800">Data Sharing and Transfers</h2>
                        </div>
                        <div class="pl-11">
                            <p class="mb-4">
                                We may share your data under strict confidentiality and only under these circumstances:
                            </p>
                            <ul class="list-disc pl-5 space-y-2 mb-4">
                                <li>With affiliated Asets entities for integrated services</li>
                                <li>With trusted third-party service providers (e.g., cloud, analytics, legal)</li>
                                <li>In compliance with lawful government or regulatory authority requests</li>
                                <li>In cross-border data transfers, only under jurisdictions that provide adequate data
                                    protection as determined by applicable laws</li>
                            </ul>
                            <div class="mt-2">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Data Retention -->
                    <section id="retention" class="mb-10 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">7</span>
                            <h2 class="text-xl font-bold text-gray-800">Data Retention</h2>
                        </div>
                        <div class="pl-11">
                            <div class="bg-gray-50 rounded-lg p-5 border border-gray-200">
                                <p>
                                    We retain personal data only as long as necessary for the purposes stated or as required
                                    by applicable laws.
                                    Standard retention is 5 years unless otherwise agreed.
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Security Measures -->
                    <section id="security" class="mb-10 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">8</span>
                            <h2 class="text-xl font-bold text-gray-800">Security Measures</h2>
                        </div>
                        <div class="pl-11">
                            <div class="bg-gray-50 rounded-lg p-5 border border-gray-200 flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-blue-500 mr-3 mt-1 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                <p>
                                    We implement industry-standard encryption, firewalls, role-based access control,
                                    and continuous monitoring to protect your data from unauthorized access or loss.
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Your Rights -->
                    <section id="rights" class="mb-10 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">9</span>
                            <h2 class="text-xl font-bold text-gray-800">Your Rights</h2>
                        </div>
                        <div class="pl-11">
                            <p class="mb-4">
                                You have the right to:
                            </p>
                            <div class="space-y-3 mb-4">
                                <div class="flex items-start">
                                    <span
                                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </span>
                                    <p>Access and correct your personal data</p>
                                </div>
                                <div class="flex items-start">
                                    <span
                                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </span>
                                    <p>Object to certain processing activities</p>
                                </div>
                                <div class="flex items-start">
                                    <span
                                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </span>
                                    <p>Request data portability or deletion</p>
                                </div>
                                <div class="flex items-start">
                                    <span
                                        class="bg-blue-100 text-blue-800 rounded-full w-6 h-6 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </span>
                                    <p>Lodge a complaint with data protection authorities</p>
                                </div>
                            </div>
                            <div class="mt-2">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Updates to This Policy -->
                    <section id="updates" class="mb-10 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">10</span>
                            <h2 class="text-xl font-bold text-gray-800">Updates to This Policy</h2>
                        </div>
                        <div class="pl-11">
                            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-r-lg">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-yellow-700">
                                            This Privacy Policy may be updated periodically to reflect changes in law,
                                            technology,
                                            or our services. We will notify you through our official communication channels
                                            or platform.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>

                    <!-- Contact Us -->
                    <section id="contact" class="mb-6 scroll-mt-32">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-blue-100 text-blue-800 rounded-full w-8 h-8 flex items-center justify-center mr-3">11</span>
                            <h2 class="text-xl font-bold text-gray-800">Contact Us</h2>
                        </div>
                        <div class="pl-11">
                            <div class="bg-gray-50 rounded-lg p-6 border border-gray-200">
                                <p class="mb-4">
                                    If you have any questions or requests regarding this Privacy Policy or data processing
                                    activities:
                                </p>
                                <div class="flex items-center space-x-2 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="font-medium">Email:</span>
                                    <a href="mailto:cs@support.asets.co.id"
                                        class="text-blue-600 hover:underline">cs@support.asets.co.id</a>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#toc" class="text-sm text-blue-600 hover:underline inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 10l7-7m0 0l7 7m-7-7v18" />
                                    </svg>
                                    Back to top
                                </a>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Footer -->
                <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                    <p class="text-sm text-gray-600">
                        Last updated: May 2025. If you have any questions about this Privacy Policy, please contact us.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all content elements that need to be resized
            const contentElements = document.querySelectorAll(
                'p, li, h1, h2, h3, a, span:not(.bg-gray-200):not(.bg-blue-100)');

            // Store original font sizes
            const originalSizes = {};
            contentElements.forEach((element, index) => {
                const computedStyle = window.getComputedStyle(element);
                originalSizes[index] = parseFloat(computedStyle.fontSize);
            });

            // Set initial scale level
            let currentScale = 100;
            const minScale = 70;
            const maxScale = 200;
            const scaleStep = 10;

            // Function to update text size
            function updateTextSize() {
                contentElements.forEach((element, index) => {
                    const originalSize = originalSizes[index];
                    const newSize = (originalSize * currentScale / 100);
                    element.style.fontSize = newSize + 'px';
                });

                // Save preference to localStorage
                localStorage.setItem('textSizeScale', currentScale);

                // Update the scale display if it exists
                const scaleDisplay = document.getElementById('scaleDisplay');
                if (scaleDisplay) {
                    scaleDisplay.textContent = currentScale + '%';
                }
            }

            // Check if user has a saved preference
            const savedScale = localStorage.getItem('textSizeScale');
            if (savedScale) {
                currentScale = parseInt(savedScale);
                updateTextSize();
            }

            // Increase text size
            document.getElementById('increaseText').addEventListener('click', function() {
                if (currentScale < maxScale) {
                    currentScale += scaleStep;
                    updateTextSize();
                }
            });

            // Decrease text size
            document.getElementById('decreaseText').addEventListener('click', function() {
                if (currentScale > minScale) {
                    currentScale -= scaleStep;
                    updateTextSize();
                }
            });

            // Reset text size
            document.getElementById('resetText').addEventListener('click', function() {
                currentScale = 100;
                updateTextSize();
            });

            // Enhanced print functionality
            document.getElementById('printPolicy').addEventListener('click', function() {
                // Create print-specific stylesheet
                const printStyle = document.createElement('style');
                printStyle.id = 'print-styles';
                printStyle.innerHTML = `
                    @media print {
                        body {
                            font-size: 12pt;
                            color: #000;
                            background: #fff;
                            margin: 0;
                            padding: 0;
                        }

                        /* Hide header, navbar, and footer completely */
                        header,
                        nav[aria-label="Table of Contents"],
                        footer,
                        .x-navbar,
                        .x-footer,
                        .x-cookie-consent,
                        .flex.justify-end,
                        a[href="#toc"],
                        button,
                        .text-sm.text-blue-600.hover\\:underline.inline-flex.items-center {
                            display: none !important;
                        }

                        /* Hide the app footer element */
                        .bg-gray-50.px-6.py-4.border-t.border-gray-200 {
                            display: none !important;
                        }

                        /* Adjust the main content container */
                        .container {
                            max-width: 100% !important;
                            width: 100% !important;
                            padding: 0 20px !important;
                            margin: 0 !important;
                        }

                        /* Remove the top padding that was compensating for the navbar */
                        .bg-gradient-to-r.from-gray-50.to-gray-100.pb-16.pt-28 {
                            padding-top: 0 !important;
                            padding-bottom: 0 !important;
                            background: white !important;
                        }

                        /* Reset all backgrounds to white */
                        .bg-gradient-to-r, .bg-gray-50, .bg-blue-50, .bg-yellow-50,
                        .border-l-4, .rounded-lg, .shadow-lg {
                            background: white !important;
                            background-color: white !important;
                            box-shadow: none !important;
                        }

                        /* Keep the title and company name */
                        .bg-gray-50.border-b.border-gray-200.p-6 {
                            display: block !important;
                            background: white !important;
                            border: none !important;
                            margin-bottom: 20px;
                            padding: 0 0 10px 0 !important;
                            border-bottom: 1px solid #000 !important;
                        }

                        /* Ensure proper page breaks */
                        h1, h2, h3 {
                            page-break-after: avoid;
                            break-after: avoid;
                            margin-top: 20px;
                        }

                        p, li {
                            page-break-inside: avoid;
                            break-inside: avoid;
                        }

                        section {
                            page-break-before: auto;
                            break-before: auto;
                            margin-bottom: 20px;
                        }

                        /* Adjust padding and margins */
                        .pl-11 {
                            padding-left: 0.5cm !important;
                        }

                        /* Ensure full content visibility */
                        .scroll-mt-32 {
                            scroll-margin-top: 0 !important;
                        }

                        /* Page setup */
                        @page {
                            margin: 1.5cm 1cm;
                            size: portrait;
                        }

                        /* Add a simple page number at the bottom */
                        @page {
                            @bottom-right {
                                content: counter(page);
                            }
                        }

                        /* Add date at the bottom left */
                        @page {
                            @bottom-left {
                                content: "Printed: " attr(data-print-date);
                            }
                        }

                        /* Add a simple title at the top of each page */
                        @page {
                            @top-center {
                                content: "PT Global Indo Asets - Privacy Policy";
                                font-size: 9pt;
                                color: #666;
                            }
                        }
                    }
                `;
                document.head.appendChild(printStyle);

                // Add current date to body for printing
                document.body.setAttribute('data-print-date', new Date().toLocaleDateString());

                // Show a print preview alert
                alert('Preparing document for printing. Click OK to continue to the print dialog.');

                // Trigger the print dialog
                window.print();

                // Remove the print style after printing
                setTimeout(function() {
                    const styleToRemove = document.getElementById('print-styles');
                    if (styleToRemove) {
                        styleToRemove.remove();
                    }
                    // Remove the date attribute
                    document.body.removeAttribute('data-print-date');
                }, 1000);
            });
        });
    </script>
@endsection
