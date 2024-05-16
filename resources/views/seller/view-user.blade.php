@extends('/layouts.seller-master')
@section('title', 'User Profile')


@section('content')
<div class="container-fluid">
    <?php $role = auth()->user()->role; ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">{{ __('Users information') }}</h1>

<div>
    <p class="mb-4 float-left"><b><i>{{ __('Personal Profile') }}</i></b></p>
    <a href="{{ url($role .'/edit/'.$user->id) }}" class="float-right"><b>Edit</b></a>
</div><br><br>


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-danger d-inline float-left"><b>{{ $user->name }}</b> -> Role: {{ $user->role }}</h2>
        <h6 class="d-inline float-right text-danger"><b><a href="{{ url($role .'/users') }}">{{ __('<-- Back') }}</a></b></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Name</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>{{ $user->position }}</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>{{ $user->office }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Joined On</th>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Last Update</th>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
            </table>
            <a href="{{ url($role .'/edit/' .$user->id) }}" class="btn btn-danger my-3 float-right"><b>Edit</b></a>
        </div>
    </div>
</div>

</div>
@endsection