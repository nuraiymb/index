<?php

namespace App\Http\Controllers;


use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonPageController extends Controller
{
    public function detailPage(string $cityName)
    {
        $users = User::where('city', 'astana')->get();
               dd($users);

        return view('profile.detail-page',
            compact (['cityName','result'])
        );
    }
    public function welcomePage()
    {
        return 'Welcome page';
    }
}
