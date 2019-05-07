<?php

namespace App\Providers;

use App\Policies\ReadingPolicy;
use App\Policies\WeddingPolicy;
use App\Policies\MusicPolicy;
use App\Reading;
use App\Wedding;
use App\Music;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Reading::class => ReadingPolicy::class,
        Wedding::class => WeddingPolicy::class,
        Music::class => MusicPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
