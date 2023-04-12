@extends('layouts.main')
@section('Dashboard.li','mm-active')
@section('Dashboard.a','active')
@section('content')

<div class="flex" style="border: 2px solid gray; border-radius: 2px; box-sizing: border-box; position: absolute; padding: 0; padding-left: 9px;">
    <input type="text" id="put" style="background-color: transparent; border-right: 2px solid gray; padding-right: 50px;">
    <input type="color" name="" id="get" onchange="fetch()">
</div>
@endsection