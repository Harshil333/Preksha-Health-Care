@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="jumbotron">
            <form action="/savechanges" method="post">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-2 col-form-label"><h5>Discount Percent:</h5></label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="exampleInputEmail1" name="percent_discount" value="{{old('percent_discount',$percent_discount)}}">
                    </div>
                </div>
                    <div class="text-center" style="margin:10px;">
                        <button type="submit" class="btn btn-md btn-primary">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection