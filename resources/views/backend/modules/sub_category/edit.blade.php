@extends('backend.layout.master')
@section('page_title', 'Sub Category')
@section('page_sub_title', 'Update')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header ">
                    <h4 class="mb-0"> Update Sub Category</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {!! Form::model($subCategory,  ['method' => 'put', 'route'=> ['sub-category.update', $subCategory->id]]) !!}
                        @include('backend.modules.sub_category.form')
                    {!! Form::button('Update Sub Category', ['type' => 'submit', 'class' => 'btn btn-primary mt-3']) !!}
                   

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @push('customjs')
        <script>
            $('#name').on('input', function() {
                let name = $(this).val();
                let slug = name.replaceAll(' ', '-')
                $('#slug').val(slug.toLowerCase());
            });
        </script>
    @endpush

@endsection
