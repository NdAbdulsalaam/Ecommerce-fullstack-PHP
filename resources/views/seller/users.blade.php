
@extends('layouts.seller-master')
@section('title', 'Users Information')


@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">{{ __('Users information') }}</h1>
<p class="mb-4"><b><i>{{ __('Users Personal') }}</i></b></p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-danger d-inline float-left"><b>{{ __('Nuyola Market') }}</b></h6>
        <a href="{{ url('') }}"><button class="btn btn-danger float-right"><i class="fa fa-plus mr-2"></i>{{ __('Add User') }}</button></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Joined On</th>
                        <th>Last Update</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Joined On</th>
                        <th>Last Update</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td><a href="{{ route('seller.view-profile', $user->id ) }}" class="fa fa-eye text-danger mr-3"></a> <a href="#" class="fa fa-trash text-danger"></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection