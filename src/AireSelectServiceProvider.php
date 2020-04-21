<?php

namespace InterNACHI\AireSelect;

use Illuminate\Support\ServiceProvider;

class AireSelectServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../config/aire-select.php' => config_path('aire-select.php'),
		]);
	}
}
