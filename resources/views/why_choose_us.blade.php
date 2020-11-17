@extends('layouts.app')

@section('title','Why Choose Us')

@section('custom-css')
<link rel="stylesheet" href="{{asset("css/why-choose-us.css")}}">
@endsection

@section('content')
<div class="container" style="width:60%;margin-left:auto;margin-right:auto">
    <img src="{{asset("images/why_choose_us.png")}}" alt="" style="position: absolute;bottom:0;left:0;height:88%;width:100%">
    <div class="row no-gutters" >
        <div class="col-md-12">
            <div class="heading">
                <img src="{{asset("images/arrow.png")}}">
                <h1> <span>Why<span>Choose Us? </h1>
            </div>
        </div>
    </div>
    <div class="row no-gutters" >
        <div class="col-md-12">
            <ul id="menu">
                <li><a href="#">High quality is our priority</a></li>
                <li><a href="#">We are rush project specilists</a></li>
                <li><a href="#">We have a creative design team</a></li>
                <li><a href="#">We can solve your problems</a></li>
                <li><a href="#">We offer help for stalled project</a></li>
                <li><a href="#">We respect your needs & culture</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection

