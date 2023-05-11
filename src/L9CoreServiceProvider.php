<?php

namespace KZVN\L9Core;

use Illuminate\Support\ServiceProvider;
use KZVN\L9Core\Commands\MakeResponse;
use KZVN\L9Core\Commands\MakeRepository;
use KZVN\L9Core\Commands\MakeService;
use KZVN\L9Core\Commands\MakeFilter;
use KZVN\L9Core\Commands\MakeResource;

class L9CoreServiceProvider extends ServiceProvider
{
	public function register()
	{
		//
	}

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		if ($this->app->runningInConsole()) {
			$this->commands([
				MakeRepository::class,
				MakeService::class,
				MakeResource::class,
			]);
		}
	}
}
