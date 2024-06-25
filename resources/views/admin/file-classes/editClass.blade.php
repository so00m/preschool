@extends('admin.layout.main1')

@section('content')
<h1>Update Teacher info</h1>
<hr>
<div class="container mt-5">
    <form  action="{{ route('updateTeacher' , $teacher->id) }}" method="post" enctype="multipart/form-data"  style="margin:5%">
       
        @csrf
        @method('put')

        <div class="form-group">
            <label for="first_name">First Name</label>
            <p style="color:rgb(117, 2, 2)">
                @error('first_name'){{ $message }}@enderror
              </p>
            <input type="text" value="{{$teacher->first_name}}" name="first_name"  placeholder="jone" class="form-control" >
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <p style="color:rgb(117, 2, 2)">
                @error('last_name'){{ $message }}@enderror
              </p>
            <input type="text" value="{{$teacher->last_name}}" name="last_name" placeholder="doe" class="form-control">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <p style="color:rgb(117, 2, 2)">
                @error('phone'){{ $message }}@enderror
              </p>
            <input type="text" value="{{$teacher->phone}}" name="phone"  placeholder="+1123456798" class="form-control" id="phone" >
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <p style="color:rgb(117, 2, 2)">
                @error('email'){{ $message }}@enderror
              </p>
            <input type="email" value="{{$teacher->email}}" name="email"  placeholder="johndoe@example.org" class="form-control" >
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <p style="color:rgb(117, 2, 2)">
                @error('subject'){{ $message }}@enderror
            </p>
            <select name="subject" id="subject" class="form-control" >
              <option value="" >Please Select a subject</option>
              <option value="Math Teacher" {{$teacher->subject== 'Math Teacher' ? 'selected' : '' }}>Math Teacher</option>
              <option value="Science Teacher" {{$teacher->subject =='Science Teacher' ? 'selected' : '' }}>Science Teacher</option>
              <option value="English Teacher" {{$teacher->subject =='English Teacher' ? 'selected' : '' }}>English Teacher</option>
            </select>
        </div>

        <div class="form-group">
            <p><img src="{{ asset('assets/images/'. $teacher->image ) }}"></p>

            <label for="image">Image</label>
            <p style="color:rgb(117, 2, 2)">
                @error('image'){{ $message }}@enderror
              </p>
            <input type="file"  name="image" placeholder="upload image.png or jpg" class="form-control" >
        </div>

        <div class="form-group">
        <input type="checkbox" {{$teacher->published ? 'checked' : ''}}  name="published"  >
        <label for="published" >Click here to publish on the site </label>
        </div>

        <input type="submit" value="update">
    </form>
</div>

@endsection
