@extends('admin.components.maindas')
@section('dascontainer')
<div class="main-content flex flex-col flex-grow p-4"> 
    <div class="flex justify-between">
        <h1 class="font-bold text-2xl text-gray-700">Riwayat {{ $resultuser->name }}</h1>
        <button class="px-3 py-2 rounded-md bg-blue-500 hover:bg-blue-700 text-white" onclick="printDiv('print')">Print</button>
    </div>     
    <div id="print" class="flex flex-col flex-grow bg-white rounded mt-4">
        <div class="text-center p-5 shadow-sm">
            <h1 class="font-bold uppercase">PT. Bank Sumsel Babel</h1>
            <h2 class="font-light">Jl. Jenderal Ahmad Yani No.3, 9/10 Ulu, Kecamatan Seberang Ulu I, Kota Palembang, Sumatera Selatan 30252</h2>
        </div>
        <div class="text-center p-5">
            <h1 class="font-bold">Riwayat {{ $resultuser->name }}</h1>
        </div>
        <table class="text-center mx-auto border-collapse border border-slate-500">
            <thead class="rounded-sm">
              <tr>
                <th class="border border-slate-600 p-2 bg-gray-100">No</th>
                <th class="border border-slate-600 p-2 bg-gray-100">Time</th>
                <th class="text-left border border-slate-600 p-2 bg-gray-100">Keterangan</th>
              </tr>
            </thead>
            <tbody>
            <?php $no=1   ?>
            @foreach ($result as $data )
              <tr>
                <td class="border border-slate-700 p-2">{{ $no++ }}</td>
                <td class="border border-slate-700 p-2">{{ $data->created_at }}</td>
                <td class="text-left border border-slate-700 p-2">{{ $data->keterangan }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</div>

<script>
    function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
}
</script>
@endsection
