@extends('../layouts.app')



@section('content')
<body style="background-color: black">
<h1 class="text-center" style="color: #fff">YOUR PHOTOS <a href="{{route('photo.create')}}" class="btn btn-success p-2"><i class="fa fa-plus"></i></a></h1>
<div style="display: flex" class="justify-content-around">
<h3 class="text-center" style="color: #fff">Photo Count : {{$count}}</h3>
<h2 style="color: #fff">Followers: 354</h2>
<h2 style="color: #fff">Following: 2</h2>
</div>


<div class="container">
    <div class="row">
        @foreach ($all as $a)
            
        
        <div class="col-md-4 mt-2 mb-2">
            <a href="{{route('photo.show',$a->id)}}">

                <img src="{{asset('images/'.$a->image)}}" class="img-fluid"  style = "height: 400px"; "width: 100px" >
            </a>
        </div>
        @endforeach
    </div>
</div>







</body>

    
@endsection





