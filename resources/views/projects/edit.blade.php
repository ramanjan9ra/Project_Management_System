@extends ('layouts.app')

@section ('content')

<div class="container">
<div class="text-center bg-info-subtle p-3 m-4">
            <h1>Edit Project</h1>
            </div>
            <form method="POST" action="{{ route('projects.update', $project->id) }}" style="width: 20%" class="mt-5 p-5 position-absolute top-50 start-50 translate-middle bg-primary-subtle">
            @csrf
            @method('PUT')
    <!-- <div class="mb-3">
    <label for="pid" class="form-label">Project ID</label>
    <input type="string" class="form-control" id="pid" name="project_id">
  </div> -->
  <div class="mb-3">
    <label for="name" class="form-label">Project Name</label>
    <input type="string" class="form-control" id="name" name="project_name" value="{{ $project->project_name }}">
    </div>
    <div class="mb-3">
    <label for="assign" class="form-label">Assigned To</label>
    <input type="string" class="form-control" id="assign" name="assigned_to" value="{{ $project->assigned_to }}">
    </div>
    <div class="mb-3">
    <label for="client" class="form-label">Client Name</label>
    <input type="string" class="form-control" id="client" name="client_name" value="{{ $project->client_name }}">
    </div>
    <div class="mb-3">
    <select class="form-select" aria-label="Default select example"  name="status">
    <option selected>Status</option>
    <option value="1" {{ $project->status == 1 ? 'selected' : '' }}>Compelete</option">
    <option value="2" {{ $project->status == 2 ? 'selected' : '' }}>Pending</option">
    <option value="3" {{ $project->status == 3 ? 'selected' : '' }}>In Progress</option">
    <option value="4" {{ $project->status == 4 ? 'selected' : '' }}>On Hold</option">
    </select>
    </div>
    <div class="mb-3">
    <label for="start" class="form-label">Start Date</label>
    <input type="date" class="form-control" id="start" name="start_date" value="{{ $project->start_date }}">
    </div>
    <div class="mb-3">
    <label for="end" class="form-label">End Date</label>
    <input type="date" class="form-control" id="end" name="end_date" value="{{ $project->end_date }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
@endsection
