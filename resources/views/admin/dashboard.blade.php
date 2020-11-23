@extends('layouts.app')

@section('content')
<main class="main-content bgc-grey-100">
    <div id="mainContent">
        <h6 class="lh-1">Hello {{Auth::user()->name}}</h6>
    </div>
</main>
@endsection