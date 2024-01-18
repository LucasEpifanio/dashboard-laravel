document.addEventListener("DOMContentLoaded", function () {
    Chart.defaults.font.size = 14;
    Chart.defaults.color = "white";
    // Bar Chart
    var barCtx = document.getElementById("barChart").getContext("2d");
    var barChart = new Chart(barCtx, {
        type: "bar",
        data: {
            labels: ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5"],
            datasets: [
                {
                    label: "Dados de Exemplo (Bar)",
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: [
                        "rgba(226, 223, 75, 0.3)",
                        "rgba(75, 115, 226, 0.3)",
                        "rgba(171, 75, 226, 0.3)",
                        "rgba(226, 148, 75, 0.3)",
                        "rgba(75, 226, 120, 0.3)",
                    ],
                    borderColor: [
                        "rgba(226, 223, 75, 1)",
                        "rgba(75, 115, 226, 1)",
                        "rgba(171, 75, 226, 1)",
                        "rgba(226, 148, 75, 1)",
                        "rgba(75, 226, 120, 1)",
                    ],
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        font: {
                            size: 13,
                        },
                    },
                },
            },
        },
    });

    // Line Chart
    const labels = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
    ];
    const lineCtx = document.getElementById("lineChart").getContext("2d");
    const lineChart = new Chart(lineCtx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [
                {
                    label: "My First Dataset (Line)",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: {
                        target: "origin",
                        above: "rgba(193, 226, 75, 0.1)", // Cor de fundo da área acima da linha
                    },
                    borderColor: "rgb(193, 226, 75)",
                    tension: 0.1,
                },
            ],
        },
        options: {
            layout: {
                padding: {
                    top: 20,
                },
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        font: {
                            size: 13,
                        },
                    },
                },
            },
        },
    });

    // Doughnut Chart
    const doughnutCtx = document
        .getElementById("doughnutChart")
        .getContext("2d");
    const doughnutChart = new Chart(doughnutCtx, {
        type: "doughnut",
        data: {
            labels: ["1º semestre", "2º semestre", "3º semestre"],
            datasets: [
                {
                    label: "My First Dataset",
                    data: [300, 50, 100],
                    backgroundColor: [
                        "rgb(226, 148, 75, 0.8)",
                        "rgb(75, 115, 226,0.8)",
                        "rgb(226, 223, 75,0.8)",
                    ],
                    hoverOffset: 4,
                },
            ],
        },
        options: {
            plugins: {
                legend: {
                    display: true,
                    position: "bottom",
                },
            },
        },
    });

    // Horizontal Bar Chart
    var horizontalCtx = document.getElementById("horizontalChart").getContext("2d");
    var horizontalChart = new Chart(horizontalCtx, {
        type: "bar",  // Utilizando o tipo de gráfico horizontalBar
        data: {
            labels: ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5"],
            datasets: [
                {
                    label: "(Horizontal Bar)",
                    data: [15, 9, 11, 7, 5],
                    backgroundColor: [
                        "rgba(226, 223, 75, 0.6)",
                        "rgba(75, 115, 226, 0.6)",
                        "rgba(171, 75, 226, 0.6)",
                        "rgba(226, 148, 75, 0.6)",
                        "rgba(75, 226, 120, 0.6)",
                    ],
                    borderColor: [
                        "rgba(226, 223, 75, 0.8)",
                        "rgba(75, 115, 226, 0.8)",
                        "rgba(171, 75, 226, 0.8)",
                        "rgba(226, 148, 75, 0.8)",
                        "rgba(75, 226, 120, 0.8)",
                    ],
                    borderWidth: 1,
                },
            ],
        },
        options: {
            indexAxis: 'y',
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        font: {
                            size: 13,
                        },
                    },
                },
            },
        },
    });
});
