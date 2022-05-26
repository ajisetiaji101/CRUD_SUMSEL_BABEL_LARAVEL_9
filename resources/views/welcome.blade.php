@extends('components.main')
@section('container')
<div style="background-image: url('{{ asset('images/background3.jpg') }}'); background-repeat: no-repeat; background-size:cover" class="overflow-hidden">
    @include('components.navbar')
    <div class="flex justify-center items-center h-screen">
        <div class="text-center -mt-44 font-bold text-4xl text-blue-500">
            <h1 class="leading-10">SISTEM INFORMASI DATA NASABAH</h1>
            <h2 class="leading-10">PT.BANK SUMSEL BABEL</h2>
        </div>
    </div>
</div>
@endsection