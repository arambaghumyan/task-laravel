@extends('layouts.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Categories</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{route('categories.create')}}" class="btn btn-success">Add Category</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($categories as $category)
                                    <tr class="odd gradeX">
                                        	<td>{{$category->name}}</td>
                                        <td>
                                        	<a href="{{route('categories.edit', $category->id)}}" class="btn btn-info">Edit</a>
                                        	<form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                        	    {{ method_field('DELETE') }}
                                        	    {{ csrf_field() }}
                                        	    <button class="btn btn-danger">Delete</button>
                                        	</form>
                                        </td>
                                    </tr>
                                	@endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection