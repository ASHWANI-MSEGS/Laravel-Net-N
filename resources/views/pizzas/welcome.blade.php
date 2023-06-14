@extends("layouts.layout")

    <title>Document</title>
@section('content')
<h1>hello there
    
</h1>
<!-- // order placed message  using the session-->
<p> {{ session('msg') }}  </p>

@endsection