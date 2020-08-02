@extends('../layouts.app')
@section('content')
    <div class="container">
        @if ($test['image_location']!="null")
            <img src="{{$test['image_location']}}" alt="" style="width: 100%; height: 60vh;">
        @endif
        <h3>{{$test['name']}}</h3>
        <h4>{{$test['rate']['pay_amt']}}</h4>
    </div>
@endsection