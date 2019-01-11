@extends('layouts.userBased')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                       <div class="row">
                        <h3 class="col-md-9">Projects</h3>
                        <div class="col">
                                <a class ="btn btn-success"href="/{{$orgId}}/project/create">Project   <i class="fas fa-plus"></i></a>
                        </div>
                        </div>
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                            @forelse($projects as $project)
                                <tr>
                                    <td>{{$project->name}}</td>
                                    <td> <div class="actions">
                                            <a class="btn btn-primary" href={{route('project.edit',$project->id)}}><i class="fas fa-pen"></i></a>
                                        {!!Form::open(['action'=>['ProjectController@destroy',$project->id],'method'=>'DELETE','class'=>'pull-right' ])!!}
                                            
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                         {!!Form::close()!!}
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr><td>no Projects</td></tr>
                            @endforelse
                        </table>   
                        
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection