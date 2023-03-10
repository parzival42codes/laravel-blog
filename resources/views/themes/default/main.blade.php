@extends('layouts.app')

@section('app--header')

    <h1> {{ config('app.name') }}</h1>

@endsection

@section('app--container-left')
    {!! \App\Helpers\WidgetHelper::getWidget('app--container-left') !!}
@endsection

@section('app--container-center')

    <div class="container">
        @foreach ($blogPosts as $blogPost)
            <div>
                @include('themes.'.config('theme.select').'.partials.main.post')
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
