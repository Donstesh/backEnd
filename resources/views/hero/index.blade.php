@extends('layouts.app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Hero Section Sliders</h1>
                    @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($heros as $hero)
                    <tr>
                        <td>{{ $hero->image }}</td>
                        <td>{{ $hero->title }}</td>
                        <td>
                            <form action="{{ route('hero.destroy',$hero->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('hero.edit',$hero->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $heros->links() !!}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
