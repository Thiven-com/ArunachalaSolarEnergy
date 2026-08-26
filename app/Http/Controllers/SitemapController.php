<?php

namespace App\Http\Controllers;

class SitemapController extends Controller
{
    public function index()
    {
        $urls = [
            [
                'url' => route('home'),
                'priority' => '1.0',
                'changefreq' => 'weekly',
            ],
            [
                'url' => route('about'),
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            [
                'url' => route('services'),
                'priority' => '0.9',
                'changefreq' => 'monthly',
            ],
            [
                'url' => route('solutions'),
                'priority' => '0.9',
                'changefreq' => 'monthly',
            ],
            [
                'url' => route('projects'),
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ],
            [
                'url' => route('whychoose'),
                'priority' => '0.7',
                'changefreq' => 'monthly',
            ],
            [
                'url' => route('contact'),
                'priority' => '0.7',
                'changefreq' => 'monthly',
            ],
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';

        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $item) {
            $xml .= '<url>';

            $xml .= '<loc>'
                . htmlspecialchars($item['url'], ENT_XML1, 'UTF-8')
                . '</loc>';

            $xml .= '<lastmod>'
                . now()->toDateString()
                . '</lastmod>';

            $xml .= '<changefreq>'
                . $item['changefreq']
                . '</changefreq>';

            $xml .= '<priority>'
                . $item['priority']
                . '</priority>';

            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }
}