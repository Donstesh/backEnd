@extends('layouts.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">About Page</h1>

                    <form action="{{ route('about.update', ['id' => $about->id]) }}" method="POST" enctype="multipart/form-data">  
                    @csrf
                    @method('POST')                      
                        <label class="form-label" for="customFile">Image</label>
                        <input type="file" class="form-control" id="customFile" />
                        <br>
                        <label class="form-label" for="customFile">Title</label>
                        <input type="text" class="form-control border-1 small" name="title"   placeholder="title" aria-label="Search" aria-describedby="basic-addon2" width="60%">
                        <br>
                        <label class="form-label" for="form4Example3">Description</label>
                        <textarea class="form-control" id="form4Example3" rows="4" name="descption"></textarea>
                        <br>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary ml-3">Submit</button>
                        </div>

                    </form>

                </div>
               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
