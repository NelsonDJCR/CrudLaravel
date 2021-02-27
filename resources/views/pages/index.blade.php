@php
// print_y($datos);
@endphp
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $i)
            <tr>
                <td>{{ $i->id }}</td>
                <td>{{ $i->photo }}</td>
                <td>{{ $i->name }}</td>
                <td>{{ $i->lastname }}</td>
                <td>{{ $i->email }}</td>
                <td>
                    <button id="delete_redord" id="{{$i->id}}"></button>
                    <form method="POST" action="{{ url('customers/' . $i->id) }}">
                        @csrf
                        {{ method_field('DELETE ') }}
                        <input type="submit" onclick="return confirm('¿Delete record?');" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    $("#delete_redord").click(function () {
        
    });
</script>
