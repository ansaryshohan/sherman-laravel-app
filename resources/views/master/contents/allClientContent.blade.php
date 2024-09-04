<table class="table table-striped">
    <thead>
        <tr class="table-success">
            <th scope="col">SI.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile no.</th>
            <th scope="col">Description</th>
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
                <td>{{ $client['description'] }}</td>
                <td>
                    <button class="btn-success">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn-warning">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
