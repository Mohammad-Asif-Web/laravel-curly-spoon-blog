@extends('Backend.layouts.master');
@section('title', 'Single tag')

@section('content')
<div class="container-fluid px-4">
    {{-- dashboard header --}}
    <h1 class="text-primary">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">./Tag Panel</li>
    </ol>

    {{-- main content --}}
    <div class="row mt-5">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between bg-primary p-2">
                    <h4 class="text-white mb-0">Single Tag</h4>
                    <a href="{{route('tag.index')}}" class="btn btn-md btn-dark">Back</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th>Name</th>
                                <td>{{$tag->name}}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{$tag->slug}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$tag->status == 1 ? 'Active' : 'Inactive'}}</td>
                            </tr>
                            <tr>
                                <th>Order By</th>
                                <td>{{$tag->order_by}}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{$tag->created_at->toDayDateTimeString()}}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{$tag->created_at == $tag->updated_at ? 'Not Updated' : $tag->updated_at->toDayDateTimeString()}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection