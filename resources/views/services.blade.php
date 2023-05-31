@extends('layouts.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Services Section</h1>

                    <form action="">
                        <label class="form-label" for="customFile">Image</label>
                        <input type="file" class="form-control" id="customFile" /><br>
                        <label class="form-label" for="customFile">Title</label> 
                        <input type="text" class="form-control border-1 small" placeholder="title" aria-label="Search" aria-describedby="basic-addon2" width="60%">
                        <br>
                        <label class="form-label" for="form4Example3">Description</label>
                        <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                        <br><div class="text-end">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
