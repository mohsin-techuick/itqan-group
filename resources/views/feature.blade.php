@extends('layouts.app')

@section('title','feature')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="feature-text pt-3">
                <img src="{{asset("images/arrow.png")}}">
                <h1> <span>BEST<span>FEATURES </h1>
                <p class="lead">As Lead Consultant and Architect of Record inside The Kingdom of Saudi Arabia, we are providing our clients with all Architectural and Engineering Services required for a One-Stop-Consultancy, covering all project Phases such as pre-Concept, Concept, SchematicDesign & Design Development, Detailed Design, Tender Documentation and Poject Management & Site Supervision </p>
            </div>
            <div class="feature-list">
                <ul>
                    <li><img src="{{asset("images/arrow.png")}}"><a href="#">Optimism</a></li>
                    <li><img src="{{asset("images/arrow.png")}}"><a href="#">Persistance</a></li>
                    <li><img src="{{asset("images/arrow.png")}}"><a href="#">Vision</a></li>
                    <li><img src="{{asset("images/arrow.png")}}"><a href="#">Innovativess</a></li>
                    <li><img src="{{asset("images/arrow.png")}}"><a href="#">Focus</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="feature-image pt-3 text-right">
                <img src="{{asset("images/feature.png")}}" alt="feature image">
            </div>
        </div>
    </div>
</div>

@endsection

