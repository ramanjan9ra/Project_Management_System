@extends ('layouts.app')

@section('content')

    <div class="container">
    <div class=" mt-5">
        <h1 class="text-center bg-info-subtle p-3 m-4">ADD NEW CLIENT'S</h1>
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
        <form method="POST" action="{{ route('clients.store') }}" style="width: 20%" class="mt-5 p-5 position-absolute top-50 start-50 translate-middle bg-primary-subtle">
        @csrf
    <div class="mb-3">
    <label for="cid" class="form-label">Client ID</label>
    <input type="string" class="form-control" id="cid" name="client_id">
    </div>    
    <div class="mb-3">
    <label for="name" class="form-label">Client Name</label>
    <input type="string" class="form-control" id="name" name="client_name">
    </div>
    <div class="mb-3">
    <label for="email" class="form-label">Client Email</label>
    <input type="string" class="form-control" id="email" name="client_email">
    </div>
    <div class="mb-3">
    <label for="phone" class="form-label">Client Phone</label>
    <input type="string" class="form-control" id="phone" name="client_phone">
    </div>
    <div class="mb-3">
    <label for="project" class="form-label">Client Project</label>
    <input type="string" class="form-control" id="project" name="client_project">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>

    </form>
    </div>
@endsection

