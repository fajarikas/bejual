<!DOCTYPE html>
<html class="bg-background-color">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  </head>
  <body class="bg-background-color font-poppins">
    @include('partial.sidebar')
    @yield('content')
  </body>

  <script>
    var options = {
      series: [
        {
          name: "Pengguna terdaftar",
          data: [31, 40, 28, 51, 42, 109, 100, 34, 43, 12, 45, 35],
        },
        {
          name: "Transaksi",
          data: [11, 32, 45, 32, 34, 52, 41, 90, 12, 43, 53, 32],
        },
      ],
      chart: {
        height: 350,
        type: "area",
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        curve: "smooth",
      },
      xaxis: {
        type: "date",
        categories: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Des",
        ],
      },
      tooltip: {
        x: {
          format: "dd/MM/yy",
        },
      },
      colors: ["#FB7D5B", "#FCC43E"],
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
  </script>

  <script>
    function Menu(x) {
      x.classList.toggle("change");
      x.classList.toggle("add");
      var menu = document.querySelector("#navbar");
      menu.classList.toggle("hidden");
    }

    // const menu = document.querySelector("#menu");
    // const navbar = document.querySelector("#navbar");
    // let menuOpen = false;

    // menu.addEventListener("click", () => {
    //   if (!menuOpen) {
    //     menu.classList.add("inline");
    //     menuOpen = true;
    //   } else {
    //     menu.classList.remove("hidden");
    //     menuOpen = false;
    //   }
    // });
  </script>

  <script>
    var options = {
      series: [
        {
          name: "Pendapatan",
          data: [
            31000, 40000, 28000, 51000, 42000, 109000, 100000, 34000, 43000,
            12000, 45000, 35000,
          ],
        },
      ],
      chart: {
        height: 350,
        type: "area",
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        curve: "smooth",
      },
      xaxis: {
        type: "date",
        categories: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Des",
        ],
      },
      tooltip: {
        x: {
          format: "dd/MM/yy",
        },
      },
      colors: ["#186F65"],
    };

    var chart = new ApexCharts(document.querySelector("#chart2"), options);
    chart.render();
  </script>
</html>
