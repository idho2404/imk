document.addEventListener("DOMContentLoaded", () => {
    const data = [
        {
            kecamatan: "Panggul",
            laki2020: 39495,
            perempuan2020: 38872,
            total2020: 78367,
            laki2021: 39489,
            perempuan2021: 38940,
            total2021: 78429,
            laki2022: 39508,
            perempuan2022: 38984,
            total2022: 78492,
            laki2023: 39564,
            perempuan2023: 38936,
            total2023: 78500,
        },
        {
            kecamatan: "Munjuangan",
            laki2020: 26882,
            perempuan2020: 26057,
            total2020: 52939,
            laki2021: 26830,
            perempuan2021: 25968,
            total2021: 52879,
            laki2022: 26743,
            perempuan2022: 26027,
            total2022: 52770,
            laki2023: 26749,
            perempuan2023: 26067,
            total2023: 52816,
        },
        {
            kecamatan: "Watulimo",
            laki2020: 35537,
            perempuan2020: 34429,
            total2020: 69966,
            laki2021: 35630,
            perempuan2021: 34496,
            total2021: 70126,
            laki2022: 35683,
            perempuan2022: 34565,
            total2022: 70248,
            laki2023: 35688,
            perempuan2023: 34635,
            total2023: 70323,
        },
        {
            kecamatan: "Kampak",
            laki2020: 18732,
            perempuan2020: 18849,
            total2020: 37681,
            laki2021: 18800,
            perempuan2021: 18461,
            total2021: 37261,
            laki2022: 18449,
            perempuan2022: 18709,
            total2022: 37158,
            laki2023: 18748,
            perempuan2023: 18403,
            total2023: 37151,
        },
        {
            kecamatan: "Dongko",
            laki2020: 33242,
            perempuan2020: 32269,
            total2020: 65511,
            laki2021: 33256,
            perempuan2021: 32287,
            total2021: 65543,
            laki2022: 33283,
            perempuan2022: 32223,
            total2022: 65503,
            laki2023: 33294,
            perempuan2023: 32202,
            total2023: 65496,
        },
        {
            kecamatan: "Pule",
            laki2020: 28226,
            perempuan2020: 27725,
            total2020: 55951,
            laki2021: 28174,
            perempuan2021: 27785,
            total2021: 55959,
            laki2022: 28206,
            perempuan2022: 27729,
            total2022: 55935,
            laki2023: 28265,
            perempuan2023: 27717,
            total2023: 55982,
        },
        {
            kecamatan: "Karangan",
            laki2020: 24873,
            perempuan2020: 25136,
            total2020: 50009,
            laki2021: 24902,
            perempuan2021: 25097,
            total2021: 49999,
            laki2022: 24811,
            perempuan2022: 25016,
            total2022: 49827,
            laki2023: 24886,
            perempuan2023: 25108,
            total2023: 49994,
        },
        {
            kecamatan: "Suruh",
            laki2020: 13074,
            perempuan2020: 13066,
            total2020: 26140,
            laki2021: 13046,
            perempuan2021: 13139,
            total2021: 26185,
            laki2022: 13076,
            perempuan2022: 13070,
            total2022: 26101,
            laki2023: 13072,
            perempuan2023: 13155,
            total2023: 26227,
        },
        {
            kecamatan: "Gandusari",
            laki2020: 26167,
            perempuan2020: 26316,
            total2020: 52483,
            laki2021: 26197,
            perempuan2021: 26279,
            total2021: 52476,
            laki2022: 26195,
            perempuan2022: 26350,
            total2022: 52545,
            laki2023: 26118,
            perempuan2023: 26364,
            total2023: 52482,
        },
        {
            kecamatan: "Durenan",
            laki2020: 25689,
            perempuan2020: 25629,
            total2020: 51318,
            laki2021: 25687,
            perempuan2021: 25585,
            total2021: 51272,
            laki2022: 25605,
            perempuan2022: 25503,
            total2022: 51108,
            laki2023: 25610,
            perempuan2023: 25500,
            total2023: 51110,
        },
        {
            kecamatan: "Pogalan",
            laki2020: 26336,
            perempuan2020: 25988,
            total2020: 52324,
            laki2021: 26388,
            perempuan2021: 26029,
            total2021: 52417,
            laki2022: 26326,
            perempuan2022: 25970,
            total2022: 52296,
            laki2023: 26396,
            perempuan2023: 26001,
            total2023: 52397,
        },
        {
            kecamatan: "Trenggalek",
            laki2020: 31941,
            perempuan2020: 32410,
            total2020: 64351,
            laki2021: 31948,
            perempuan2021: 32478,
            total2021: 64425,
            laki2022: 32485,
            perempuan2022: 32463,
            total2022: 64948,
            laki2023: 32107,
            perempuan2023: 32479,
            total2023: 64586,
        },
        {
            kecamatan: "Tugu",
            laki2020: 23659,
            perempuan2020: 24210,
            total2020: 47869,
            laki2021: 23580,
            perempuan2021: 24202,
            total2021: 47782,
            laki2022: 24168,
            perempuan2022: 24783,
            total2022: 48951,
            laki2023: 23535,
            perempuan2023: 24099,
            total2023: 47625,
        },
        {
            kecamatan: "Bendungan",
            laki2020: 13643,
            perempuan2020: 13621,
            total2020: 27264,
            laki2021: 13662,
            perempuan2021: 13585,
            total2021: 27247,
            laki2022: 13700,
            perempuan2022: 13589,
            total2022: 27289,
            laki2023: 13614,
            perempuan2023: 13660,
            total2023: 27274,
        },
    ];

    const ctx = document.getElementById("myChart").getContext("2d");
    let chart;

    const updateChart = () => {
        const wilayah = document.getElementById("wilayah").value;
        const jenisKelamin = document.getElementById("jenisKelamin").value;
        const tahun = document.getElementById("tahun").value;

        let filteredData = data;

        if (wilayah !== "semua") {
            filteredData = filteredData.filter((d) => d.kecamatan === wilayah);
        }

        const labels = filteredData.map((d) => d.kecamatan);
        let datasets = [];

        if (jenisKelamin === "semua" || jenisKelamin === "laki") {
            datasets.push({
                label: "Laki-laki",
                backgroundColor: "blue",
                data: filteredData.map((d) => d[`laki${tahun}`]),
            });
        }
        if (jenisKelamin === "semua" || jenisKelamin === "perempuan") {
            datasets.push({
                label: "Perempuan",
                backgroundColor: "red",
                data: filteredData.map((d) => d[`perempuan${tahun}`]),
            });
        }
        if (jenisKelamin === "semua") {
            datasets.push({
                label: "Total",
                backgroundColor: "green",
                data: filteredData.map((d) => d[`total${tahun}`]),
            });
        }

        if (chart) {
            chart.destroy();
        }

        chart = new Chart(ctx, {
            type: "bar",
            data: {
                labels,
                datasets,
            },
            options: {
                responsive: true,
                scales: {
                    x: { title: { display: true, text: "Kecamatan" } },
                    y: { title: { display: true, text: "Jumlah" } },
                },
            },
        });
    };

    document.getElementById("wilayah").addEventListener("change", updateChart);
    document
        .getElementById("jenisKelamin")
        .addEventListener("change", updateChart);
    document.getElementById("tahun").addEventListener("change", updateChart);

    // Populate wilayah options
    const wilayahSelect = document.getElementById("wilayah");
    data.forEach((d) => {
        const option = document.createElement("option");
        option.value = d.kecamatan;
        option.text = d.kecamatan;
        wilayahSelect.add(option);
    });

    // Initialize chart
    updateChart();
});

document.addEventListener("DOMContentLoaded", () => {
    const data = [
        {
            kecamatan: "Panggul",
            laki2020: 39495,
            perempuan2020: 38872,
            total2020: 78367,
            laki2021: 39489,
            perempuan2021: 38940,
            total2021: 78429,
            laki2022: 39508,
            perempuan2022: 38984,
            total2022: 78492,
            laki2023: 39564,
            perempuan2023: 38936,
            total2023: 78500,
        },
        {
            kecamatan: "Munjuangan",
            laki2020: 26882,
            perempuan2020: 26057,
            total2020: 52939,
            laki2021: 26830,
            perempuan2021: 25968,
            total2021: 52879,
            laki2022: 26743,
            perempuan2022: 26027,
            total2022: 52770,
            laki2023: 26749,
            perempuan2023: 26067,
            total2023: 52816,
        },
        {
            kecamatan: "Watulimo",
            laki2020: 35537,
            perempuan2020: 34429,
            total2020: 69966,
            laki2021: 35630,
            perempuan2021: 34496,
            total2021: 70126,
            laki2022: 35683,
            perempuan2022: 34565,
            total2022: 70248,
            laki2023: 35688,
            perempuan2023: 34635,
            total2023: 70323,
        },
        {
            kecamatan: "Kampak",
            laki2020: 18732,
            perempuan2020: 18849,
            total2020: 37681,
            laki2021: 18800,
            perempuan2021: 18461,
            total2021: 37261,
            laki2022: 18449,
            perempuan2022: 18709,
            total2022: 37158,
            laki2023: 18748,
            perempuan2023: 18403,
            total2023: 37151,
        },
        {
            kecamatan: "Dongko",
            laki2020: 33242,
            perempuan2020: 32269,
            total2020: 65511,
            laki2021: 33256,
            perempuan2021: 32287,
            total2021: 65543,
            laki2022: 33283,
            perempuan2022: 32223,
            total2022: 65503,
            laki2023: 33294,
            perempuan2023: 32202,
            total2023: 65496,
        },
        {
            kecamatan: "Pule",
            laki2020: 28226,
            perempuan2020: 27725,
            total2020: 55951,
            laki2021: 28174,
            perempuan2021: 27785,
            total2021: 55959,
            laki2022: 28206,
            perempuan2022: 27729,
            total2022: 55935,
            laki2023: 28265,
            perempuan2023: 27717,
            total2023: 55982,
        },
        {
            kecamatan: "Karangan",
            laki2020: 24873,
            perempuan2020: 25136,
            total2020: 50009,
            laki2021: 24902,
            perempuan2021: 25097,
            total2021: 49999,
            laki2022: 24811,
            perempuan2022: 25016,
            total2022: 49827,
            laki2023: 24886,
            perempuan2023: 25108,
            total2023: 49994,
        },
        {
            kecamatan: "Suruh",
            laki2020: 13074,
            perempuan2020: 13066,
            total2020: 26140,
            laki2021: 13046,
            perempuan2021: 13139,
            total2021: 26185,
            laki2022: 13076,
            perempuan2022: 13070,
            total2022: 26101,
            laki2023: 13072,
            perempuan2023: 13155,
            total2023: 26227,
        },
        {
            kecamatan: "Gandusari",
            laki2020: 26167,
            perempuan2020: 26316,
            total2020: 52483,
            laki2021: 26197,
            perempuan2021: 26279,
            total2021: 52476,
            laki2022: 26195,
            perempuan2022: 26350,
            total2022: 52545,
            laki2023: 26118,
            perempuan2023: 26364,
            total2023: 52482,
        },
        {
            kecamatan: "Durenan",
            laki2020: 25689,
            perempuan2020: 25629,
            total2020: 51318,
            laki2021: 25687,
            perempuan2021: 25585,
            total2021: 51272,
            laki2022: 25605,
            perempuan2022: 25503,
            total2022: 51108,
            laki2023: 25610,
            perempuan2023: 25500,
            total2023: 51110,
        },
        {
            kecamatan: "Pogalan",
            laki2020: 26336,
            perempuan2020: 25988,
            total2020: 52324,
            laki2021: 26388,
            perempuan2021: 26029,
            total2021: 52417,
            laki2022: 26326,
            perempuan2022: 25970,
            total2022: 52296,
            laki2023: 26396,
            perempuan2023: 26001,
            total2023: 52397,
        },
        {
            kecamatan: "Trenggalek",
            laki2020: 31941,
            perempuan2020: 32410,
            total2020: 64351,
            laki2021: 31948,
            perempuan2021: 32478,
            total2021: 64425,
            laki2022: 32485,
            perempuan2022: 32463,
            total2022: 64948,
            laki2023: 32107,
            perempuan2023: 32479,
            total2023: 64586,
        },
        {
            kecamatan: "Tugu",
            laki2020: 23659,
            perempuan2020: 24210,
            total2020: 47869,
            laki2021: 23580,
            perempuan2021: 24202,
            total2021: 47782,
            laki2022: 24168,
            perempuan2022: 24783,
            total2022: 48951,
            laki2023: 23535,
            perempuan2023: 24099,
            total2023: 47625,
        },
        {
            kecamatan: "Bendungan",
            laki2020: 13643,
            perempuan2020: 13621,
            total2020: 27264,
            laki2021: 13662,
            perempuan2021: 13585,
            total2021: 27247,
            laki2022: 13700,
            perempuan2022: 13589,
            total2022: 27289,
            laki2023: 13614,
            perempuan2023: 13660,
            total2023: 27274,
        },
    ];

    const lineCtx = document.getElementById("lineChart").getContext("2d");
    let lineChart;

    const updateLineChart = () => {
        const wilayah = document.getElementById("lineWilayah").value;
        const jenisKelamin = document.getElementById("lineJenisKelamin").value;

        let filteredData = data;
        if (wilayah !== "semua") {
            filteredData = filteredData.filter((d) => d.kecamatan === wilayah);
        }

        const labels = ["2020", "2021", "2022", "2023"];
        let datasets = [];

        if (jenisKelamin === "semua" || jenisKelamin === "laki") {
            datasets.push({
                label: "Laki-laki",
                borderColor: "blue",
                data: filteredData
                    .map((d) => [
                        d.laki2020,
                        d.laki2021,
                        d.laki2022,
                        d.laki2023,
                    ])
                    .flat(),
                fill: false,
            });
        }
        if (jenisKelamin === "semua" || jenisKelamin === "perempuan") {
            datasets.push({
                label: "Perempuan",
                borderColor: "red",
                data: filteredData
                    .map((d) => [
                        d.perempuan2020,
                        d.perempuan2021,
                        d.perempuan2022,
                        d.perempuan2023,
                    ])
                    .flat(),
                fill: false,
            });
        }
        if (jenisKelamin === "semua") {
            datasets.push({
                label: "Total",
                borderColor: "green",
                data: filteredData
                    .map((d) => [
                        d.total2020,
                        d.total2021,
                        d.total2022,
                        d.total2023,
                    ])
                    .flat(),
                fill: false,
            });
        }

        if (lineChart) {
            lineChart.destroy();
        }

        lineChart = new Chart(lineCtx, {
            type: "line",
            data: {
                labels,
                datasets,
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: "Tahun",
                        },
                    },
                    y: {
                        title: {
                            display: true,
                            text: "Jumlah",
                        },
                    },
                },
            },
        });
    };

    document
        .getElementById("lineWilayah")
        .addEventListener("change", updateLineChart);
    document
        .getElementById("lineJenisKelamin")
        .addEventListener("change", updateLineChart);

    // Populate wilayah options for line chart
    const lineWilayahSelect = document.getElementById("lineWilayah");
    data.forEach((d) => {
        const option = document.createElement("option");
        option.value = d.kecamatan;
        option.text = d.kecamatan;
        lineWilayahSelect.add(option);
    });

    // Initialize line chart
    updateLineChart();
});
