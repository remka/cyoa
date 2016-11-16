<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Story;
use DB;
use Hashids;

class StoryController extends Controller
{
  public function index(Request $request)
  {
    $stories = Story::orderBy('name','ASC')->paginate(10);
    $hashed = Hashids::encode('b');
    print_r($hashed);
    /*
    return view('stories.index',compact('stories', 'hashed'));
    */
  }

}
