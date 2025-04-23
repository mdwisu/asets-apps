<?php

namespace App\Http\Controllers;

use App\Services\NewsApiService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $newsApiService;

    public function __construct(NewsApiService $newsApiService)
    {
        $this->newsApiService = $newsApiService;
    }

    public function index()
    {
        $response = $this->newsApiService->getAllNews();
        $news = $response['status'] ? $response['data'] : [];
        return view('pages.news.index', ['news' => $news]);
    }

    public function show($slug)
    {
        $response = $this->newsApiService->getNewsBySlug($slug);

        // Tangani kasus di mana respons adalah array
        if ($response['status'] && !empty($response['data'])) {
            // Jika respons adalah array dan memiliki setidaknya satu item
            if (is_array($response['data']) && !isset($response['data']['id'])) {
                // Cari item dengan slug yang cocok
                $newsItem = null;
                foreach ($response['data'] as $item) {
                    if (isset($item['slug']) && $item['slug'] === $slug) {
                        $newsItem = $item;
                        break;
                    }
                }

                // Jika tidak ditemukan item dengan slug tersebut, gunakan item pertama
                if ($newsItem === null && !empty($response['data'])) {
                    $newsItem = $response['data'][0];
                }

                $news = $newsItem;
            } else {
                // Jika respons sudah berupa objek tunggal
                $news = $response['data'];
            }
        } else {
            $news = null;
        }

        if (!$news) {
            abort(404);
        }

        return view('pages.news.show', ['news' => $news]);
    }
}
