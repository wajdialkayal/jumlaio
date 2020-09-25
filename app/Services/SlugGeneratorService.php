<?php
namespace App\Services;

use App\Models\Page;
use Illuminate\Support\Str;


class SlugGeneratorService
{
  
    public function setSlug($slug, $id = 0)
    {
        // Normalize the slug
        $slug =  Str::slug($slug);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allslugs = $this->getRelatedSlugs($slug, $id);
        // If we haven't used it before then we are all good.
        if (!$allslugs->contains('slug', $slug)) {
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug . '' . $i;
            if (!$allslugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }

    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Page::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }

    // public function setSubdomain($subdomain, $id = 0)
    // {
    //     // Normalize the slug
    //     $subdomain =  Str::slug($subdomain, '');
    //     // Get any that could possibly be related.
    //     // This cuts the queries down by doing it once.
    //     $allSubdomains = $this->getRelatedSubdomains($subdomain, $id);
    //     // If we haven't used it before then we are all good.
    //     if (!$allSubdomains->contains('slug', $subdomain)) {
    //         return $subdomain;
    //     }
    //     // Just append numbers like a savage until we find not used.
    //     for ($i = 1; $i <= 10; $i++) {
    //         $newSubdomain = $subdomain . '' . $i;
    //         if (!$allSubdomains->contains('slug', $newSubdomain)) {
    //             return $newSubdomain;
    //         }
    //     }
    //     throw new \Exception('Can not create a unique slug');
    // }

    // protected function getRelatedSubdomains($subdomain, $id = 0)
    // {
    //     return Page::select('slug')->where('slug', 'like', $subdomain . '%')
    //         ->where('id', '<>', $id)
    //         ->get();
    // }
}