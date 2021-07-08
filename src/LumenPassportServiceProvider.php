<?php
namespace Jalno\Passport;

use Illuminate\Support\ServiceProvider;
use Dusterio\LumenPassport\LumenPassport;
use Dusterio\LumenPassport\PassportServiceProvider;
use Laravel\Lumen\Application;

class LumenPassportServiceProvider extends ServiceProvider
{
	public function register(): void
	{
		if (
			class_exists(PassportServiceProvider::class) and
			class_exists(Application::class) and
			$this->app instanceof Application
		) {
			$this->app->register(PassportServiceProvider::class);
			$this->registerKeyGenerateCommand();
		}
	}

	public function boot(): void
	{
		if (
			class_exists(LumenPassport::class) and
			class_exists(Application::class) and
			$this->app instanceof Application
		) {
			LumenPassport::routes($this->app->router);
		}
	}

    protected function registerKeyGenerateCommand(): void
    {
        $this->app->singleton('command.key.generate', function () {
            return new Console\KeyGenerateCommand;
        });
		$this->commands(['command.key.generate']);
    }
}
