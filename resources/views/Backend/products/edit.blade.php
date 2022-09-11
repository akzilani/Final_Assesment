@extends('Backend.master.master')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{route('update',$products->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label"> Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{$products->name}}">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Category Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="category_name" value="{{$products->category_name}}">
                    <span class="text-danger">{{$errors->first('category_name')}}</span>

                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="image">
                    <span class="text-danger">{{$errors->first('image')}}</span>

                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Status <span class="text-danger">*</span></label>
                    <select class="form-control" name="status" id="">
                        <option value="1">Active</option>
                        <option value="2">Inacive</option>
                    </select>
                    <span class="text-danger">{{$errors->first('status')}}</span>
                </div>


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Brand Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="brand_name" value="{{$products->brand_name}}">
                    <span class="text-danger">{{$errors->first('brand_name')}}</span>

                </div>


                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Description <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="description" value="{{$products->description}}">
                    <span class="text-danger">{{$errors->first('description')}}</span>

                </div>

                <div class="col-12 text-center mt-5">
                    <a href="" class="btn btn-warning" style="margin-right: 20px;">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create</button>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection
