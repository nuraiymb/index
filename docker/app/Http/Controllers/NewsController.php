<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Models\News;
use Illuminate\Http\Request;
use App\Services\NewsService;
use App\Services\Interfaces\NewsServiceInterface;


class NewsController extends Controller
{
    public function __construct(private NewsServiceInterface $newsService)
    {

    }


    public function index()
    {
        $news = $this->newsService->getAll();

        return view('homepage', compact('news'));
    }
    public function create(NewsCreateRequest $request)
    {
        $data = $request->validated();
        $this->newsService->create($data);

        return redirect(route('homepage'))->with('success',  'Жаңалық сәтті порталға шықты!');

    }

    public function  detail(int $id)
    {

        $news = $this->newsService->getById($id);
        return view('detailed-news', compact(['news']));
    }
    public function  getUpdatePage(int $id)
    {
        $news = $this->newsService->getById($id);
        return view('update-news', compact(['news']));
    }
    public function update(Request $request)
    {
        $news = News::find($request->id);
        $news->title = $request->title;
        $news->author = $request->author;
        $news->image_url = $request->image_url;
        $news->text = $request->news_text;
        $news->views = $request->views;
        $news->comments_count = $request->comments_count;

        $news->save();

        return redirect(route('one-news', $news->id));

    }
    public function delete(int $id)
    {
        $deleted = News::destroy($id);

        if ($deleted) {
            return redirect(route('homepage'));
        }
        return response()->json(['error' => 'Қате'], 500);
    }
}


