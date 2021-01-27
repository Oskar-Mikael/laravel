@extends('products.layout')
  
@section('content')
<div class="container form">
        <h1>
            Add a new item to the list
        </h1>
    </div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   <section class="container form">
<form action="{{ route('products.store') }}" method="POST">
    @csrf
                
                <input type="text" name="name" class="form-control" placeholder="Todo">
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Info"></textarea>
                <button type="submit" class="submit form">Submit</button>
</form>
   </section>
   <a href="{{ route('products.index') }}">
        <button class="cancel form">
            Cancel
        </button>
    </a>
@endsection