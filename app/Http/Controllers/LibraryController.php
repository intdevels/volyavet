<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsArticle;
use App\Models\NewsVideo;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index(){
        $news = News::query()->with(['news_articles'])->first();
        $articles = NewsArticle::query()->paginate(2);

        return view('library.index', compact('news','articles'));
    }

    public function article($slug){

        $article = NewsArticle::query()->where('slug',$slug)->firstOrFail();
        $article->load('news');

        $interesting_articles = NewsArticle::query()->inRandomOrder()->limit(5)->get();

        return view('article.index',compact('article','interesting_articles','slug'));
    }

    public function videos(){
        $news = News::query()->with(['news_videos'])->first();
        $videos = NewsVideo::query()->paginate(10);

        return view('library.index', compact('news','videos'));
    }

    public function loadMoreData(Request $request){

        $offset = $request->offset;
        $limit = $request->limit;
        $currentPage = $request->currentPage;
        $type = $request->type;

        $currentPage+=1;

        if ($type === 'article'){
            $moreData = NewsArticle::query()->offset($offset)->limit($limit)->get();
        }else{
            $moreData = NewsVideo::query()->offset($offset)->limit($limit)->get();
        }
        $html = view('render.more_data',compact('moreData'))->render();

        return response()->json([
            'html' => $html,
            'currentPage' => $currentPage,
        ]);
    }
}
