<tr>
    <th scope="row">{{ $user->id }}</th>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->created_at }}</td>
    <td><span class="badge badge-primary">{{ $user->present()->status }}</span></td>
</tr>
