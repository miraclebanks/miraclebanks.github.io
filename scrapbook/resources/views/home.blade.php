@extends('layouts.app')

@section('content')
<!-- User info -->
<div class="container">
    <div class="row">
        <!-- User Image -->
        <div class="col-3 pt-2">
        <img src="/svg/Scrapbook-Logo.svg" alt="aged scrapbook with black and white photos" class="rounded-circle" style="height:100%; width:100%">
        </div>
        <!-- User profile information -->
        <div class="col-9 pt-5">
            <div><h1> Scrapbook</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>653</strong> posts</div>
                <div class="pr-5"><strong>361m</strong> followers</div>
                <div class="pr-5"><strong>64</strong> following</div>
            </div>
            <div style="padding-top: 10px;"><strong>{{ $user->profiles->title}}</strong></div>
            <div> {{$user->profiles->description}}</div>
            <div><a href="#">{{$user->profiles->url }}</div>
        </div>
    </div>
    <div style="padding-top: 20px; "class="row">
        <div style=""class="col-4">
            <img src="https://images.unsplash.com/photo-1478145971721-10511ecaf005?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="w-100" style=" height: 250px; width: 250px">
        </div>  
        <div style=""class="col-4">
            <img src="https://images.unsplash.com/photo-1517191434949-5e90cd67d2b6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" class="w-100" style=" height: 250px; width: 250px">
        </div>   
        <div class="col-4">
            <img src="https://images.unsplash.com/photo-1535295972055-1c762f4483e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt=""class="w-100" style= "height:250px; width:250px">
        </div>   
    </div>

</div>
@endsection
 