<x-app-layout>

    <div class="p-6">

        <h1>Daftar User</h1>

        <table border="1" cellpadding="10">

            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Role</th>
            </tr>

            @foreach($users as $user)

            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->no_hp }}</td>
                <td>{{ $user->role }}</td>
            </tr>

            @endforeach

        </table>

    </div>

</x-app-layout>