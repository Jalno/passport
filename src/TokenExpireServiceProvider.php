<?php

namespace Jalno\Passport;

use Carbon\Carbon;
use Laravel\Passport\Passport;
use Illuminate\Support\ServiceProvider;

class TokenExpireServiceProvider extends ServiceProvider
{

	public function boot(): void
	{
		$createExpire = $this->app->make("config")->get("jalno.passport.tokens.create-expire", 86400 * 15);
		if ($createExpire) {
			Passport::tokensExpireIn(Carbon::now()->addSeconds($createExpire));
		}

		$refreshToken = $this->app->make("config")->get("jalno.passport.tokens.refresh-expire", 86400 * 30);
		if ($refreshToken) {
			Passport::refreshTokensExpireIn(Carbon::now()->addSeconds($refreshToken));
		}
	}
}
