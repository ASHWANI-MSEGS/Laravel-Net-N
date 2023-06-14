@extends("layouts.layout")

    <title>Document</title>
@section('content')

<div>pizza list</div>

@foreach($pizzas as $pizza)
<div>
        {{$pizza->name}} -- {{$pizza->type}}  --{{$pizza->base}}
    
</div>

@endforeach
<a href="/create"> create a pizza</a>

@endsection