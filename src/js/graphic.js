var ctx = document.getElementsByClassName("barCanvas");
// Colas:
// "http://localhost:8888/Brief06/src/controllers/graphicController.php"
// Aude:
//"http://localhost/brief6_Nutrition/src/controllers/graphicController.php"
fetch("http://localhost:8888/Brief06/src/controllers/graphicController.php", {
  method: "GET",
}).then(async (res) => {
  const result = await res.json();
  console.log(result);
  Chart.defaults.global.defaultFontColor = "#131c2b";
  new Chart(ctx, {
    type: "bar",

    data: {
      labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
      datasets: [
        {
          label: "Calories/jour des 10 derniers jours",
          data: result,
          backgroundColor: ["#dc776f", "#dc776f", "#dc776f", "#dc776f", "#dc776f", "#dc776f", "#dc776f", "#dc776f", "#dc776f", "#dc776f"],
          borderWidth: 1,
        },
      ],
    },

    options: {
      scales: {
        yAxes: [
          {
            gridLines: { color: "#131c2b" },

            ticks: {
              beginAtZero: true,
            },
          },
        ],
      },
    },
  });
});
