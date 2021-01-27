@extends('products.layout')
 
@section('content')
<header class="container">
        <div class="header-text">
            <h1>
                U04 To do Application
            </h1>
            <h2>
                Welcome to the To Do App
            </h2>
            <h3>
                Feel free to create, read, update, and delete items on the to do list.
            </h3>
        </div>
    </header>
   
    @if ($message = Session::get('success'))
        <div class="alert form container alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   <section class="container form">
    <table>
            <tr>
                <th> Id</th>
                <th>Todo</th>
                <th>Info</th>
                <th>Status</th>
                <th></th>
                <th></th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->done }}</td>
            <td class="update-button"><a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a></td>
            <td class="delete-button">
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
                    <button onclick="return confirm('Are you sure you want to delete this item?')" type="submit" class="delete-button" name="delete">Delete</button>
</td>
                </form>
            </td>
            <td>{{ $product->created_at }}</td>
            <td>{{ $product->updated_at }}</td>
        </tr>
        @endforeach
    </table>
   </section>
   <div class="container form">
    <a href="{{ route('products.create') }}">
            <button class="submit form" type="submit">
                Create item
            </button>
        </a>
    </div>

  <div style="text-align:center;margin-top:2rem;">
    {!! $products->links() !!}
  </div>
@endsection