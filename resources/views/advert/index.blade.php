@extends('layouts.app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Adverts Section</h1>
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
                @foreach ($adverts as $advert)
                    <tr>
                        <td>{{ $advert->title }}</td>
                        <td>{{ $advert->descption }}</td>
                        <td>
                            <form action="{{ route('advert.destroy',$advert->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('advert.edit',$advert->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $adverts->links() !!}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
