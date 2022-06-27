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
            <h2 class="comic-title">{{ strtoupper($comic['title']) }}</h2>
            <div class="info-bar">U.S. Price <span class="price">{{ $comic['price'] }}</span></div>
            <p class="comic-description">{{ $comic['description'] }}</p>
        </div>
        <div class="comic-data">
            <div class="container">
                <div class="talent">
                    <h3>Talent</h3>
                    <div class="line">
                        <div class="line-name">
                            Art by:
                        </div>
                        <div class="line-content">
                            {{ join(', ', $comic['artists']) }}
                        </div>
                    </div>
                    <div class="line">
                        <div class="line-name">
                            Written by:
                        </div>
                        <div class="line-content">
                            {{ join(', ', $comic['writers']) }}
                        </div>
                    </div>
                </div>
                <div class="specs">
                    <h3>Specs</h3>
                    <div class="line">
                        <div class="line-name">
                            Series:
                        </div>
                        <div class="line-content">
                            {{ $comic["series"] }}
                        </div>
                    </div>
                    <div class="line">
                        <div class="line-name">
                            U. S. Price:
                        </div>
                        <div class="line-content">
                            {{$comic["price"] }}
                        </div>
                    </div>
                    <div class="line">
                        <div class="line-name">
                            On-sale date:
                        </div>
                        <div class="line-content">
                            {{ $comic["sale_date"] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
