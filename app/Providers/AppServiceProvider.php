<?php

namespace App\Providers;

use App\Models\Product;
use App\Repository\CarouselContentRepository;
use App\Repository\CategoryRepository;
use App\Repository\FooterContentRepository;
use App\Repository\HeroContentRepository;
use App\Repository\ProductRepository;
use App\Repository\Repository;
use App\Repository\SectionContentRepository;
use App\Repository\UserRepository;
use App\Service\CarouselContentService;
use App\Service\CategoryService;
use App\Service\FooterContentService;
use App\Service\HeroContentService;
use App\Service\ProductService;
use App\Service\SectionContentService;
use App\Service\Service;
use App\Service\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // init service and repo provider
        $this->app->singleton(Service::class,Repository::class);
        $this->app->singleton(UserService::class, UserRepository::class);
        $this->app->singleton(ProductService::class,ProductRepository::class);
        $this->app->singleton(CategoryService::class, CategoryRepository::class);
        $this->app->singleton(HeroContentService::class,HeroContentRepository::class);
        $this->app->singleton(FooterContentService::class,FooterContentRepository::class);
        $this->app->singleton(SectionContentService::class,SectionContentRepository::class);
        $this->app->singleton(CarouselContentService::class,CarouselContentRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
