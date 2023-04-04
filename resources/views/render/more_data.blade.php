@foreach($moreData as $article)
    <div class="post">
        <div class="post-img">
            <img src="{{ asset('storage/'.$article->image) }}" alt="post">
        </div>
        <div class="post-content">
            <div class="post-default">
                <div class="post-title">
                    {{ $article->title}}
                </div>
                <div class="post-date">{{ $article->date_of_publication }}</div>
            </div>
            <div class="post-hover">
                <a href="{{ route('library-article',['slug' => $article->slug]) }}" class="btn">Читать статью</a>
            </div>
        </div>
    </div>
@endforeach