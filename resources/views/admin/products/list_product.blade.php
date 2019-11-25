@extends('admin.main')
@section('content')

<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
        List Product
    </div>
    <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
            <select class="input-sm form-control w-sm inline v-middle">
                <option value="0">...</option>
                <option value="1">...</option>
                <option value="2">...</option>
                <option value="3">...</option>
            </select>
            <button class="btn btn-sm btn-default">Apply</button>                
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
            <div class="input-group">
                <input type="text" class="input-sm form-control" placeholder="Search">
                <span class="input-group-btn">
                <button class="btn btn-sm btn-default" type="button">Go!</button>
                </span>
            </div>
        </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th> ID</th>
            <th>Name</th>
            <th>Category ID</th>
            <th>Product_slug</th>
            <th>Content</th>
            <th>Price</th>
            <th>Link</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Create At</th>
            <th>Update At</th>
            <th style="width:30px;" colspan="2">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($listProducts as $product)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td><span class="text-ellipsis">{{$product->id}}</span></td>
            <td><span class="text-ellipsis">{{$product->name}}</span></td>
            <td><span class="text-ellipsis">{{$product->category_id}}</span></td>
            <td><span class="text-ellipsis">{{$product->product_slug}}</span></td>
            <td><span class="text-ellipsis">{{$product->content}}</span></td>
            <td><span class="text-ellipsis">{{$product->price}}</span></td>
            <td><span class="text-ellipsis">{{$product->link}}</span></td>
            <td><span class="text-ellipsis">{{$product->quantity}}</span></td>
            <td><span class="text-ellipsis">{{$product->status}}</span></td>
            <td><span class="text-ellipsis">{{$product->created_at}}</span></td>
            <td><span class="text-ellipsis">{{$product->updated_at}}</span></td>
            <td>
              <a class="btn" href="{{route('edit-product',$product->id)}}">
                <button type="submit"><i class="fas fa-edit"></i></button>
              </a>
                @if (empty($product->deleted_at))
                    <form style="padding-left: 13px" action="{{route('delete-product', $product->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i style="width: 17px" class="fas fa-trash-alt"></i></button>
                      </form>
                @endif 
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection
