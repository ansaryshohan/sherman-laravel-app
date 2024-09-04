<table class="table table-striped">
    <thead>
        <tr class="table-success">
            <th scope="col">SI.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile no.</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $key => $client)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $client['name'] }}</td>
                <td>{{ $client['email'] }}</td>
                <td>{{ $client['phone_no'] }}</td>
                <td>{{ Str::length($client['description']) > 25
                    ? Str::substr($client['description'], 0, 25) . '...'
                    : $client['description'] }}
                </td>
                <td>
                    <img src="clientImage/{{ $client['client_image'] }}" alt="client image" width="40"
                        height="40">
                </td>
                <td>
                    <button class="btn-success">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn-warning" form="delete-form-{{ $client['id'] }}">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
                <form id="delete-form-{{ $client['id'] }}" action="{{ url('/client/' . $client['id']) }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                </form>
            </tr>
        @endforeach

    </tbody>
</table>
