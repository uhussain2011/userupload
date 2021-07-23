@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @if(count($images) == 0)

            <h1>You have no images </h1>

        @else

       @foreach($images as $image)
       <div class="col-lg-4">
                    <img src="/storage/images/{{$image->photo_path}}"  width="300" height="auto" class="img-fluid">

                    <h4>Description </h4>
                    <p>{{$image->description}}</p>
       </div>

       @endforeach

       @endif
    </div>
</div>
@endsection
