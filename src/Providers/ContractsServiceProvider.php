<?php

namespace jaimeramos\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use jaimeramos\Modules\Contracts\RepositoryInterface;
use jaimeramos\Modules\Laravel\Repository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, Repository::class);
    }
}
