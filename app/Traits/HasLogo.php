<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HasLogo
{

    /**
     * Update the page's logo.
     *
     * @param  \Illuminate\Http\UploadedFile  $logo
     * @return void
     */
    public function updateLogo(UploadedFile $logo)
    {
        tap($this->logo_path, function ($previous) use ($logo) {
            $this->forceFill([
                'logo_path' => $logo->storePublicly(
                    'logos', ['disk' => $this->logoDisk()]
                ),
            ])->save();

            if ($previous) {
                Storage::disk($this->logoDisk())->delete($previous);
            }
        });
    }

    /**
     * Get the URL to the page's logo.
     *
     * @return string
     */
    public function getLogoUrlAttribute()
    {
        return $this->logo_path
                    ? asset(Storage::url($this->logo_path))
                    : $this->defaultLogoUrl();
    }

    /**
     * Delete the page's logo.
     *
     * @return void
     */
    public function deleteLogo()
    {
        Storage::disk($this->logoDisk())->delete($this->logo_path);

        $this->forceFill([
            'logo_path' => null,
        ])->save();
    }
    /**
     * Get the default logo URL if no logo has been uploaded.
     *
     * @return string
     */
    protected function defaultLogoUrl()
    {
        return config('constants.ui_avatars_url').''.urlencode($this->name);
    }
    /**
     * Get the disk that logos should be stored on.
     *
     * @return string
     */
    protected function logoDisk()
    {
        return isset($_ENV['VAPOR_ARTIFACT_NAME']) ? 's3' : 'public';
    }
}

