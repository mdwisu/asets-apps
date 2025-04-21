<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NewsApiService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'https://cms.asets.id/api/news';
    }

    public function getAllNews()
    {
        try {
            $response = Http::get($this->baseUrl);

            if ($response->successful()) {
                $responseData = $response->json();

                if (isset($responseData['status']) && $responseData['status'] === true && isset($responseData['data'])) {
                    return ['status' => true, 'data' => $responseData['data']];
                }
            }

            return ['status' => false, 'message' => 'Failed to fetch news', 'data' => []];
        } catch (\Exception $e) {
            return ['status' => false, 'message' => $e->getMessage(), 'data' => []];
        }
    }

    public function getNewsBySlug($slug)
    {
        try {
            // Jika API tidak memiliki endpoint khusus untuk get by slug,
            // kita bisa mengambil semua berita dan memfilter berdasarkan slug
            $response = Http::get($this->baseUrl);

            if ($response->successful()) {
                $responseData = $response->json();

                if (isset($responseData['status']) && $responseData['status'] === true && isset($responseData['data'])) {
                    $allNews = $responseData['data'];

                    // Filter berita berdasarkan slug
                    $filteredNews = array_filter($allNews, function ($item) use ($slug) {
                        return isset($item['slug']) && $item['slug'] === $slug;
                    });

                    if (!empty($filteredNews)) {
                        // Ambil berita pertama yang cocok dengan slug
                        return ['status' => true, 'data' => reset($filteredNews)];
                    }
                }
            }

            // Jika tidak berhasil menemukan berita dengan slug tersebut,
            // coba gunakan endpoint API khusus untuk slug jika tersedia
            $slugResponse = Http::get("{$this->baseUrl}/{$slug}");

            if ($slugResponse->successful()) {
                $slugResponseData = $slugResponse->json();

                if (isset($slugResponseData['status']) && $slugResponseData['status'] === true && isset($slugResponseData['data'])) {
                    return ['status' => true, 'data' => $slugResponseData['data']];
                }
            }

            return ['status' => false, 'message' => 'News not found', 'data' => null];
        } catch (\Exception $e) {
            return ['status' => false, 'message' => $e->getMessage(), 'data' => null];
        }
    }
}
