@extends('adminlte::layouts.app')

@section('contentheader_title')
	Users
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">
                <div class="box box-primary">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-users table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $everyUser)
                                    <tr>
                                        <td>{!! $everyUser->id !!}</td>
                                        <td>{!! $everyUser->name !!}</td>
                                        <td>{!! $everyUser->email !!}</td>
                                        <td><a class="btn btn-block btn-success" href="{!! route('admin.users.edit', [$id = $everyUser->id]) !!}">Edit</a></td>
                                        <td><a class="btn btn-block btn-danger" href="{!! route('admin.users.delete', [$id = $everyUser->id]) !!}">Delete</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@if(false)
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Example box</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            Put your content here
        </div>
        <!-- /.box-body -->
    </div>
@endif
