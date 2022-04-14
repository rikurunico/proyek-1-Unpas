@extends('layouts.main')

@section('container')
<div class="text-center">
    <br>
    <h3>My Dashboard</h3>
    <p>Selamat datang di halaman dashboard</p>
    <br>
</div>

{{-- <div class="row">
    <div class="col-sm-3">
        <img src="https://github.com/rikurunico/rikurunico.github.io/blob/master/assets/img/pic.png?raw=true" width="200" class="img-thumbnail rounded-circle">
    </div>
    <div class="col-md-6">
        @if (auth()->user())
        <h5>Nama  : {{ auth()->user()->name }}</h5>
        <h5>Email : {{ auth()->user()->email }}</h5>
        @else
        <h3>Welcome to my blog</h3>
        @endif
    </div>

</div> --}}
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
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username</label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="{{ auth()->user()->name }}">
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{ auth()->user()->email }}">
                        </div>
                        <button class="btn btn-primary" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
