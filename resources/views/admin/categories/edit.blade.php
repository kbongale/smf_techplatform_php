@extends('layouts.userBased')

@section('content')
<div class="container">
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" style="padding-left:50px;padding-top:40px;padding-bottom:75px;">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3>Edit Category</h3>
                        {!! Form::model($category, ['route' => [ 'category.update', $category->id ], 'method'=>'PUT', 'id' => 'entity-edit-form']) !!}
                        
                        {{csrf_field()}} 
                        <legend></legend>                            
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" name="Name" placeholder="Category name" value="{{$category->name}}" class="form-control"/>
                            </div>

                            <div class="form-group">
                                    <label for="categoryType">Type</label>
                                    <select name="categoryType" class="form-control">
                                            <option value="0"></option>
                                            <option value="Form" @if($category->type === "Form") selected="selected" @endif> Form </option>                                            
                                            <option value="Reports" @if($category->type === "Reports") selected="selected" @endif> Reports </option>                                                                                                                                           
                                    </select>                                       
                            </div>   

                            <input type="submit" class="btn btn-primary btn-user btn-block"/>
                    
                        {!! Form::close() !!} 
                        
                </div>
            </div>
        </div>
       
    </div>
    </div>
    </div>
</div>
@endsection