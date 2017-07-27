<?php

namespace Hxcart\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Hxcart\Modules\Commands\CommandCommand;
use Hxcart\Modules\Commands\ControllerCommand;
use Hxcart\Modules\Commands\GenerateMiddlewareCommand;
use Hxcart\Modules\Commands\GenerateProviderCommand;
use Hxcart\Modules\Commands\GenerateRouteProviderCommand;
use Hxcart\Modules\Commands\MakeCommand;
use Hxcart\Modules\Commands\MakeRequestCommand;
use Hxcart\Modules\Commands\PublishConfigurationCommand;
use Hxcart\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        MakeCommand::class,
        CommandCommand::class,
        ControllerCommand::class,
        GenerateMiddlewareCommand::class,
        GenerateProviderCommand::class,
        GenerateRouteProviderCommand::class,
        UseCommand::class,
        MakeRequestCommand::class,
        PublishConfigurationCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
