@extends('admin.components.maindas')
@section('dascontainer')
<div class="main-content flex flex-col flex-grow p-4">
    <h1 class="font-bold text-2xl text-gray-700">Debit / Kredit Client</h1>

    <div class="flex flex-col flex-grow bg-white rounded mt-4">
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
        @foreach ($result as $data)
        <form action="{{ $data->id }}" method="POST">
            @method('put')
            @csrf
        <div class="bg-white overflow-hidden sm:rounded-lg">
            <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Name</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" class="rounded-md border-2 border-gray-500 bg-gray-300  w-full cursor-not-allowed" id="name" name="name" @error('name') is-invalid @enderror value="{{ old('name', $data->name) }}" disabled>
                </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">NIK</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" class="rounded-md border-2 border-gray-500 bg-gray-300  w-full cursor-not-allowed" id="nik" name="nik" @error('nik') is-invalid @enderror value="{{ old('nik', $data->nik) }}" disabled>
                </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Nomor Rekening</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" class="rounded-md border-2 border-gray-500 bg-gray-300 w-full cursor-not-allowed" id="no_rek" name="no_rek" @error('no_rek') is-invalid @enderror value="{{ old('no_rek', $data->no_rek) }}" disabled>
                </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Nominal Rekening</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" class="rounded-md border-2 border-gray-500 bg-gray-300 w-full cursor-not-allowed" id="nom_rek" name="nom_rek" @error('nom_rek') is-invalid @enderror value="@currency($data->nom_rek)" disabled>
                </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Debit</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" class="rounded-md border-2 border-gray-500 w-full" id="debit" name="debit" @error('debit') is-invalid @enderror>
                </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Kredit</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                    <input type="text" class="rounded-md border-2 border-gray-500 w-full" id="kredit" name="kredit" @error('kredit') is-invalid @enderror>
                </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded-md hover:bg-blue-700">Save</button>
                        <a href="{{ url('/admin/money') }}" class="bg-red-500 text-white px-3 py-2 rounded-md hover:bg-red-700">Cancel</a>
                    </dt>
                </div>
            </dl>
            </div>
        </div>
        </form>
        @endforeach
    </div>
</div>
@endsection