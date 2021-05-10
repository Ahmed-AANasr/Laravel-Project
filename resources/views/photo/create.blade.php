@extends('../layouts.app')

@section('content')

<body style="background-color: #000">
    

<div class="conateiner mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">
            <form action="{{route('photo.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label style="color: #fff">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label style="color: #fff">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <button type="submit"  class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
</body>
@endsection