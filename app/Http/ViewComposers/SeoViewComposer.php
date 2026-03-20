<?php

namespace App\Http\ViewComposers;

use App\Models\PageSeo;
use App\Models\Portfolio;
use Illuminate\View\View;

class SeoViewComposer
{
    public function compose(View $view)
    {
        $currentPath = request()->getPathInfo();
        
        // 1. Try to find an exact match for the current path
        $pageSeo = PageSeo::where('page_path', $currentPath)->first();
        
        // 2. If no exact match, look for a wildcard fallback ('*')
        if (!$pageSeo && $currentPath !== '*') {
            $pageSeo = PageSeo::where('page_path', '*')->first();
        }

        // 3. Handle Portfolio detail pages if applicable
        $portfolio = request()->route('portfolio');
        if (is_string($portfolio)) {
            $portfolio = Portfolio::where('slug', $portfolio)->first();
        }

        // Compose SEO properties with fallbacks
        $seoTitle = $portfolio?->seo_title ?: ($pageSeo?->seo_title ?: ($portfolio?->title ?: config('app.name', 'Yazid Asykurillah')));
        $seoDescription = strip_tags($portfolio?->seo_description ?: ($pageSeo?->seo_description ?: ($portfolio?->description ?: 'Full Stack Developer Building Scalable Systems')));
        
        $ogTitle = $portfolio?->og_title ?: ($pageSeo?->og_title ?: $seoTitle);
        $ogDescription = strip_tags($portfolio?->og_description ?: ($pageSeo?->og_description ?: $seoDescription));
        
        $featuredImage = null;
        if ($portfolio) {
            $featuredImage = $portfolio->images->where('is_featured', true)->first() ?? $portfolio->images->first();
        }
        
        $ogImage = $portfolio?->og_image 
            ? asset('storage/' . $portfolio->og_image) 
            : ($pageSeo?->og_image 
                ? asset('storage/' . $pageSeo->og_image) 
                : ($featuredImage 
                    ? asset('storage/' . $featuredImage->path) 
                    : asset('yazid-asykurillah.png')));

        $view->with('seo', (object) [
            'title' => $seoTitle,
            'description' => $seoDescription,
            'ogTitle' => $ogTitle,
            'ogDescription' => $ogDescription,
            'ogImage' => $ogImage,
            'url' => url()->current(),
        ]);
    }
}
