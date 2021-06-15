<?php

namespace Jalno\Passport\Providers;

use Carbon\Carbon;
use Laravel\Passport\Passport;
use Illuminate\Support\ServiceProvider;

class TokenExpireServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Boot the authentication services for the application.
	 *
	 * @return void
	 */
	public function boot()
	{
		// change the default token expiration
		Passport::tokensExpireIn(Carbon::now()->addDays(15));

		// change the default refresh token expiration
		Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));
	}
}
