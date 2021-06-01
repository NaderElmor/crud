@extends('welcome')

@section('content')

<a href="{{route('products.create')}}" class="btn btn-primary" style="margin:20px"><i class="fas fa-solid  fa-plus"> </i> Create a product <a/>
<table class="table table-hover" >
  <thead class="thead-dark ">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Created</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>

    @foreach($products as $index => $product)
        <tr>
            <th scope="row">{{ ++$index }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->created_at }}</td>
            <td>
                <a class="btn btn-danger" href="{{route('products.destroy', $product->id) }}"> <i class="fa fa-trash"></i></a>
                <a class="btn btn-success" href="{{route('products.edit', $product->id) }}"> <i class="fa fa-edit"></i></a>
            </td>

        </tr>
    @endforeach
   
  </tbody>
</table>

@endsection