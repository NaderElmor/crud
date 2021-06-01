@extends('welcome')

@section('content')
    
        
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" name="name" > 
         
                <label for="price">Product Price</label>
                <input type="number" class="form-control" id="price" name="price">

                <input type="submit" value="save" class="btn btn-success"/>
            </div>
        </div>

    </form>
   
   
  </tbody>
</table>
@endsection

