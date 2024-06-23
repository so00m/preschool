
@extends('admin.layout.main1')

@section('content')
<h1>Add Teachers</h1>
<hr>
<div class="container mt-5">
    <form  action="{{ route('insertTeacher') }}" method="post" enctype="multipart/form-data"  style="margin:5%">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <p style="color:rgb(117, 2, 2)">
                @error('first_name')
                {{ $message }}
                @enderror
              </p>
            <input type="text" value="{{ old('first_name') }}" name="first_name"  placeholder="jone" class="form-control" id="first_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <p style="color:rgb(117, 2, 2)">
                @error('last_name')
                {{ $message }}
                @enderror
              </p>
            <input type="text" value="{{ old('last_name') }}" name="last_name" placeholder="doe" class="form-control" id="last_name" >
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <p style="color:rgb(117, 2, 2)">
                @error('phone')
                {{ $message }}
                @enderror
              </p>
            <input type="text" value="{{ old('phone') }}" name="phone"  placeholder="+1123456798" class="form-control" id="phone" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <p style="color:rgb(117, 2, 2)">
                @error('email')
                {{ $message }}
                @enderror
              </p>
            <input type="email" value="{{ old('email') }}" name="email"  placeholder="johndoe@example.org" class="form-control" id="email" >
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <p style="color:rgb(117, 2, 2)">
                @error('subject')
                {{ $message }}
                @enderror
            </p>
            <select name="subject" id="subject" class="form-control" >
              <option value="" >Please Select a subject</option>
              <option value="Math Teacher" {{ old('subject' ) == 'Math Teacher' ? 'selected' : '' }}>Math Teacher</option>
              <option value="Science Teacher" {{ old('subject' ) =='Science Teacher' ? 'selected' : '' }}>Science Teacher</option>
              <option value="English Teacher" {{ old('subject' ) =='English Teacher' ? 'selected' : '' }}>English Teacher</option>
            </select>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <p style="color:rgb(117, 2, 2)">
                @error('image')
                {{ $message }}
                @enderror
              </p>
            <input type="file" value="{{ old('image') }}" name="image" placeholder="upload image.png or jpg" class="form-control" id="image" >
        </div>

        <div class="form-group">
        <input type="checkbox" {{ old('published') ? 'checked' : ''}}  name="published"  id="published" >
        <label for="published" >Click here to publish on the site </label>
        </div>

        <input type="submit" value="Add">
    </form>
</div>

@endsection
