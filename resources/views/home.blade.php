@extends('layouts.app')

@section('title')
    Laravel DC Comics
@endsection

@section('main_content')
<div class="banner"></div>

@include('components.comic-list', [
                'section_title' => 'Current Series',
                'comic_array' => $comic_array,
            ])

@endsection