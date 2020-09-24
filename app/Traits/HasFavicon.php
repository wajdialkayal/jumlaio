<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HasFavicon
{
    /**
     * Update the page's Favicon.
     *
     * @param  \Illuminate\Http\UploadedFile  $logo
     * @return void
     */
    public function updateFavicon(UploadedFile $favicon)
    {
        tap($this->favicon_path, function ($previous) use ($favicon) {
            $this->forceFill([
                'favicon_path' => $favicon->storePublicly(
                    'favicons',
                    ['disk' => $this->faviconDisk()]
                ),
            ])->save();

            if ($previous) {
                Storage::disk($this->faviconDisk())->delete($previous);
            }
        });
    }
    /**
     * Get the URL to the page's favicon.
     *
     * @return string
     */
    public function getFaviconUrlAttribute()
    {
        return $this->favicon_path
            ? asset(Storage::url($this->favicon_path))
            : $this->defaultFaviconUrl();
    }

    protected function defaultFaviconUrl()
    {
        return config('constants.ui_avatars_url').''.urlencode($this->name);
    }
    /**
     * Get the disk that logos should be stored on.
     *
     * @return string
     */
    protected function faviconDisk()
    {
        return isset($_ENV['VAPOR_ARTIFACT_NAME']) ? 's3' : 'public';
    }
}
