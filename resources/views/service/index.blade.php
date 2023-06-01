@extends('layouts.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Service Section</h1>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Pic</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                                <tr>
                                    <td>{{ $service->pic }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->descrition }}</td>
                                    <td>
                                        <form action="{{ route('service.destroy',$service->id) }}" method="Post">
                                            <a class="btn btn-primary" href="{{ route('service.edit',$service->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {!! $services->links() !!}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


@endsection