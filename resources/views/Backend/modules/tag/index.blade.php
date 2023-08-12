@extends('Backend.layouts.master');
@section('title', 'tag List')

@section('content')
<div class="container-fluid px-4">
    {{-- @if(session()->has('msg'))
        <div class="alert alert-{{ session('cls') }}">
            {{ session('msg') }}
        </div>
    @endif --}}
    {{-- dashboard header --}}
    <h1 class="text-primary">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">./Tag Panel</li>
    </ol>
    
    {{-- main content --}}
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between bg-primary p-2">
                    <h4 class="text-white mb-0">Tag List</h4>
                    <a href="{{route('tag.create')}}" class="btn btn-md btn-success">Add New Tag</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Order By</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$sl++}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>{{$tag->slug}}</td>
                                    <td>{{$tag->status == 1 ? 'Active' : 'Inactive'}}</td>
                                    <td>{{$tag->order_by}}</td>
                                    <td>{{$tag->created_at->toDayDateTimeString()}}</td>
                                    <td>{{$tag->created_at == $tag->updated_at ? 'Not Updated' : $tag->updated_at->toDayDateTimeString()}}</td>
                                    <td class="d-flex">
                                        {{-- show --}}
                                        <a href="{{route('tag.show', $tag->id)}}" 
                                           class="btn btn-sm btn-primary" 
                                           style="height:34px; padding-top:8px;">
                                                <i class="fa-solid fa-eye"></i>
                                        </a>
                                        {{-- edit --}}
                                        <a href="{{route('tag.edit', $tag->id)}}" 
                                           class="btn btn-sm btn-warning mx-1" 
                                           style="height:34px; padding-top:8px;">
                                                <i class="fa-solid fa-edit"></i>
                                        </a>
                                        {{-- delete --}}
                                        {!! Form::open([
                                            'method'=>'delete',
                                            'id'=>'form_'.$tag->id,
                                            'route'=>['tag.destroy', $tag->id]
                                            ]) 
                                        !!}
                                        {!! Form::button('<i class="fa-solid fa-trash"></i>', [
                                            'type'=>'button',
                                            'data-id'=> $tag->id, 
                                            'class'=>'delete btn btn-sm btn-danger', 
                                            'style'=>'height:34px; padding-top:6px;'
                                            ]) 
                                        !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                </div>
            </div>
        </div>
    </div>

</div>

@if (session('msg'))
    @push('js')
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            })
            Toast.fire({
                icon: '{{ session('cls') }}',
                title: '{{ session('msg') }}'
            })
        </script>
    @endpush
@endif

@push('js')
    <script>
    $('.delete').on('click', function(){
        let id = $(this).attr('data-id');
        Swal.fire({
            title: 'Are you sure to delete?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(`#form_${id}`).submit()
                $(this).Form.submit()
            } else {
                Swal.fire('Safe Data!')
            }
        })
    })


    </script>
@endpush

@endsection