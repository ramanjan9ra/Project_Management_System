@extends ('layouts.app')

@section('content')

<div class="container">
<div class="text-center bg-info-subtle p-3 m-4">
            <h1>Edit User</h1>
            </div>
            <form method="POST" action="{{ route('users.update', $user->id) }}" style="width: 20%" class="mt-5 p-5 position-absolute top-50 start-50 translate-middle bg-primary-subtle">
            @csrf
            @method('PUT')
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="string" class="form-control" id="name" name="name" value="{{ $user->name }}">
    </div>
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="string" class="form-control" id="email" name="email" value="{{ $user->email }}">
    </div>
    <div class="mb-3">
    <label for="role" class="form-label">Role</label>
    <select class="form-select" aria-label="Default select example"  name="role">
    <option disabled>Role</option>
    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option">
    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option">
    </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>

@endsection