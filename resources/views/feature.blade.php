@extends('layouts.app')

@section('title','feature')

@section('content')

<div class="container">
    <div class="row" style="width:75%;margin-left:auto;margin-right:auto">
        <div class="col-md-6">
            <div class="feature-text pt-3" style="margin-top:5px;">
                <!-- <img src="{{asset("images/arrow.png")}}"> -->
                <h1> <span>BEST<span>FEATURES </h1>
                <p class="lead">As Lead Consultant and Architect of Record inside The Kingdom of Saudi Arabia, we are providing our clients with all Architectural and Engineering Services required for a One-Stop-Consultancy, covering all project Phases such as pre-Concept, Concept, SchematicDesign & Design Development, Detailed Design, Tender Documentation and Poject Management & Site Supervision </p>
            </div>
            <div class="feature-list">
                <ul>
                    <li><img src="{{asset("images/arrow.png")}}" style="margin-right:5px;">Optimism</li>
                    <li><img src="{{asset("images/arrow.png")}}" style="margin-right:5px;">Persistance</li>
                    <li><img src="{{asset("images/arrow.png")}}" style="margin-right:5px;">Vision</li>
                    <li><img src="{{asset("images/arrow.png")}}" style="margin-right:5px;">Innovativess</li>
                    <li><img src="{{asset("images/arrow.png")}}" style="margin-right:5px;">Focus</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-image pt-3 text-right">
                <img src="{{asset("images/feature.png")}}" alt="feature image" width="100%">
            </div>
        </div>
    </div>
</div>

@endsection

