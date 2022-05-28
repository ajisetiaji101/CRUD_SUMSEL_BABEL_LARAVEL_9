@extends('admin.components.maindas')
@section('dascontainer')
<div class="main-content flex flex-col flex-grow p-4">
    <h1 class="font-bold text-2xl text-gray-700">Add Client</h1>

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
        <form action="{{ url("/admin/client/add") }}" method="POST">
        @method('post')
        @csrf
        <div class="grid grid-cols-3 gap-4 px-5 py-3">
            <div class="">
                <div>
                    <label for="name" class="leading-8 font-light">Name</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="name" id="name" @error('name') is-invalid @enderror >
            </div>
            <div class="">
                <div>
                    <label for="nik" class="leading-8 font-light">NIK</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="nik" id="nik" @error('nik') is-invalid @enderror >
            </div>
            <div class="">
                <div>
                    <label for="address" class="leading-8 font-light">Address</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="address" id="address" @error('address') is-invalid @enderror >
            </div>
            <div class="">
                <div>
                    <label for="dob" class="leading-8 font-light">Date Of Birth</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="dob" id="dob" @error('dob') is-invalid @enderror value="{{ old('dob') }}" >
            </div>
            <div class="">
                <div>
                    <label for="sex" class="leading-8 font-light">Sex</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="sex" id="sex" @error('sex') is-invalid @enderror >
            </div>
            <div class="">
                <div>
                    <label for="mobilenumber" class="leading-8 font-light">Phone Number</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="mobilenumber" id="mobilenumber" @error('mobilenumber') is-invalid @enderror>
            </div>
            <div class="">
                <div>
                    <label for="no_rek" class="leading-8 font-light">No. Rekening</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="no_rek" id="no_rek" @error('no_rek') is-invalid @enderror  >
            </div>
            <div class="">
                <div>
                    <label for="nom_rek" class="leading-8 font-light">Nominal Rekening</label>
                </div>
                <input class="border-2 shadow-sm rounded-md w-full" type="text" name="nom_rek" id="nom_rek" @error('nom_rek') is-invalid @enderror  >
            </div>
        </div>
        <div class="mx-5">
            <button type="submit" class="bg-blue-500 px-4 py-2 rounded-md text-white hover:bg-blue-700">Save</button>
            <a href="{{ url("/admin/client") }}" class="bg-red-500 px-4 py-2 rounded-md text-white hover:bg-red-700">Cancel</a>
        </div>
        </form>
        </div>
    </div>
</div>


  
@endsection
