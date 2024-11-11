@extends('layouts.app')

@section('page-title', 'Projects')

@section('nav-title','Projects')

@section('main-content')
<div class="container">

    <div><a class="btn btn-success" href="{{route('admin.projects.create')}}">create</a></div>


    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Project title</th>
                <th>Project date</th>
                <th>Project status</th>
                <th>Link repository</th>
                <th>Image url</th>
                <th>Description</th>
                <th colspan="3">Btns</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>

                @forelse($projects as $project)


                <td>{{$project->project_title}}</td>
                <td>{{$project->launch_date}}</td>
                <td>{{$project->project_status}}</td>
                <td>{{$project->repository_url}}</td>
                <td>{{$project->project_thumbnail}}</td>
                <td>{{Str::words($project->project_summary,5,'...')}}</td>
                <td><a class="btn btn-secondary" href="{{route('admin.projects.show',$project->id)}}">show</a></td>
                <td><a class="btn btn-warning" href="{{route('admin.projects.edit',$project->id)}}">edit</a></td>
                <td>
                    <form action="{{route('admin.projects.delete',$project->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </td>
            </tr>

            @empty
            <tr>
                <td colspan="7">There aren't projects</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>
@endsection