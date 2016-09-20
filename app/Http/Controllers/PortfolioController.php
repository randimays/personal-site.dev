<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PortfolioController extends Controller
{
	public function livingston()
	{
		$about = false;
		$work = true;
		$resume = false;
		$contact = false;
		$extra = true;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('/portfolio/livingston')->with($data);
	}

	public function goodHousekeeping()
	{
		$about = false;
		$work = true;
		$resume = false;
		$contact = false;
		$extra = false;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('/portfolio/goodHousekeeping')->with($data);
	}

	public function membersPortal()
	{
		$about = false;
		$work = true;
		$resume = false;
		$contact = false;
		$extra = true;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('/portfolio/membersPortal')->with($data);
	}

	public function jsCalculator()
	{
		$about = false;
		$work = true;
		$resume = false;
		$contact = false;
		$extra = true;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('/portfolio/jsCalculator')->with($data);
	}

	public function weatherMap()
	{
		$about = false;
		$work = true;
		$resume = false;
		$contact = false;
		$extra = false;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('/portfolio/weatherMap')->with($data);
	}

	public function simpleArcher()
	{
		$about = false;
		$work = true;
		$resume = false;
		$contact = false;
		$extra = true;
		$data = compact('about', 'work', 'resume', 'contact', 'extra');
		return view('/portfolio/simpleArcher')->with($data);
	}
}