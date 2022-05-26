@extends('components.main')
@section('container')
<div class="grid grid-cols-2">
    <div 
    {{-- style="background-image: url('{{ asset('images/background1.jpg') }}'); background-repeat: no-repeat; background-size:cover" --}}
    class=" relative">
    <div style="background-image: url('{{ asset('images/background1.jpg') }}'); background-repeat: no-repeat; background-size:cover" class="h-screen"></div>
        <div class=" absolute top-40 left-6">
            <div class=" text-blue-500 font-bold text-4xl">
                <img src="{{ asset('images/logo1.png') }}" class="w-32">
                <h1 class="leading-10">Wellcome to</h1>
                <p class="leading-10">PT. Bank Sumsel Babel</p>
            </div>
        </div>
    </div>
    <div>
        <div class="flex justify-center items-center h-screen bg-blue-500">
            <form action="{{ url('/login') }}" method="post">
            <div class="grid grid-cols-1 gap-4 bg-white p-20 rounded-lg shadow-lg">
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
                <span class="text-gray-600 uppercase font-extrabold">Sign In</span>
					@csrf
                <div>
                    <h1 class="leading-10 text-gray-600">Email Address</h1>
                    <input id="email" name="email" type="email" class="form-input px-4 rounded-lg border-2" placeholder="Youremail@email.com">
                </div>
                <div>
                    <h1 class="leading-10 text-gray-600">Password</h1>
                    <input id="password" name="password" type="password" class="form-input px-4 rounded-lg border-2" placeholder="******">
                </div>
                <button type="submit" class="p-3 bg-blue-500 rounded-lg text-white hover:bg-blue-700">LOGIN</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection