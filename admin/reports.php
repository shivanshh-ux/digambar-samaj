<?php
$current_page = 'reports.php';
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<!-- Page Header -->
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h3 class="text-2xl font-bold text-gray-800">Reports & Analytics</h3>
        <p class="text-gray-500 text-sm">Visualize platform metrics and user demographics.</p>
    </div>
    
    <div class="flex gap-3">
        <button class="bg-white border border-green-500 text-green-600 px-4 py-2 rounded-lg text-sm font-bold hover:bg-green-50 transition shadow-sm flex items-center">
            <i class="fas fa-file-excel mr-2 text-lg"></i> Export Excel
        </button>
        <button class="bg-white border border-red-500 text-red-600 px-4 py-2 rounded-lg text-sm font-bold hover:bg-red-50 transition shadow-sm flex items-center">
            <i class="fas fa-file-pdf mr-2 text-lg"></i> Export PDF
        </button>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    
    <!-- Signups Over Time Chart (Line/Bar) -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <div class="flex justify-between items-center mb-6">
            <h4 class="font-bold text-gray-800 text-lg">Member Signups (Last 30 Days)</h4>
            <select class="text-sm border border-gray-300 rounded focus:ring-primary outline-none bg-white py-1 px-2">
                <option value="30">Last 30 Days</option>
                <option value="60">Last 60 Days</option>
                <option value="year">This Year</option>
            </select>
        </div>
        <div class="h-72 w-full">
            <canvas id="signupsChart"></canvas>
        </div>
    </div>

    <!-- Professionals Chart (Pie/Doughnut) -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <div class="flex justify-between items-center mb-6">
            <h4 class="font-bold text-gray-800 text-lg">Member Professions</h4>
            <button class="text-sm text-gray-500 hover:text-primary"><i class="fas fa-ellipsis-v"></i></button>
        </div>
        <div class="h-72 w-full flex justify-center items-center relative">
            <canvas id="professionChart"></canvas>
        </div>
    </div>
    
    <!-- Revenue Chart (Bar) -->
    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <div class="flex justify-between items-center mb-6">
            <h4 class="font-bold text-gray-800 text-lg">Revenue Trends</h4>
            <div class="text-2xl font-bold text-gray-800">₹5,000 <span class="text-sm font-normal text-green-500 ml-2">+100%</span></div>
        </div>
        <div class="h-80 w-full">
            <canvas id="revenueChart"></canvas>
        </div>
    </div>
</div>

<!-- Chart.js Configuration -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // Setup Chart Defaults for consistent styling
    Chart.defaults.font.family = "'Inter', 'system-ui', '-apple-system', 'sans-serif'";
    Chart.defaults.color = '#64748b'; // text-slate-500
    
    // 1. Signups Chart (Line)
    const ctxSignups = document.getElementById('signupsChart').getContext('2d');
    
    // Create gradient for the line chart fill
    let gradient = ctxSignups.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(67, 56, 202, 0.4)'); // Indigo 700 with opacity
    gradient.addColorStop(1, 'rgba(67, 56, 202, 0.0)');
    
    new Chart(ctxSignups, {
        type: 'line',
        data: {
            labels: ['1', '5', '10', '15', '20', '25', '30'],
            datasets: [{
                label: 'New Registrations',
                data: [0, 0, 0, 1, 0, 2, 1],
                borderColor: '#4338CA', // Indigo 700
                backgroundColor: gradient,
                borderWidth: 3,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#4338CA',
                pointBorderWidth: 2,
                pointRadius: 4,
                pointHoverRadius: 6,
                fill: true,
                tension: 0.4 // Smooth curves
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#4338CA',
                    padding: 12,
                    titleFont: { size: 13 },
                    bodyFont: { size: 14, weight: 'bold' },
                    displayColors: false,
                    callbacks: {
                        title: function(context) { return 'Day ' + context[0].label; }
                    }
                }
            },
            scales: {
                y: { 
                    beginAtZero: true, 
                    grid: { color: '#f1f5f9', drawBorder: false },
                    border: { display: false }
                },
                x: { 
                    grid: { display: false },
                    border: { display: false }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
        }
    });

    // 2. Professions Chart (Doughnut)
    const ctxProf = document.getElementById('professionChart').getContext('2d');
    new Chart(ctxProf, {
        type: 'doughnut',
        data: {
            labels: ['Software Engineer', 'Business/Entrepreneur', 'Doctor/Medical', 'Finance/CA', 'Other'],
            datasets: [{
                data: [50, 25, 25, 0, 0],
                backgroundColor: [
                    '#4338CA', // Indigo 700
                    '#DB2777', // Pink 600
                    '#3b82f6', // Blue
                    '#10b981', // Emerald
                    '#e2e8f0'  // Slate 200
                ],
                borderWidth: 0,
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    position: 'right',
                    labels: {
                        usePointStyle: true,
                        padding: 20,
                        font: { size: 13 }
                    }
                },
                tooltip: {
                    backgroundColor: '#1E3A5F',
                    padding: 12,
                    callbacks: {
                        label: function(context) {
                            return ' ' + context.label + ': ' + context.raw + '%';
                        }
                    }
                }
            }
        }
    });

    // 3. Revenue Chart (Bar)
    const ctxRev = document.getElementById('revenueChart').getContext('2d');
    new Chart(ctxRev, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Revenue (₹)',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5000],
                backgroundColor: '#DB2777', // Pink 600
                borderRadius: 4,
                barPercentage: 0.6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false },
                tooltip: {
                    backgroundColor: '#2D2D2D',
                    padding: 12,
                    callbacks: {
                        label: function(context) {
                            let value = context.raw;
                            return ' ₹' + value.toLocaleString();
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: { color: '#f1f5f9', drawBorder: false },
                    border: { display: false },
                    ticks: {
                        callback: function(value) {
                            if (value >= 100000) return '₹' + (value/100000).toFixed(1) + 'L';
                            if (value >= 1000) return '₹' + (value/1000).toFixed(0) + 'k';
                            return '₹' + value;
                        }
                    }
                },
                x: {
                    grid: { display: false },
                    border: { display: false }
                }
            }
        }
    });
});
</script>

<?php include 'includes/footer.php'; ?>
