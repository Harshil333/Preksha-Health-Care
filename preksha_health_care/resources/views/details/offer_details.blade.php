@extends('../layouts.app')
@section('content')
    <div class="container">
        @if ($offer['image_location']!="null")
            <img src="{{$offer['image_location']}}" alt="" style="width: 100%; height: 60vh;">
        @endif
        <h3>{{$offer["name"]}}</h3>
        <h4>&#8377 {{$offer['rate']['offer_rate']}}</h4>
    </div>
@endsection