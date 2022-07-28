@extends('admin.components.maindas')
@section('dascontainer')
<div class="main-content flex flex-col flex-grow p-4">
    <h1 class="font-bold text-2xl text-gray-700">Dashboard</h1>

    <div
      class="flex flex-col flex-grow bg-white rounded mt-4"
    >
<div class="px-10 pt-10">
    <div class="flex justify-between">
        <div>
            <h1>Wellcome Administrator</h1>
        </div>

        <div>
            <h1>Time : {{ $tanggal }} WIB</h1>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4 pt-10 h-full">
        <div class="shadow-lg rounded-lg">
            <div class="py-3 px-5 bg-gray-50">Debit Chart</div>
            <canvas class="p-5" id="chartLine"></canvas>
          </div>
          <div class=" shadow-lg rounded-lg">
            <div class="py-3 px-5 bg-gray-50">Kredit Chart</div>
            <canvas class="p-5" id="chartBar"></canvas>
          </div>
    </div>
</div>
</div>
</div>

          <!-- Required chart.js -->
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          
          <!-- Chart line -->
          <script>
            const labels = ["January", "February", "March", "April", "May", "June"];
            const data = {
              labels: labels,
              datasets: [
                {
                  label: "My First dataset",
                  backgroundColor: "hsl(252, 82.9%, 67.8%)",
                  borderColor: "hsl(252, 82.9%, 67.8%)",
                  data: [0, 10, 5, 2, 20, 30, 45],
                },
              ],
            };
          
            const configLineChart = {
              type: "line",
              data,
              options: {},
            };
          
            var chartLine = new Chart(
              document.getElementById("chartLine"),
              configLineChart
            );
          </script>

            <script>
                const labelsBarChart = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                ];
                const dataBarChart = {
                labels: labelsBarChart,
                datasets: [
                    {
                    label: "My First dataset",
                    backgroundColor: "hsl(252, 82.9%, 67.8%)",
                    borderColor: "hsl(252, 82.9%, 67.8%)",
                    data: [0, 10, 5, 2, 20, 30, 45],
                    },
                ],
                };
            
                const configBarChart = {
                type: "bar",
                data: dataBarChart,
                options: {},
                };
            
                var chartBar = new Chart(
                document.getElementById("chartBar"),
                configBarChart
                );
            </script>
@endsection
