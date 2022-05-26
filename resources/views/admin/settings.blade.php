@extends('admin.components.maindas')
@section('dascontainer')
<div class="main-content flex flex-col flex-grow p-4">
    <h1 class="font-bold text-2xl text-gray-700">Settings</h1>

    <div class="flex flex-col flex-grow bg-white rounded mt-4">
        <div>
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        <form action="{{ url("/admin/settings/edit") }}" method="POST">
        @method('put')
        @csrf
        @foreach ( $result as $data )
        <div class="grid grid-cols-3 gap-4 px-5 py-3">
            <div class="">
                <div>
                    <label for="name" class="leading-8 font-light">Name</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="name" id="name" value="{{ old('name', $data->name) }}" @error('name') is-invalid @enderror value="{{ old('name') }}" >
            </div>
            <div class="">
                <div>
                    <label for="nik" class="leading-8 font-light">NIK</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="nik" id="nik" value="{{ old('nik', $data->nik) }}" @error('nik') is-invalid @enderror value="{{ old('nik') }}" >
            </div>
            <div class="">
                <div>
                    <label for="address" class="leading-8 font-light">Address</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="address" id="address" value="{{ old('address', $data->address) }}" @error('address') is-invalid @enderror value="{{ old('address') }}" >
            </div>
            <div class="">
                <div>
                    <label for="dob" class="leading-8 font-light">Date Of Birth</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="dob" id="dob" value="{{ old('dob', $data->dob) }}" @error('dob') is-invalid @enderror value="{{ old('dob') }}" >
            </div>
            <div class="">
                <div>
                    <label for="sex" class="leading-8 font-light">Sex</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="sex" id="sex" value="{{ old('sex', $data->sex) }}" @error('sex') is-invalid @enderror value="{{ old('sex') }}" >
            </div>
            <div class="">
                <div>
                    <label for="mobilenumber" class="leading-8 font-light">Phone Number</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="mobilenumber" id="mobilenumber" value="{{ old('mobilenumber', $data->mobilenumber) }}" @error('mobilenumber') is-invalid @enderror value="{{ old('mobilenumber') }}" >
            </div>
            <div class="">
                <div>
                    <label for="level" class="leading-8 font-light">Level</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full bg-gray-200 cursor-not-allowed" type="text" name="level" id="level" value="{{ old('level', $data->level) }}" @error('level') is-invalid @enderror value="{{ old('level') }}"  disabled>
            </div>
            <div class="">
                <div>
                    <label for="email" class="leading-8 font-light">Email</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="email" name="email" id="email" value="{{ old('email', $data->email) }}" @error('email') is-invalid @enderror value="{{ old('email') }}" >
            </div>
            <div class="">
                <div>
                    <label for="password" class="leading-8 font-light">Password</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="password" name="password" id="password" placeholder="**************" @error('password') is-invalid @enderror value="{{ old('password') }}" required>
            </div>
            <div class="">
                <button type="submit" class="bg-blue-500 px-4 py-2 rounded-md text-white hover:bg-blue-700">Save</button>
            </div>
        </div>
        @endforeach
        </form>
        </div>
    </div>
</div>


  
@endsection
