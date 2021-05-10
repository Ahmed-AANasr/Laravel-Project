@extends('../layouts.app')



@section('content')
<body style="background-color: black">
    

<h1 class="text-center" style="color: #fff">YOUR PHOTO 
    @foreach ($single as $s)
    <a href="{{route('photo.edit', $s->id)}}" class="btn btn-success 
    p-2"><i class="fa fa-edit"></i></a>
<form action="{{route('photo.destroy', $s->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger 
    p-2"><i class="fa fa-trash"></i></button>  
</form>
    @endforeach
</h1>




<div class="container">
    <div class="row">
        @foreach ($single as $a)
            
        
        <div class="col-md-4 mt-2 mb-2 mx-auto mt-5">
            <div class="w-75 m-auto mt-5">

                <img  src="{{asset('images/'.$a->image)}}" class="img-fluid"  style = "height: 400px" >
            </div>
            <div>
                <h2 class="text-center mt-5">{{$a->title}}</h2>
            </div>
        </div>
        @endforeach
    </div>
</div>







</body>

    
@endsection





