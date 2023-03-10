@extends('layouts.app')

@section("page_title")Comics @endsection

@section("content")
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            
        <div class="col-6 col-sm-3 col-md-2">
        {{ $comic["title"] }}

        </div>
        @endforeach

    </div>
</div>
@endsection