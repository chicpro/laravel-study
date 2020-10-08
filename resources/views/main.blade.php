@extends('layouts.default')

@section('title', 'Page Title')

@section('inline_style')
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
@endsection

@section('inline_script')
@endsection

@section('header')
    @include('layouts.header')
@endsection

@section('content')
<div class="starter-template">
    <h1>Bootstrap starter template</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
</div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection