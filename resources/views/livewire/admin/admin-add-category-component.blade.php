<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">Add New Category</div>
                            <div class="col-md-6">
                                <a href="{{route('admin.categories')}}" class="btn btn-info">All Categories</a>
                            </div>
                        </div>

                    </div>
                    <div class="panel-body">
                        @if (\Illuminate\Support\Facades\Session::has('message'))
                            <div class="alert alert-success">{{ \Illuminate\Support\Facades\Session::get('message') }}</div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="storeCategory">
                            <div class="form-group">
                                <label for="catName" class="col-md-4 control-label">Name</label>
                                <div class="col-md-4">
                                    <input type="text" name="catName" id="catName" class="form-control input-md" wire:model="catName" wire:keyup = "generateSlug">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-md-4 control-label">slug</label>
                                <div class="col-md-4">
                                    <input type="text" name="slug" id="slug" class="form-control input-md" wire:model="slug">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="submit" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <input type="submit" name="submit" id="submit" class="form-control btn btn-success">
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

