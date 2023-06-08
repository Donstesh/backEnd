@extends('layouts.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Games And Films Section</h1>
                    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($game_films as $game_film)
                    <tr>
                        <td>{{ $game_film->title }}</td>
                        <td>{{ $game_film->desc }}</td>
                        <td>
                            <form action="{{ route('gamesandfilm.destroy',$game_film->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('gamesandfilm.edit',$game_film->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
