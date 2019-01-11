@extends('layouts.userBased',compact(['orgId'=>$orgId,'modules'=>$modules]))

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
                        <h3>Create Category</h3>
                    <form action="{{route('category.store')}}" method="post">
                           {{csrf_field()}}     
                        <legend></legend>
                             <div class="form-group">
                                 <label for="categoryName">Category Name</label>
                                 <input type="text" name="categoryName" placeholder="name of the category" class="form-control"/>
                                 @if($errors->any())
                                 <b style="color:red">{{$errors->first()}}</b>
                                 @endif
                             </div>                            
                            <input type="submit" class="btn btn-success"/>
                         </form>                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection