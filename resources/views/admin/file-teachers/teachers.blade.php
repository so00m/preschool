@extends('admin.layout.tablesmain')
@section('title','Teachers')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif


       <!-- Begin Page Content -->
       <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Our Teaching Staff</h1>

        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Teachers Data</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="row"> 
                        <div class="col-sm-12" >
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="dataTable_length">
                                    <label>Show 
                                        <select name="dataTable_length" aria-controls="dataTable"  class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value="10">10</option><option value="25">25</option>
                                        <option value="50">50</option><option value="100">100</option>
                                        </select>
                                     entries
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="dataTable_filter" class="dataTables_filter">
                                    <label>
                                         Search:
                                         <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                    </label>
                                </div>
                            </div>
                        </div>
                     </div>

                        <div class="col-sm-12" >
                       
                             
                            <table class="table table-bordered dataTable" id="dataTable" >
                                    <tr>
                                        <th>first name</th>
                                        <th>last name</th>
                                        <th>phone</th>
                                        <th>email</th>
                            
                                        <th>published</th>
                                        <td>image</td>
                                        <th>edit</th>
                                        <th>show</th>
                                        <th>delete</th>
                                    </tr>
                                
                                @foreach($teachers as $teacher )
                                    <tr>
                                        <td>{{$teacher->first_name}}</td>
                                        <td>{{$teacher->last_name}}</td>
                                        <td>{{$teacher->phone}}</td>
                                        <td>{{$teacher->email}}</td>

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
                       
                        <div class="row">
                            
                            <div class="col-sm-12 ">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                        </li>
                                        <li class="paginate_button page-item active">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                        </li>
                                        <li class="paginate_button page-item ">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                        </li>
                                        <li class="paginate_button page-item next" id="dataTable_next">
                                            <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

@endsection