<?php

namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonPageController extends Controller
{
    public function detailPage(string $cityName)
    {
               $news = News::all();
               dd($news);

        return view('profile.detail-page',
            compact (['cityName','result'])
        );
    }
    public function welcomePage()
    {
        return 'Welcome page';
    }
}
