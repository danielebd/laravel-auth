@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="pt-5">
            Projects List
        </h2>

        <div>
            <a class="btn  btn-primary my-3" href="{{route('admin.projects.create')}}">Create</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Description</th>
                    <th scope="col">Star Date</th>
                    <th scope="col">Completed</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{$project->title}}</th>
                        <td>{{$project->slug}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->start_date}}</td>
                        <td>{{($project->completed == 1) ? 'yes' : 'no'}}</td>
                        <td>
                            <a href="{{route('admin.projects.show', $project->slug)}}" class="btn btn-sm btn-primary">Show</a>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
