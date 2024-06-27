@extends ('layouts.app')

@section ('content')
<div class="container">
            <div class="text-center bg-info-subtle p-3 m-4">
            <h1>Add New Project</h1>
            </div>
            @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <!-- Error Message for Validation Errors -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            <form method="POST" action="{{ route('projects.store') }}" style="width: 20%" class="mt-5 p-5 position-absolute top-50 start-50 translate-middle bg-primary-subtle">
            @csrf
    <!-- <div class="mb-3">
    <label for="pid" class="form-label">Project ID</label>
    <input type="string" class="form-control" id="pid" name="project_id">
  </div> -->
  <div class="mb-3">
    <label for="name" class="form-label">Project Name</label>
    <input type="string" class="form-control" id="name" name="project_name">
  </div>
  <div class="mb-3">
    <label for="assign" class="form-label">Assigned To</label>
    <input type="string" class="form-control" id="assign" name="assigned_to">
  </div>
  <div class="mb-3">
    <label for="client" class="form-label">Client Name</label>
    <input type="string" class="form-control" id="client" name="client_name">
  </div>  
  <div class="mb-3">
  <select class="form-select" aria-label="Default select example"  name="status">
  <option selected>Status</option>
  <option value="1">Compelete</option">
  <option value="2">Pending</option">
  <option value="3">In Progress</option">
  <option value="4">On Hold</option">
</select>
  </div>
  <div class="mb-3">
    <label for="start" class="form-label">Start Date</label>
    <input type="date" class="form-control" id="start" name="start_date">
  </div>
  <div class="mb-3">
    <label for="end" class="form-label">End Date</label>
    <input type="date" class="form-control" id="end" name="end_date">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>

@endsection