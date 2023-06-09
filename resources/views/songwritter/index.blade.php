@extends('layouts.app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">SongWritters</h1>
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('songwriter.create') }}"> Add New</a>
            </div>
            <br>
        </div>

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
                        <td><img src="/img/{{ $songWriter->image }}" width="100px"></td>
                        <td>{{ $songWriter->about }}</td>
                        <td>{{ $songWriter->facebook }}</td>
                        <td>{{ $songWriter->twitter }}</td>
                        <td>{{ $songWriter->instagram }}</td>
                        <td>
                            <form action="{{ route('songwriter.destroy',$songWriter->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('songwriter.edit',$songWriter->id) }}">Edit</a>
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