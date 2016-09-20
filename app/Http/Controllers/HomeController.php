<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	public function index()
	{
		$about = false;
		$work = false;
		$resume = false;
		$contact = false;
		$extra = false;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('home')->with($data);
	}

	public function about()
	{
		$about = true;
		$work = false;
		$resume = false;
		$contact = false;
		$extra = true;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('about')->with($data);
	}

	public function design()
	{
		$about = false;
		$work = true;
		$resume = false;
		$contact = false;
		$extra = true;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('design')->with($data);
	}

	public function development()
	{
		$about = false;
		$work = true;
		$resume = false;
		$contact = false;
		$extra = true;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('development')->with($data);
	}

	public function resume()
	{
		$about = false;
		$work = false;
		$resume = true;
		$contact = false;
		$extra = true;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('resume')->with($data);
	}

	public function contact()
	{
		$about = false;
		$work = false;
		$resume = false;
		$contact = true;
		$extra = true;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('contact')->with($data);
	}
}