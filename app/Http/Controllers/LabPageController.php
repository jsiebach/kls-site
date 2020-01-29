<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;

class LabPageController extends Controller
{
	public function index($slug)
	{
		$page = Page::findBySlug($slug);

		if (!$page || $slug == "home")
		{
			abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
		}

		$this->data['title'] = $page->title;
		$this->data['page'] = $page->withFakes();

		return view('pages.'.$page->template, $this->data);
	}

	public function home()
	{
		$page = Page::findBySlug('home');

		if (!$page)
		{
			abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
		}


		$this->data['title'] = $page->title;
		$this->data['page'] = $page->withFakes();

		return view('pages.'.$page->template, $this->data);
	}
}