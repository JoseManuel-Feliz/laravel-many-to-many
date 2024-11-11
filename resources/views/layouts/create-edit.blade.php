@extends('layouts.app')

@section('main-content')

<div class="container">


    <form action="@yield('form-route')" method="POST">
        @csrf

        @yield('form-method','')
        <div>
            <label for="title">Project title</label>
            <input type="text" name="project_title" id="title" value="{{old('project_title',$project->project_title)}}">
            @error('project_title')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="project-date">Launch date</label>
            <input type="text" name="launch_date" id="project-date"
                value="{{old('launch_date',$project->launch_date)}}">
            @error('launch_date')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="status">Project status</label>
            <input type="text" name="project_status" id="status"
                value="{{old('project_status',$project->project_status)}}">
            @error('project_status')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="repo-link">Repository url</label>
            <input type="text" name="repository_url" id="repo-link"
                value="{{old('repository_url',$project->repository_url)}}">
            @error('repository_url')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="img-url">Project thumbnail</label>
            <input type="text" name="project_thumbnail" id="img-url"
                value="{{old('project_thumbnail',$project->project_thumbnail)}}">
            @error('project_thumbnail')
            <div>{{$message}}</div>
            @enderror
        </div>
        <td>{{Str::words($project->project_summary,5,'...')}}</td>
        <div>
            <label for="description">Description</label>
            <input type="text" name="project_summary" id="description"
                value="{{old('project_summary',$project->project_summary)}}">
            @error('project_summary')
            <div>{{$message}}</div>
            @enderror
        </div>

        @yield('additionals-inputs','')

        <div>
            <button type="submit">@yield('submit-btn-text', '')</button>
            <button type="reset">@yield('reset-btn-text', '')</button>
        </div>
    </form>

</div>





@endsection