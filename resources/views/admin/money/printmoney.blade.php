@extends('admin.components.maindas')
@section('dascontainer')
<div class="main-content flex flex-col flex-grow p-4">      
        <h1 class="font-bold text-2xl text-gray-700"></h1>

    <div class="flex flex-col flex-grow bg-white rounded mt-4 p-5">
        <div id="print">
            <div class="text-center p-5 shadow-sm">
                <h1 class="font-bold uppercase">PT. Bank Sumsel Babel</h1>
                <h2 class="font-light">Jl. Jenderal Ahmad Yani No.3, 9/10 Ulu, Kecamatan Seberang Ulu I, Kota Palembang, Sumatera Selatan 30252</h2>
            </div>
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Name</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $dataprint["name"] }}</dd>
                        </div>
                    </dl>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">No. Rekening</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $dataprint["no_rek"] }}</dd>
                        </div>
                    </dl>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Tanggal</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $dataprint["time"] }}</dd>
                        </div>
                    </dl>
                </div>
                @if ($dataprint["debit"] !== null) 
                <div class="border-t border-gray-200">            
                    <dl>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Jumlah Setoran</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">@currency($dataprint["debit"])</dd>
                        </div>
                    </dl>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Total Uang</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">@currency($dataprint["totaluangdebit"])</dd>
                        </div>
                    </dl>
                </div>
                @else
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Jumlah Kedit</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">@currency($dataprint["kredit"])</dd>
                        </div>
                    </dl>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Total Uang</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">@currency($dataprint["totaluangkredit"])</dd>
                        </div>
                    </dl>
                </div>
                @endif
            </div>
        </div>
        <div class="pt-5">
            <button class="px-3 py-2 rounded-md bg-blue-500 hover:bg-blue-700 text-white" onclick="printDiv('print')">Print</button>
            <a href="{{ url("/admin/money") }}" class="px-3 py-2 rounded-md bg-red-500 hover:bg-red-700 text-white">Cancel</a>
        </div>
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