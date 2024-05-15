@include('dashboard.partials.title')
@include('dashboard.partials.sidebar')
@include('dashboard.partials.navbar')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('update_profile') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="{{ Auth::check() ? '********' : '' }}">
                                </div>
                            </div>
                            <div class="col-md-10 pr-1">
                                <div class="form-group">
                                    <label for="quotes">About You</label>
                                    <textarea class="form-control" id="quotes" name="quotes" rows="5">{{ Auth::user()->quotes }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="gambar_akun" class="badge badge-warning" style="font-size: 12px; color: white;">Change Profile Picture</label>
                                    <input type="file" class="form-control" id="gambar_akun" name="gambar_akun" accept="image/*">
                                </div>
                            </div>

                            <div class="col-md-3 pr-1">
                                <div class="form-group">
                                    <label for="gambar_latar" class="badge badge-warning"style="font-size: 12px; color: white;"> Change Background Profile</label>
                                    <input type="file" class="form-control" id="gambar_latar" name="gambar_latar" accept="image/*">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-3 pr-1">
                                <button type="submit" class="btn btn-success tombol">Update Profile</button>
                            </div>

                            <div class="col-md-3 pr-1"">
                                <form id="logout-form" action="{{ route('hapusakun') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger tombol">&#128465; Delete Account</button>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    @if (Auth::check())
                        <a id="changeBackground">
                            <img class="background-image" src="{{ asset('storage/user_backgrounds/' . Auth::user()->gambarlatar ) }}" alt="...">
                        </a>
                    @endif
                </div>
                <div class="card-body">
                    <div class="author">
                        <a  id="changeAvatar">
                            @if (Auth::check())
                                <img class="avatar border-gray" src="{{ asset('storage/user_images/' . Auth::user()->gambarakun) }}" alt="...">
                                <h5 class="title">{{ Auth::user()->name }}</h5>
                            @endif
                        </a>
                        @if (Auth::check())
<!-- Check if user is logged in -->
<p class="description text-center">
"{{ Auth::user()->quotes }}"
</p>
@endif <!-- End if -->

<style>
    /* Mengatur ukuran tombol */
    .tombol {

        padding: 8px 16px; /* Padding tombol (atas/bawah, kiri/kanan) */
        width: 140px; /* Lebar tombol dalam piksel */
    }
</style>
