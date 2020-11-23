@extends('layouts.app')

@section('content')
    <div class="row">
        <h6 class="lh-1">Hello {{Auth::user()->name}}</h6>
    </div>
@endsection