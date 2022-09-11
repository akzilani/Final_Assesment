@extends('Backend.master.master')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label"> Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Category Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="category_name" value="{{old('category_name')}}">
                    <span class="text-danger">{{$errors->first('category_name')}}</span>

                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Brand Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="brand_name" value="{{old('brand_name')}}">
                    <span class="text-danger">{{$errors->first('brand_name')}}</span>

                </div>

                {{-- <div class="col-12 col-md-6 py-2">
                    <label> Product Category</label>
                    <select name="category_id" class="form-control" id="">
                        <option value="">Select</option>
                        @foreach ( $category as $item )
                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach

                    </select>

                    <small class="form-text text-danger">{{ $errors->first('category_id') }}</small>

                </div> --}}

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Status <span class="text-danger">*</span></label>
                    <select class="form-control" name="status" id="">
                        <option value="1">Active</option>
                        <option value="2">Deactive</option>
                    </select>
                    <span class="text-danger">{{$errors->first('active_price')}}</span>
                </div>

                <div class="col-12 col-md-6 py-2">
                    <label for="" class="form-label">Image <span class="text-danger">*</span></label>
                    <input type="file" class="form-control" name="image">
                    <span class="text-danger">{{$errors->first('image')}}</span>

                </div>

                <div class="col-12  py-2">
                    <label for="" class="form-label">Description <span class="text-danger">*</span></label>
                   <textarea name="description" id="" cols="30" rows="10" class="form-control summernote">{{old('description')}}</textarea>
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
