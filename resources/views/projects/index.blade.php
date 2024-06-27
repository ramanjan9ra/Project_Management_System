@extends('layouts.app')

@section('content')

<div class="container">
<div class=" mt-5">
        <h1 class="bg-info-subtle text-info-emphasis text-center p-4">PROJECTS</h1>
    </div>
    <div class="mt-5">
        <a href="{{ route('projects.create') }}" class="btn btn-primary">Add New Project</a>
    </div>
<table class="table table-primary table-striped table-bordered border-primary mt-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Project Name</th>
                <th>Assigned To</th>
                <th>Status</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->assigned_to }}</td>
                    <td>{{ \App\Models\Project::getStatusNames()[$project->status] ?? 'Unknown Status' }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection