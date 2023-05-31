@extends('layouts.app')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Top Nav Bar</h1>

                    <form action="">
                        <label class="form-label" for="customFile">Top Menu Mail</label>
                        <input type="text" class="form-control border-1 small" placeholder="Top Menu Mail" aria-label="Search" aria-describedby="basic-addon2" width="60%">
                        <br>
                        <label class="form-label" for="customFile">Top Menu Phone</label>
                        <input type="text" class="form-control border-1 small" placeholder="Top Menu Phone" aria-label="Search" aria-describedby="basic-addon2" width="60%">
                        <br><div class="text-end">
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@endsection
