@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row">

        <div class="title col my-4 text-center">

            <!-- Title -->
            <h2>@yield('form-title','')</h2>
        </div>
        <form class="row g-2 justify-content-center" action="@yield('form-route')" method="POST">
            @csrf

            <!-- Form Methods -->
            @yield('form-method','')

            <!-- Input for Project title -->
            <div class="col-7 form-floating">
                <input class="form-control" type="text" name="project_title" id="title"
                    value="{{old('project_title',$project->project_title)}}">
                <label for="title">Project title</label>

                <!-- Error Message -->
                @error('project_title')
                <div>{{$message}}</div>
                @enderror
            </div>

            <!-- Input for Project date -->
            <div class="col-7 form-floating">
                <input class="form-control" type="date" name="launch_date" id="project-date"
                    value="{{old('launch_date',$project->launch_date)}}">
                <label for="project-date">Launch date</label>

                <!-- Error Message -->
                @error('launch_date')
                <div>{{$message}}</div>
                @enderror
            </div>

            <!-- Input for Project status -->
            <div class="col-7 my-4">
                <input class="form-check-input" type="checkbox" name="technologies" id="tech"
                    value="{{old('technologies',$project->technologies)}}">
                <label class="form-check-label" for="tech">Technologies</label>

                <!-- Error Message -->
                @error('technologies')
                <div>{{$message}}</div>
                @enderror
            </div>

            <!-- Input for  Project technology-->
            <div class="col-7 form-floating">
                <select class="form-select" name="project_status" id="status">

                    <option value>Open this select menu </option>
                    <option selected value="{{old('project_status',$project->project_status)}}">
                        {{old('project_status',$project->project_status)}}
                    </option>
                </select>

                <label for="status">Project status</label>

                <!-- Error Message -->
                @error('project_status')
                <div>{{$message}}</div>
                @enderror
            </div>

            <!-- Input for  Project repository link-->
            <div class="col-7 form-floating">
                <input class="form-control" type="text" name="repository_url" id="repo-link"
                    value="{{old('repository_url',$project->repository_url)}}">
                <label for="repo-link">Repository url</label>

                <!-- Error Message -->
                @error('repository_url')
                <div>{{$message}}</div>
                @enderror
            </div>

            <!-- Input for  Project img url-->
            <div class="col-7 form-floating">
                <input class="form-control" type="text" name="project_thumbnail" id="img-url"
                    value="{{old('project_thumbnail',$project->project_thumbnail)}}">
                <label for="img-url">Project thumbnail</label>

                <!-- Error Message -->
                @error('project_thumbnail')
                <div>{{$message}}</div>
                @enderror
            </div>

            <!-- Input for  Project description-->
            <div class="col-7 form-floating">
                <textarea class="form-control" type="text" name="project_summary"
                    id="description">{{old('project_summary',$project->project_summary)}}</textarea>
                <label for="description">Description</label>


                <!-- Error Message -->
                @error('project_summary')
                <div>{{$message}}</div>
                @enderror
            </div>

            <!-- Additionals Inputs -->
            @yield('additionals-inputs','')

            <!-- Btns  -->
            <div class="mt-3">
                <button class="btn btn-success" type="submit">@yield('submit-btn-text', '')</button>
                <button class="btn btn-warning" type="reset">@yield('reset-btn-text', '')</button>
            </div>
        </form>

    </div>






    @endsection