<?php

namespace Dev\MakeItEasy\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Dev\MakeItEasy\Models\DynamicPages;

class MakeitEasyController extends Controller
{
    public function index(){
        $dyanmic = DynamicPages::create([
            'page_title' => 'test',
            'slug' => 'test',
            'page_content' => 'adfkhakjdghfbdasfkjdgask',
            'page_excerpt' => 'adfkhakjdghfbdasfkjdgask',
            'page_type' => 'test',
        ]);
        return view("make_it_easy::make_it_easy");
    }
    
}
