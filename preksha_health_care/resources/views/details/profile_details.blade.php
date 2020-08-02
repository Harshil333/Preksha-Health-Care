@extends('../layouts.app')
@section('content')
    <div class="container">
        @if ($profile['image_location']!="null")
            <img src="{{$profile['image_location']}}" alt="" style="width: 100%; height: 60vh;">
        @endif
        <h3>{{$profile['name']}}</h3>
        <h4>{{$profile['rate']['pay_amt']}}</h4>
    </div>
@endsection