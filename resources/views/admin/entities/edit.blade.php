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
                        <h3>Edit Entity</h3>
                        {!! Form::model($entity, ['route' => [ 'entity.update', $entity->id ], 'method'=>'PUT', 'id' => 'entity-edit-form']) !!}
                        
                        {{csrf_field()}} 
                        <legend></legend>                            
                             <div class="form-group">
                                    <label for="Name">Entity Name</label>
                             <input type="text" name="Name" placeholder="Entity name" value="{{$entity->Name}}" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="display_name">Entity Display Name</label>
                                <input type="text" name="display_name" placeholder="Entity display name" value="{{$entity->display_name}}" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="entityActive">Is active</label>
                                @if($entity->is_active == true)
                                <input type="checkbox" name="active"  checked/>
                                @else
                                <input type="checkbox" name="active" />
                                @endif
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