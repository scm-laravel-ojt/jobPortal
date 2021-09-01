@extends('admin.admin-layout.master')

@section('admin-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{url('admin/categories/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus-circle mr-1"></i> Add New</a>
                <h4>All Categories</h4>
                <div class="table-responsive mt-4">
                    @if($message = Session::get('success'))
                        <div class="alert alert-info">
                            {{$message}}
                        </div>
                    @endif
                    <table class="table table-bordered shadow-md bg-white">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <form action="{{url('admin/categories/'.$category->id)}}" method="post">
                                        @csrf
                                        @method('delete')

                                        <a href="{{url('admin/categories/'.$category->id.'/edit')}}"  class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class="fa fa-pen"></i></a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')"><i class="fa fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
@endsection
