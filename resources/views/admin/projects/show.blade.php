@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <img class="card-img-to" src="{{$project->project_thumbnail}}" alt="{{$project->project_title}}">
                <div class="card-body">
                    <h3 class="card-title">{{$project->project_title}}</h3>
                    <p class="card-text">{{$project->project_summary}}</p>
                    <p>{{$project->tecnolologies}}</p>
                    <a class="card-link" href="{{$project->repository_url}}">See my project</a>
                    <p>{{$project->project_status}}</p>
                    <p>{{$project->launch_date}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection