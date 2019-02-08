@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3>Edit Role</h3>

                        {!! Form::model($role, ['route' => [ 'role.update', $role->id ], 'method'=>'PUT', 'id' => 'role-edit-form']) !!}
                        
                        {{csrf_field()}} 
                        <legend></legend>
                             <div class="form-group">
                                    <label for="display_name">Role Name</label>
                                    <input type="text" name="display_name" placeholder="Display Name"class="form-control" value="{{$role->display_name}}"/>
                            </div>
                             <div class="form-group">
                                <label for="description">Description</label>
                                 <input type="text" name="description" placeholder="description"class="form-control"value="{{$role->description}}"/>
                            </div>
                            <div class="form-group sub-con">
                            <div class="form-group" >
                                <h4>Organisation</h4>
                                <select name="org_id" id ="orgidedit" class="form-control">
                                    @foreach($orgs as $org)
                                        <option value={{$org->id}}  {{ ($org->id===$role->org_id) ?"selected":""}}>{{strtoupper($org->name)}}</option>
                                    @endforeach 
                                </select>
                                <br/>
                                <h4>Projects</h4>
                                <select name="project_id" id="project_id" class="form-control">
                                    @foreach($projects_arr as $proj_arr)
                                        <?php $selected_attrb_flag = false; ?>
                                        @if($proj_arr['_id'] == $project_id)
                                            <?php $selected_attrb_flag = true; ?>
                                        @endif
                                        <option value="{{$proj_arr['_id']}}" {{ $selected_attrb_flag ? "selected":""}}>{{$proj_arr['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <input type="submit" class="btn btn-success"/>
                       {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection