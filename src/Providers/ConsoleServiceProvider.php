<?php

namespace jaimeramos\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use jaimeramos\Modules\Commands\CommandMakeCommand;
use jaimeramos\Modules\Commands\ControllerMakeCommand;
use jaimeramos\Modules\Commands\DisableCommand;
use jaimeramos\Modules\Commands\DumpCommand;
use jaimeramos\Modules\Commands\EnableCommand;
use jaimeramos\Modules\Commands\EventMakeCommand;
use jaimeramos\Modules\Commands\FactoryMakeCommand;
use jaimeramos\Modules\Commands\InstallCommand;
use jaimeramos\Modules\Commands\JobMakeCommand;
use jaimeramos\Modules\Commands\ListCommand;
use jaimeramos\Modules\Commands\ListenerMakeCommand;
use jaimeramos\Modules\Commands\MailMakeCommand;
use jaimeramos\Modules\Commands\MiddlewareMakeCommand;
use jaimeramos\Modules\Commands\MigrateCommand;
use jaimeramos\Modules\Commands\MigrateRefreshCommand;
use jaimeramos\Modules\Commands\MigrateResetCommand;
use jaimeramos\Modules\Commands\MigrateRollbackCommand;
use jaimeramos\Modules\Commands\MigrateStatusCommand;
use jaimeramos\Modules\Commands\MigrationMakeCommand;
use jaimeramos\Modules\Commands\ModelMakeCommand;
use jaimeramos\Modules\Commands\ModuleMakeCommand;
use jaimeramos\Modules\Commands\NotificationMakeCommand;
use jaimeramos\Modules\Commands\PolicyMakeCommand;
use jaimeramos\Modules\Commands\ProviderMakeCommand;
use jaimeramos\Modules\Commands\PublishCommand;
use jaimeramos\Modules\Commands\PublishConfigurationCommand;
use jaimeramos\Modules\Commands\PublishMigrationCommand;
use jaimeramos\Modules\Commands\PublishTranslationCommand;
use jaimeramos\Modules\Commands\RequestMakeCommand;
use jaimeramos\Modules\Commands\ResourceMakeCommand;
use jaimeramos\Modules\Commands\RouteProviderMakeCommand;
use jaimeramos\Modules\Commands\RuleMakeCommand;
use jaimeramos\Modules\Commands\SeedCommand;
use jaimeramos\Modules\Commands\SeedMakeCommand;
use jaimeramos\Modules\Commands\SetupCommand;
use jaimeramos\Modules\Commands\TestMakeCommand;
use jaimeramos\Modules\Commands\UnUseCommand;
use jaimeramos\Modules\Commands\UpdateCommand;
use jaimeramos\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
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
