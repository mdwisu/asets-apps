@extends('layouts.app')

@section('title', $news['title'] ?? 'Article Detail | Asets')
@php
    // Set the $hideNavbar variable to true for this view
    $hideNavbar = true;
@endphp

@push('styles')
    <style>
        /* Custom styles for article page */
        .article-content {
            line-height: 1.8;
        }

        .article-content p {
            margin-bottom: 1.5rem;
        }

        .article-content h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-top: 2rem;
            margin-bottom: 1rem;
            color: #44337a;
            /* Purple color matching your brand */
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
            margin: 1.5rem 0;
        }

        /* Top navigation area */
        .top-nav {
            padding: 1.5rem 0;
        }

        /* Article metadata */
        .article-meta {
            display: flex;
            align-items: center;
            color: #6b7280;
            margin-bottom: 2rem;
            font-size: 0.95rem;
        }

        .article-meta svg {
            margin-right: 0.5rem;
        }
    </style>
@endpush

@section('content')
    <div class="bg-gray-50 min-h-screen pb-16">
        <!-- Top Navigation -->
        <div class="bg-white shadow-sm">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="top-nav">
                    <a href="{{ route('news.index') }}"
                        class="inline-flex items-center text-custom-primary hover:text-purple-700 transition-colors font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        Back to All Articles
                    </a>
                </div>
            </div>
        </div>

        <!-- Article Content -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-3xl">
            <!-- Article Header -->
            <div class="mt-10 mb-8">
                <h1 class="text-3xl sm:text-4xl font-bold text-custom-primary mb-4 leading-tight">
                    {{ $news['title'] ?? 'No Title' }}
                </h1>

                <div class="article-meta">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>{{ \Carbon\Carbon::parse($news['created_at'] ?? now())->format('F j, Y') }}</span>
                </div>
            </div>

            <!-- Featured Image -->
            @if (isset($news['image']) && $news['image'])
                <div class="rounded-lg overflow-hidden shadow-md mb-10">
                    <img src="{{ Str::startsWith($news['image'], 'http') ? $news['image'] : 'https://cms.asets.id/storage/' . $news['image'] }}"
                        alt="{{ $news['title'] ?? 'Article image' }}" class="w-full h-auto object-cover">
                </div>
            @endif

            <!-- Article Content -->
            <div class="bg-white rounded-lg shadow-sm p-6 sm:p-8 mb-10">
                <div class="prose prose-lg max-w-none article-content">
                    {!! $news['content'] ?? 'No content available' !!}
                </div>
            </div>

            <!-- Share & Navigation Buttons -->
            <div class="flex flex-col sm:flex-row sm:justify-between bg-white rounded-lg shadow-sm p-6 items-center">
                <a href="{{ route('news.index') }}"
                    class="inline-flex items-center text-custom-primary hover:text-purple-700 mb-4 sm:mb-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M9.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L7.414 9H15a1 1 0 110 2H7.414l2.293 2.293a1 1 0 010 1.414z"
                            clip-rule="evenodd" />
                    </svg>
                    Back to All Articles
                </a>

                <!-- Optional: Share buttons could go here -->
                <div class="flex space-x-3">
                    <span class="text-gray-500">Share:</span>
                    <!-- Example social share buttons - you can implement functionality as needed -->
                    <a href="#" class="text-blue-600 hover:text-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a href="#" class="text-sky-500 hover:text-sky-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path
                                d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                        </svg>
                    </a>
                    <a href="#" class="text-blue-700 hover:text-blue-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path
                                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
