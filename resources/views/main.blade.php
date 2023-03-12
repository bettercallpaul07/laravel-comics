@extends('layouts.app')

@section("page_title")Comics @endsection


@section("content")
<div class="container">
    <div class="top-button">
        <button>Current Series</button>
    </div>

    <div class="row comics">
        @foreach ($comics as $comic)
            
        <div class="col-6 col-sm-3 col-md-2 comic">
            <div class="card">
                <div class="card-img">
                    <img src="http://via.placeholder.com/125x150">
                </div>
                <div class="card-title">
                    {{ $comic["title"] }}

                </div>
            </div>
        </div>
        @endforeach

        <div class="down-button">
            <button>Load More</button>
        </div>

    </div>
</div>
@endsection