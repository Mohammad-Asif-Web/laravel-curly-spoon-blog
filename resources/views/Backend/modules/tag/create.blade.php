@extends('Backend.layouts.master');
@section('title', 'Create Tag')

@section('content')
<div class="container-fluid px-4">
    {{-- dashboard header --}}
    <h1 class="text-primary">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">./Tag Panel</li>
    </ol>
    {{-- charts --}}
    <div class="row mt-5">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between bg-success p-2">
                    <h4 class="text-white mb-0">Create tag</h4>
                    <a href="{{route('tag.index')}}" class="btn btn-md btn-primary">tag List</a>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <ul class="alert alert-danger ps-4">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    {!! Form::open(['method'=>'post', 'route'=>'tag.store']) !!}

                    {!! Form::label('name', 'Name', ['class'=>'mb-2']) !!}
                    {!! Form::text('name', null, ['id'=>'name', 'class'=>'form-control mb-3', 'placeholder'=>'Enter tag name']) !!}
    
                    {!! Form::label('slug', 'Slug', ['class'=>'mb-2']) !!}
                    {!! Form::text('slug', null, ['id'=>'slug', 'class'=>'form-control mb-3', 'placeholder'=>'Enter tag slug']) !!}
    
                    {!! Form::label('order_by', 'Tag Serial', ['class'=>'mb-2']) !!}
                    {!! Form::number('order_by', null, ['class'=>'form-control mb-3', 'placeholder'=>'Enter tag serial']) !!}
    
                    {!! Form::label('status', 'Tag Status', ['class'=>'mb-2']) !!}
                    {!! Form::select('status', [1 =>'Active', 0 =>'Inactive'], null, ['class'=>'form-select mb-3', 'placeholder'=>'Select tag status']) !!}
    
                    {!! Form::button('Create tag', ['type'=>'submit', 'class'=>'btn btn-success']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    $('#name').on('input', function(){
        let nameVal = $(this).val()
        let slug = nameVal.replaceAll(' ', '-')
        $('#slug').val(slug.toLowerCase());
    })
</script>
@endpush



@endsection