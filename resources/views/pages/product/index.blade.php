@extends('layouts.master')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{route('products.create')}}" class="btn btn-success">Add Product</a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>User</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($products as $product)
                                    <tr class="odd gradeX">
                                        	<td>
                                                @if(!is_null($product->image))
                                                    <img src="{{asset('images/'.$product->image)}}" style="display: block;margin: 0 auto;" height="80">
                                                @endif
                                            </td>
                                            <td>{{$product->title}}</td>
                                            <td>{{$product->user->name}}</td>
                                            <td>{{$product->category->name}}</td>
                                            <td>{{$product->amount}}</td>
                                            <td>{{$product->description}}</td>
                                        <td>
                                        	<a href="{{route('products.edit', $product->id)}}" class="btn btn-info">Edit</a>
                                        	<form action="{{ route('products.destroy', $product->id) }}" method="POST">
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