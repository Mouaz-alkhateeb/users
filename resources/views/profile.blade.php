@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">user profile</div>

                <div class="panel-body">
               my id : {{ Auth::user()->id }}
                <hr>
               my name : {{ Auth::user()->name }}
                <hr>
               my email : {{ Auth::user()->email }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
