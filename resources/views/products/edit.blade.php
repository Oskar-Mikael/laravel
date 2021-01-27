@extends('products.layout')
   
@section('content')
<div class="container form">
        <h1>
            Update item on the list
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
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Todo">
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Info">{{ $product->detail }}</textarea>
                    <label for="status" class="form">Status</label>
                <select name="done">
                    <option value="" name="select" hidden>Select the item's status</option>
                    <option value="In progress">In progress</option>
                    <option value="Not finished">Not finished</option>
                    <option value="Finished">Finished</option>
                </select>
              <button type="submit" class="submit form">Submit</button>
    </form>
    </section>
    <a href="{{ route('products.index') }}">
        <button class="cancel form">
            Cancel
        </button>
    </a>
@endsection