@extends('home')

@section('content')

<a href="{{route('users.create')}}">Create</a>

<hr>

<h1>Listagem dos Usuários</h1>

<ul>
    @foreach ($users as $user)
        <li>
            {{ $user->name }} -
            {{ $user->email }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar</a> | 
            <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>            
        </li>
    @endforeach
</ul>

@endsection