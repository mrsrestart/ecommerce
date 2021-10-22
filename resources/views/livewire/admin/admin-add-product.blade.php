<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">Add Product</div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success">All Products</a>
                            </div>
                        </div>

                    </div>
                    @if (\Illuminate\Support\Facades\Session::has('message'))
                        <div class="alert-success alert" role="alert">{{\Illuminate\Support\Facades\Session::get('message')}}</div>
                    @endif
                    <form action="" class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent = "addProduct">
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Product Name</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="Product Name" class="form-control input-md" wire:model="name" wire:keyup="generateSlug">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Product Slug</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="Product Slug" class="form-control input-md" wire:model="slug">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Short Description</label>
                            <div class="col-md-8">
                                <textarea  placeholder="Short Description" class="form-control input-md" wire:model="short_description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Description</label>
                            <div class="col-md-8">
                                <textarea  placeholder="Description" class="form-control input-md" wire:model="description"></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Regular Price</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="Regular Price" class="form-control input-md" wire:model="regular_price">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Sale Price</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="Sale Price" class="form-control input-md" wire:model="sale_price">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">SKU</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">STOCK</label>
                            <div class="col-md-8">
                                <select class="form-control" wire:model="stock_status">
                                    <option value="instock">InStock</option>
                                    <option value="outofstock">Out Of Stock</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Featured</label>
                            <div class="col-md-8">
                                <select class="form-control" wire:model="featured">
                                    <option value="0">NO</option>
                                    <option value="1">YES</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Quantity</label>
                            <div class="col-md-8">
                                <input type="text" placeholder="Quantity" class="form-control input-md" wire:model="quantity">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Image</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control input-file" wire:model="image">
                                @if ($image)
                                    <img src="{{$image->temporaryUrl();}}" width="120">
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Featured</label>
                            <div class="col-md-8">
                                <select class="form-control" wire:model="category_id">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
