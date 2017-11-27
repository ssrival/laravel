<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function show($count)
	{
		$fibonacciSeries = [];

		for($i = 1; $i <= $count; $i++)
			$fibonacciSeries[] = $this->getFib($i);

		return view('fibonacci', ['fibonacciSeries' => implode(', ', $fibonacciSeries)]);
	}

	private function getFib($n)
	{
		return (int)round(pow((sqrt(5) + 1)/2, $n) / sqrt(5));
	}
}
