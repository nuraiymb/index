<?php
namespace App\Services;
use App\Models\News;
use App\Services\Interfaces\NewsServiceInterface;
use Illuminate\Http\Request;

class NewsService implements NewsServiceInterface
{
    public function getAll()
    {
        return News::all();
    }
    public function getById($id)
    {
        return News::find($id);

    }

    public function update( Request $request)
    {
        $news = News::find($request->id);
        $news->title = $request->title;
        $news->author = $request->author;
        $news->image_url = $request->image_url;
        $news->text = $request->news_text;
        $news->views = $request->views;
        $news->comments_count = $request->comments_count;

        $news->save();
    }

    public function create(array $data)
    {
        $news = new News();
        $news->title = $data['title'];;
        $news->author = $data['author'];
        $news->image_url=$data['image_url'];
        $news->text = $data['news_text'];
        $news->views = 0;
        $news->comments_count = 0;

        $news->save();
    }
}
