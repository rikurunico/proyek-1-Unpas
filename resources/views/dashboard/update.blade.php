@extends('layouts.main')

@section('container')
<div class="text-center">
    <br>
    <h3>My Dashboard</h3>
    <p>Selamat datang di halaman dashboard</p>
    <br>
</div>
<div class="container-xl px-4 mt-4">
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="https://github.com/rikurunico/rikurunico.github.io/blob/master/assets/img/pic.png?raw=true" width="200" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="{{ url("dashboard/update/" .auth()->user()->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="small mb-1" for="Username">Username</label>
                            <input name="Username" class="form-control" value="{{ auth()->user()->username }}">
                        </div>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">name</label>
                            <input name="Name" class="form-control" value="{{ auth()->user()->name }}">
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input name="Email" class="form-control"value="{{ auth()->user()->email }}">
                        </div>
                        <button class="btn btn-primary" type="submit" >Edit Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
