<h1>Users</h1>

<ul>
    @foreach ($user as $user)
        <li>
            {{$user->name}}
        </li>
    @endforeach
</ul>