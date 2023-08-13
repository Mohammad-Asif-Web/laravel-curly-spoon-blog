@extends('Backend.layouts.master');
@section('title', 'Create post')

@section('content')
<div class="container-fluid px-4">
    {{-- dashboard header --}}
    <h1 class="text-primary">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">./Post Panel</li>
    </ol>
    {{-- charts --}}
    <div class="row mt-5">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between bg-success p-2">
                    <h4 class="text-white mb-0">Create Post</h4>
                    <a href="{{route('post.index')}}" class="btn btn-md btn-primary">Posts List</a>
                </div>
                <div class="card-body">
                    @if($errors->any())
                        <ul class="alert alert-danger ps-4">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    {!! Form::open(['method'=>'post', 'route'=>'post.store']) !!}

                    {!! Form::label('name', 'Title', ['class'=>'mb-2']) !!}
                    {!! Form::text('name', null, ['id'=>'name', 'class'=>'form-control mb-3', 'placeholder'=>'Enter post title']) !!}
    
                    {!! Form::label('slug', 'Slug', ['class'=>'mb-2']) !!}
                    {!! Form::text('slug', null, ['class'=>'form-control mb-3', 'placeholder'=>'Enter post slug']) !!}
      
                    {!! Form::label('status', 'Status', ['class'=>'mb-2']) !!}
                    {!! Form::select('status', [1 =>'Active', 0 =>'Inactive'], null, ['class'=>'form-select mb-3', 'placeholder'=>'Select post status']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('category', 'Select Category', ['class'=>'mb-2']) !!}
                            {!! Form::select('category', $categories, null, ['class'=>'form-select mb-3', 'placeholder'=>'Select category']) !!}
                        </div>
                        <div class="col-md-6">
                            {!! Form::label('sub_category', 'Select Sub Category', ['class'=>'mb-2']) !!}
                            <select id="sub_category" name="sub_category" class="form-select mb-3">
                                <option selected>Select sub category</option>
                            </select>
                        </div>
                    </div>
                    
                    {!! Form::button('Create Post', ['type'=>'submit', 'class'=>'btn btn-success']) !!}
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

    // axios code
    $('#category').on('change', function(){
        let category_id = $(this).val()
        let subCategoryItems = $('#sub_category');
        let sub_categories;

        // it will get the default domain name used in url; ex:http://127.0.0.1:8000
        let domainName = window.location.origin;

        // use used empty() because of, the last data we have selected from the dropdown
        //  must be lost, otherwise every items will be seen in the dropdown
        subCategoryItems.empty();
        subCategoryItems.append(`<option>Select sub category</option>`)
        axios.get(domainName+'/dashboard/get-subcategory/'+category_id).then(res=>{
            sub_categories = res.data;

            // the all data are stored in sub_categories by array format. so we have to use this
            // array value by array built in function 'map()'. so that we can get the each single data
            // console.log(sub_categories);
            sub_categories.map((subItem, index)=>{
                subCategoryItems.append(`<option value='${subItem.id}'>${subItem.name}</option>`)
            })
        })
    })

</script>
@endpush



@endsection