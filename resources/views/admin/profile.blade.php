@extends('admin.layouts.app')

@section('page_heading', 'Edit Profile')

@section('page_link')
    <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
@endsection

@section('page_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                @if (Auth::user()->photo == NULL)
                                <img alt="image" src="{{ asset('uploads/default.png') }}" class="profile-photo w_100_p">
                                @else 
                                    <img alt="image" src="{{ asset('uploads/.Auth::user()->photo') }}" class="profile-photo w_100_p">
                                @endif
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="name" value="John Doe">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email *</label>
                                    <input type="text" class="form-control" name="email" value="john@gmail.com">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Retype Password</label>
                                    <input type="password" class="form-control" name="retype_password">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection