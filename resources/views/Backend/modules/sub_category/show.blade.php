@extends('Backend.layouts.master');
@section('title', 'Single Sub Category')

@section('content')
<div class="container-fluid px-4">
    {{-- dashboard header --}}
    <h1 class="text-primary">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">./Sub Category Page</li>
    </ol>

    {{-- main content --}}
    <div class="row mt-5">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between bg-primary p-2">
                    <h4 class="text-white mb-0">Single Sub Category</h4>
                    <a href="{{route('sub-category.index')}}" class="btn btn-md btn-dark">Back</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{$subCategory->name}}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{$subCategory->slug}}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{$subCategory->category?->name}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$subCategory->status == 1 ? 'Active' : 'Inactive'}}</td>
                            </tr>
                            <tr>
                                <th>Order By</th>
                                <td>{{$subCategory->order_by}}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{$subCategory->created_at->toDayDateTimeString()}}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{$subCategory->created_at == $subCategory->updated_at ? 'Not Updated' : $subCategory->updated_at->toDayDateTimeString()}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection