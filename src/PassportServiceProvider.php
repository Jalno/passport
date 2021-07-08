<?php
namespace Jalno\Passport;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;
use Laravel\Passport\Passport;

class PassportServiceProvider extends ServiceProvider
{
	public function boot(): void
	{
		if (class_exists(Application::class) and $this->app instanceof Application) {
			Passport::routes();
		}
	}
}
