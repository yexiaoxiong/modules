<?php

namespace Hxcart\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Hxcart\Modules\Contracts\RepositoryInterface;
use Hxcart\Modules\Repository;

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
