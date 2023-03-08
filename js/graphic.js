var ctx = document.getElementsByClassName("barCanvas");

fetch("http://localhost/brief6_Nutrition/controllers/graphicController.php", {
  method: "GET",
}).then(async (res) => {
  const result = await res.json();
  console.log(result);
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
      datasets: [
        {
          label: "Historique calories",
          data: result,
          backgroundColor: ["rgba(255, 99, 132, 0.2)"],
          borderWidth: 1,
        },
      ],
    },

    options: {
      scales: {
        yAxes: [
          {
            ticks: {
              beginAtZero: true,
            },
          },
        ],
      },
    },
  });
});
