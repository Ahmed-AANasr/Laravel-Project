@extends('../layouts.app')

@section('content')

@foreach ($single as $s)
    

<body style="background-color: black">

<div class="conateiner mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">
            <form action="{{route('photo.update', $s->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label style="color: #fff">Title</label>
                    <input value="{{$s->title}}" type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <img src="{{asset('images/'.$s->image)}}" width="100">
                    <label style="color: #fff">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <button type="submit"  class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
</body>
@endforeach
@endsection