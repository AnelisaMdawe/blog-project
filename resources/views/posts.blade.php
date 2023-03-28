@extends('components.layout')

@section('content')

    @include('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            @include('components.post-featured-card', ['post' => $posts[0]])

            @if ($posts->count()>1)
                <div class="lg:grid lg:grid-cols-2">
                    @foreach($posts as $post)
                        @include('components.post-card')

                    @endforeach
                </div>
            @endif
{{--            <div class="lg:grid lg:grid-cols-3">--}}
{{--                @include('components.post-card')--}}
{{--            </div>--}}
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main>
@endsection

{{--@section('content')--}}

{{--    @foreach ($posts as $post)--}}

{{--        <article>--}}
{{--            <h1>--}}
{{--                <a href="/posts/{{ $post->id }}">--}}
{{--                    {{ $post->title }}--}}
{{--                </a>--}}
{{--            </h1>--}}
{{--            <p>--}}
{{--                by <a href="/authors/{{$post->author->username}}" >{{ $post->author->name }}</a> in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name }}</a>--}}
{{--            </p>--}}

{{--            <div>--}}
{{--                {{$post->excerpt}}--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}

{{--@endsection--}}


