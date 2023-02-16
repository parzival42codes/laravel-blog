@extends('layouts.app')

@section('app--header')

    <h1> {{ config('app.name') }}</h1>

@endsection

@section('app--container-left')
    @widget('app--container-left')
@endsection

@section('app--container-center')

    <div class="container">
        @foreach ($blogPosts as $blogPost)
            <div>
                @include('themes.'.config('theme.select').'.partials.main.post')
                {{ $blogPost->post_title }}
            </div>
        @endforeach
    </div>

    {{ $blogPosts->links() }}
@endsection

@section('app--container-right')

    Foo Bar

@endsection

@section('app--footer')

    Footer

@endsection
