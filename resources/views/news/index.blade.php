@extends('layouts.app.main')

@section('content')
    <div class="content-bg-grey">
        <div class="content">

            <h1> Новости </h1>

            @foreach($news as $item)
                <div class="list-item">
                <div class="content-data" style="height:200px">
                    <div class="content-image-block block" style="width: 30%;" style="height:200px">
                        <img src="/image/about_club.jpg" class="content-image">
                    </div>
                    <div class="content-text block" style="width: 64%;">
                        <h3> {{$item->titlet}}</h3>
                       {{$item->short_content}}
                    </div>
                </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
