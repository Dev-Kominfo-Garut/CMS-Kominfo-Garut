<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class PageController extends Controller
{
    public function index($slug)
    {
        $slug = $this->getSlug($request);

        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        
    }
}
