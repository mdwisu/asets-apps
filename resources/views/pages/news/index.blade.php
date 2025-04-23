@extends('layouts.app')
@section('title', 'News & Articles | Asets')

@php
    // Set the $hideNavbar variable to true for this view
    $hideNavbar = true;
@endphp

@push('styles')
    <style>
        /* Styles for this page only */
        .news-page {
            padding-top: 0;
        }

        .page-header {
            background-color: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
            padding: 2.5rem 0;
        }

        .news-grid {
            padding-top: 2rem;
            padding-bottom: 4rem;
        }

        .top-nav {
            padding: 1.5rem 0 0.5rem 0;
        }

        .article-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
    </style>
@endpush

@section('content')
    <div class="min-h-screen news-page bg-gray-50">
        <!-- Top Navigation -->
        <div class="bg-white shadow-sm">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="top-nav">
                    <a href="{{ route('home') }}"
                        class="inline-flex items-center text-custom-primary hover:text-custom-secondary transition-colors font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back to Home
                    </a>
                </div>
            </div>
        </div>

        <!-- Page Header -->
        <div class="page-header">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto">
                    <h1 class="text-3xl sm:text-4xl font-bold text-custom-primary mb-4">News & Articles</h1>
                    <p class="text-gray-600 text-lg">Stay informed with the latest updates, trends, and insights from
                        our industry and services</p>
                </div>
            </div>
        </div>

        <!-- News Grid -->
        <div class="news-grid">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                @if (count($news) > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($news as $article)
                            <div class="article-card bg-white rounded-lg overflow-hidden shadow">
                                <div class="relative">
                                    <a href="{{ route('news.show', $article['slug'] ?? 'article-1') }}" class="block">
                                        <img class="h-52 w-full object-cover"
                                            src="{{ Str::startsWith($article['image'] ?? '', 'http') ? $article['image'] : 'https://cms.asets.id/storage/' . ($article['image'] ?? 'default-news-image.jpg') }}"
                                            alt="{{ $article['title'] ?? 'Article image' }}" />
                                        <div
                                            class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent h-24">
                                        </div>
                                    </a>
                                </div>

                                <div class="p-5">
                                    <div class="flex items-center text-gray-500 text-sm mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <span>{{ $article['published_date'] ?? now()->format('F j, Y') }}</span>
                                    </div>

                                    <h2
                                        class="text-xl font-bold text-custom-primary hover:text-purple-800 mb-3 line-clamp-2">
                                        <a href="{{ route('news.show', $article['slug'] ?? 'article-1') }}">
                                            {{ $article['title'] ?? 'No Title' }}
                                        </a>
                                    </h2>

                                    <p class="text-gray-600 mb-4 line-clamp-3">
                                        {{ strip_tags($article['content']) ?? 'No Description' }}
                                    </p>

                                    <div class="pt-2">
                                        <a href="{{ route('news.show', $article['slug'] ?? 'article-1') }}"
                                            class="inline-flex items-center text-sm font-medium text-custom-primary hover:text-custom-secondary">
                                            Read Full Article
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-20 bg-white rounded-lg shadow-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg>
                        <h3 class="text-xl text-gray-600 mb-2">No Articles Found</h3>
                        <p class="text-gray-500">Check back later for new articles and updates</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
