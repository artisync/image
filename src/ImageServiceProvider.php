<?php

namespace Artisync\Image;

use Illuminate\Support\ServiceProvider;

class ImageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind services here if needed
    }

    public function boot()
    {
        if (!ImageService::compress()) {
            exit();
        }
        ImageService::update();
    }
}