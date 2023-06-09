@extends('layouts.app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">SongWriters Section Section</h1>
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
                @foreach ($songwriterssections as $songwriterssection)
                    <tr>
                        <td>{{ $songwriterssection->title }}</td>
                        <td>{{ $songwriterssection->description }}</td>
                        <td>
                            <form action="{{ route('songwriterssection.destroy',$songwriterssection->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('songwriterssection.edit',$songwriterssection->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $songwriterssections->links() !!}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection