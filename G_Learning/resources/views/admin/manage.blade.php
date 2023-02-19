@extends("index");

@section("mainBody")
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Admin Management</a></li>
                            <li class="breadcrumb-item active" aria-current="page">All</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">

                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td><img src="" height="50px"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="badge bg-success">Edit</a>
                                    <a href="" class="badge bg-danger">Delete</a>


                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection

