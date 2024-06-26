@extends('admin.layout.main1')
@section('title','Teachers')
@section('content')
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
                                <th>first name</th>
                                <th>last name</th>
                                <th>date_of_birth</th>
                                <th>grade</th>
                                <th>subject</th>
                                <th>published</th>
                                <td>image</td>
                                <th>edit</th>
                                <th>show</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        @foreach($teachers as $teacher )
                            <tr>
                                <td>{{$teacher->first_name}}</td>
                                <td>{{$teacher->last_name}}</td>
                                <td>{{$teacher->date_of_birth}}</td>
                                <td>{{$teacher->grade}}</td>
                                <td>{{$teacher->subject}}</td>
                                <td>{{$teacher->published}}</td>
                                <td>{{$teacher->image}}</td>
                                <td><a href="{{ route('editTeacher',$teacher->id)}}">Edit</a></td>
                                <td><a href="{{ route('showTeacher',$teacher->id)}}">show</a></td>
                                <td>
                                    <form action="{{ route('deleteTeacher') }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <input type="hidden" value="{{$teacher->id}}" name="id" >
                                    <input type="submit" onclick="return confirm('Are you sure?')" value="Delete">

                                    </form> 
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection