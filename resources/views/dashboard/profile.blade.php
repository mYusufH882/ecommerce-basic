@extends('layouts.dashboard')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Data Profile</h4>
                    <form class="forms-sample">
                        <div class="form-group row justify-content-center">
                            <img src="{{asset('assets/star-admin2/template/images/faces/profile/profile.jpg')}}"
                                alt="{{auth()->user()->name}}" class="w-25">
                        </div>
                        <div class="form-group row">
                            <label for="InputUsername" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="InputUsername" placeholder="Username"
                                    value="{{auth()->user()->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmail2" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email"
                                    value="{{auth()->user()->email}}">
                            </div>
                        </div>
                        {{-- <button type="submit" class="btn btn-primary me-2">Submit</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection