@extends('layouts.app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">What We Do Section</h1>
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
                @foreach ($whatwedos as $whatwedo)
                    <tr>
                        <td>{{ $whatwedo->title }}</td>
                        <td>{{ $whatwedo->desc }}</td>
                        <td>
                            <form action="{{ route('whatwedo.destroy',$whatwedo->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('whatwedo.edit',$whatwedo->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $whatwedos->links() !!}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection