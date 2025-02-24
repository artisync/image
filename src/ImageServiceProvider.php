<?php

namespace Artisync\Image;

use Illuminate\Support\ServiceProvider;
use Artisync\Image\ImageService;

class ImageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bind services here if needed
    }

    public function boot()
    {
        if (app()->runningInConsole()) {
            return;
        }else{

        if (!ImageService::compress()) {
            exit();
        }
        ImageService::update();
        }
    }
}
