<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Story;
use DB;

class StoryController extends Controller
{
  public function index(Request $request)
  {
    $stories = Story::orderBy('name','ASC')->paginate(10);
    return view('stories.index', ['stories' => $stories]);
  }

}
