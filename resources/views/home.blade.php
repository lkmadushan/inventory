@extends('layouts.app')

@section('content')
    <div id="app">
        <router-view></router-view>
    </div>
@endsection

@section('scripts')
    <script src="{{ url('js/app.js') }}"></script>
@endsection