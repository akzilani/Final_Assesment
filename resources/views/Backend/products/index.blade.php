@extends('Backend.master.master')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center py-2 px-3" style="background: rgb(46 57 78);">
        <div class="pe-3"><h5 class="text-white m-0">Admin Panel</h5></div>
        <div class="ms-auto">
            <a href="{{route('create')}}" class="btn btn-primary custom-head-link"> <i class="lni lni-circle-plus custom-head-link"></i> Create Product</a>
        </div>

    </div>
    <!--end breadcrumb-->

<table class="table">
    <thead>
        <th>#</th>
        <th>Name</th>
        <th>Category Name</th>
        <th>Brand Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Status</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($products as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->category_name}}</td>
            <td>{{$item->brand_name}}</td>
            <td>{{$item->description}}</td>
            <td><img src="{{asset($item->image)}}"style="width: 65px; alt=""></td>
            <td>{{$item->status}}</td>
            <td>
              <a href="{{route('edit',$item->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
              <a href="{{route('delete',$item->id)}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>


</table>
@endsection
