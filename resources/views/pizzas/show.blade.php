@extends("layouts.layout")

    <title>Show</title>
@section('content')
<div>
    ORDER FOR {{$pizza->name}}
</div>
<div>
{{$pizza->type}} --- {{ $pizza->base}}
</div>

<a href="/new"> go back</a>
@endsection