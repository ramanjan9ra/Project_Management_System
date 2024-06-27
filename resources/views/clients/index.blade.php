@extends ('layouts.app')

@section('content')

    <div class="container">
    <div class=" mt-5">
        <h1 class="bg-info-subtle text-info-emphasis text-center p-4">CLIENT'S</h1>
    </div>
    <div class="mt-5">
    <a class="btn btn-primary" href="{{ route('clients.create') }}">Add Client</a>
    </div>
        <div>
        <table class="table table-primary table-striped table-bordered border-primary mt-2">
                    <thead>
                        <tr>
                            <th>Client ID</th>
                            <th>Client Name</th>
                            <th>Client Email</th>
                            <th>Client Phone</th>
                            <th>Client Project</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->client_name }}</td>
                                <td>{{ $client->client_email }}</td>
                                <td>{{ $client->client_phone }}</td>
                                <td>{{ $client->client_project }}</td>
                                <td>
                                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary">Edit</a>
                                    <form style="display:inline-block" method="POST" action="{{ route('clients.destroy', $client->id) }}">
                                    @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@endsection