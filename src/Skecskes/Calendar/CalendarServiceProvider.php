<?php namespace Skecskes\Calendar;

use Illuminate\Support\ServiceProvider;

class CalendarServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot() {
		//
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {

		$this->app['calendar'] = $this->app->share(function() {
			return new Calendar();
		});

        $this->app->alias('Calendar','Skecskes\Calendar\Calendar');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return ['calendar'];
	}

}