   <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Our Teaching Staff</h1>
            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Teachers Data</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered"  width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>first_name</th>
                                    <th>last_name</th>
                                    <th>phone</th>
                                    <th>email</th>
                                    <th>subject</th>
                                    <th>edit</th>
                                    <th>show</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            @foreach($teachers as $teacher )
                                <tr>
                                    <td>{{$teacher->first_name}}</td>
                                    <td>{{$teacher->last_name}}</td>
                                    <td>{{$teacher->phone}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->subject}}</td>
                                    <td>{{$teacher->published}}</td>
                                    <td>edit</td>
                                    <td>edit</td>
                                    <th>edit</th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
