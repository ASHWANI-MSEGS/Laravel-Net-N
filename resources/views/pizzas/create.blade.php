@extends("layouts.layout")

    <title>Show</title>
@section('content')
<div>Create a new Pizza</div>
<form action="/new" method="POST">
@csrf
    <label for="name">YOur name :</label>
<input type="text" id="names" name="name">
<label for="type">choose Pizza: </label>
<select name="type" id ="type" >
<option value="mar">mar</option>
<option value="hawaiin">hawaiian</option>
<option value="jo bhi">jo bhi</option>
</select>
<label for="type">choose base: </label>
<select name="base" id ="type" >
<option value="cheesy">cheesy</option>
<option value="garlic">garlic</option>
<option value="nona">nona</option>
</select>

<input type="submit" value = "order pizza">

</form>
<!-- <a href="/new">go back</a> -->
@endsection