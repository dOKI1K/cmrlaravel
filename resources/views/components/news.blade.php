<section id="novedades-section">
    <div>
        @foreach ($post as $post)
            <div class="nv">
                <h2>{!! $post->title !!}</h2>
                <p>
                    {!! $post->body !!}
                </p>
                <h2>...</h2>
            </div>
        @endforeach
    </div>
</section>