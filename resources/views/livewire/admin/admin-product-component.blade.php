<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Products</div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addProduct')}}" class="btn btn-success">Add New</a>
                            </div>
                        </div>

                    </div>
                    @if(\Illuminate\Support\Facades\Session::has('message'))
                        <div class="alert alert-danger">{{\Illuminate\Support\Facades\Session::get('message')}}</div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Stock</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><img src="{{asset('assets/images/products')}}/{{$item->image}}" width="60" alt=""></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->stock_status}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>{{$item->regular_price}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->created_at}}</td>
                                <td><a href="{{route('admin.editProduct',['product_slug' => $item->slug])}}"><i class="fa fa-edit fa-2x text-info"></i></a><a href="" wire:click.prevent="deleteProduct({{$item->id}})"><i class="fa fa-times fa-2x text-danger"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$products->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
