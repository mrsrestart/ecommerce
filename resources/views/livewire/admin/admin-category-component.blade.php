<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Categories</div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addCategory')}}" class="btn btn-success">Add New</a>
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
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->slug}}</td>
                                <td><a href="{{route('admin.editCategory' , ['categorySlug' =>$item->slug])}}" class="btn btn-info">Edit</a><a href="#" class="btn btn-danger" wire:click.prevent="deleteCategory({{$item->id}})">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$categories->links()}}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
