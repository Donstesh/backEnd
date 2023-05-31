@extends('layouts.app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">SongWritters</h1>

                    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>About</th>
                    <th>Facebook</th>
                    <th>Twitter</th>
                    <th>Instagram</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($songWriters as $songWriter)
                    <tr>
                        <td>{{ $songWriter->name }}</td>
                        <td>{{ $songWriter->image }}</td>
                        <td>{{ $songWriter->about }}</td>
                        <td>{{ $songWriter->facebook }}</td>
                        <td>{{ $songWriter->twitter }}</td>
                        <td>{{ $songWriter->instagram }}</td>
                        <td>
                            <form action="{{ route('songwritter.destroy',$songWriter->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('songwritter.edit',$songWriter->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $songWriters->links() !!}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection