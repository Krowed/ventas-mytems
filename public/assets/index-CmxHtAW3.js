import "./app-APNOAydp.js";
import { u as ApexCharts } from "./apexcharts.esm-DPbJ6jlt.js";
import "./flatpickr-DxeCcIwz.js";

/* ===============================
   DASHBOARD CHARTS
================================ */
class DashboardCharts {

    initSalesRevenueOverview() {
        const options = {
            series: [
                { name: "Total Sales", data: [44,55,41,67,22,43,21,49,20,41,67,22] },
                { name: "Total Profit", data: [11,17,15,15,21,14,15,13,5,15,15,21] }
            ],
            chart: {
                type: "bar",
                height: 310,
                stacked: true,
                stackType: "100%",
                toolbar: { show: false }
            },
            xaxis: {
                categories: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]
            },
            tooltip: {
                y: { formatter: v => `$${v}k` }
            },
            plotOptions: {
                bar: { columnWidth: "50%" }
            },
            colors: ["#2b7fff", "var(--color-teal-500)"],
            legend: { position: "bottom" }
        };

        new ApexCharts(
            document.querySelector("#salesRevenueOverview"),
            options
        ).render();
    }

    initOrderStatistics() {
        const options = {
            series: [
                { name: "Pending", data: [17,16,19,22,24,29,25,20,25,31,28,35] },
                { name: "New Orders", data: [30,24,32,27,16,22,32,21,24,20,38,28] }
            ],
            chart: { type: "line", height: 275, toolbar: { show: false } },
            stroke: { curve: "smooth", width: 2 },
            colors: ["#2b7fff", "var(--color-teal-500)"],
            dataLabels: { enabled: false }
        };

        new ApexCharts(
            document.querySelector("#orderStatisticsChart"),
            options
        ).render();
    }

    initTrafficResources() {
        const options = {
            series: [44,34,22],
            chart: { type: "radialBar", height: 222 },
            labels: ["Direct", "Referrals", "Search Engine"],
            colors: ["#2b7fff", "#facc15", "#4ade80"]
        };

        new ApexCharts(
            document.querySelector("#trafficResourcesChart"),
            options
        ).render();
    }

    initSalesMonth() {
        const options = {
            series: [
                {
                    name: "Profit Range",
                    data: [
                        { x: "Mar", y: [900,2900] },
                        { x: "Apr", y: [1400,2700] },
                        { x: "May", y: [2600,3900] },
                        { x: "Jun", y: [500,1700] },
                        { x: "Jul", y: [1900,2300] },
                        { x: "Aug", y: [1000,1500] }
                    ]
                }
            ],
            chart: { type: "rangeArea", height: 280, toolbar: { show: false } },
            colors: ["#2b7fff"],
            fill: { opacity: 0.3 }
        };

        new ApexCharts(
            document.querySelector("#salesThisMonthChart"),
            options
        ).render();
    }

    initAudience() {
        const options = {
            series: [
                { name: "Male", data: [44,55,41,67,22,43,26] },
                { name: "Female", data: [13,23,20,8,13,27,41] }
            ],
            chart: { type: "bar", height: 340, stacked: true, toolbar: { show: false } },
            colors: ["#f87171", "#4ade80"]
        };

        new ApexCharts(
            document.querySelector("#audienceChart"),
            options
        ).render();
    }

    init() {
        this.initSalesRevenueOverview();
        this.initOrderStatistics();
        this.initTrafficResources();
        this.initSalesMonth();
        this.initAudience();
    }
}

/* ===============================
   START AFTER LOADER
================================ */
window.addEventListener("loader-hide", () => {
    new DashboardCharts().init();
});
