@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <table class="table table-bordered">
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
            </tr>
            @foreach ($workers ?? '' as $worker)
            <tr>
                <td>{{ $worker->name }}</td>
                <td>{{ $worker->surname }}</td>
                <td>
                     <a class="nav-link" href="{{ route('workers.show',$worker->id) }}">Show</a>
                        <a class="nav-link" href="{{ route('workers.edit',$worker->id) }}">Edit</a>
                    <form action="{{ route('workers.destroy',$worker->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="nav-link">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
