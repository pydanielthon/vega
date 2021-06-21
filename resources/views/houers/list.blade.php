@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <table class="table table-bordered">
            <tr>
                <th>Pracownik</th>
                <th>Kontrahent</th>
                <th>Godziny</th>

                <th>Godziny</th>

            </tr>
            @foreach ($houers ?? '' as $houer)
            <tr>
                <td>{{ $houer->workers->name }} {{ $houer->workers->surname }} </td>
                <td>{{$houer->contrahents->name}}</td>
                <td>{{$houer->houers}}</td>

                <td>
                     <a class="nav-link" href="{{ route('houers.show',$houer->id) }}">Show</a>
                        <a class="nav-link" href="{{ route('houers.edit',$houer->id) }}">Edit</a>
                    <form action="{{ route('houers.destroy',$houer->id) }}" method="POST">

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
