<?php

namespace App\Providers;

use App\Models\Publication;
use App\Models\ScienceAbstract;
use Backpack\MenuCRUD\app\Models\MenuItem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
	/**
	 * Register bindings in the container.
	 *
	 * @return void
	 */
	public function boot()
	{
		// Using Closure based composers...
		View::composer('partials.analytics', function ($view) {
			$view->with('ga_id', Config::get('settings.ua_code'));
		});

		View::composer('partials.header', function ($view) {
			$view->with('menu', MenuItem::getTree());
		});

		View::composer('pages.publications', function ($view) {
			$submitted = collect(['Submitted and In Review' => Publication::inReview()->get()]);
			$published = Publication::published()->orderBy('published', 'desc')->get()->groupBy(function($pub){
				return $pub->published->format('Y');
			});
			foreach($published as $key => $values){
				$submitted->put($key, $values);
			}
			$abstracts = ScienceAbstract::all();
			$view->with(['publications' => $submitted, 'abstracts' => $abstracts]);
		});
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}