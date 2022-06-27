@extends('layouts.app')

@section('title')
    Laravel DC Comics
@endsection

@section('main_content')
    <div class="banner"></div>
    <div class="comic-detail">
        <div class="title-bar">
            <div class="container">
                <div class="comic-thumb"><img src="{{ $comic['thumb'] }}" alt=""></div>
            </div>
        </div>
        <div class="container">
            ciao
        </div>
    </div>
@endsection
