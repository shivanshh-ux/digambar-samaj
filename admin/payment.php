<?php
$current_page = 'payment.php';
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<!-- Page Header -->
<div class="mb-6">
    <h3 class="text-2xl font-bold text-gray-800">Payment Management</h3>
    <p class="text-gray-500 text-sm">View transactions, record manual payments, and configure gateways.</p>
</div>

<!-- Tabs -->
<div class="bg-white rounded-t-xl border-b border-gray-200 px-6 pt-4 flex space-x-6">
    <button class="pb-3 text-sm font-bold text-primary border-b-2 border-primary" onclick="switchTab('history')">Payment History</button>
    <button class="pb-3 text-sm font-medium text-gray-500 hover:text-gray-700 transition" onclick="switchTab('manual')">Manual Payment</button>
    <button class="pb-3 text-sm font-medium text-gray-500 hover:text-gray-700 transition" onclick="switchTab('settings')">Payment Methods</button>
</div>

<!-- Tab Content: History -->
<div id="tab-history" class="bg-white p-6 rounded-b-xl shadow-sm border border-t-0 border-gray-100">
    <div class="flex justify-between items-center mb-4">
        <h4 class="font-bold text-gray-800">Recent Transactions</h4>
        <button class="text-sm bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1.5 rounded transition"><i class="fas fa-download mr-1"></i> Export CSV</button>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200 text-xs text-gray-500 uppercase tracking-wider">
                    <th class="py-3 px-4 font-semibold">Transaction ID</th>
                    <th class="py-3 px-4 font-semibold">Profile</th>
                    <th class="py-3 px-4 font-semibold">Amount</th>
                    <th class="py-3 px-4 font-semibold">Method</th>
                    <th class="py-3 px-4 font-semibold">Date</th>
                    <th class="py-3 px-4 font-semibold">Status</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-3 px-4 text-gray-800 font-medium">TXN-847291</td>
                    <td class="py-3 px-4 text-gray-600">Priya Shah (#JDM1041)</td>
                    <td class="py-3 px-4 text-gray-800 font-bold">₹5,000</td>
                    <td class="py-3 px-4 text-gray-600">Razorpay (UPI)</td>
                    <td class="py-3 px-4 text-gray-600">Oct 24, 2026</td>
                    <td class="py-3 px-4">
                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-bold bg-green-100 text-green-700">Success</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Tab Content: Manual Payment -->
<div id="tab-manual" class="bg-white p-6 rounded-b-xl shadow-sm border border-t-0 border-gray-100 hidden">
    <div class="max-w-xl">
        <h4 class="font-bold text-gray-800 mb-4">Record Manual Payment</h4>
        <p class="text-sm text-gray-500 mb-6">Use this form to grant membership to users who paid offline (Cash, Cheque, Direct Bank Transfer).</p>
        
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Profile ID</label>
                <input type="text" placeholder="e.g. #JDM1045" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Select Membership Plan</label>
                <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white text-sm">
                    <option value="">Select a plan</option>
                    <option value="1">Basic Trial (Free)</option>
                    <option value="2">Premium Yearly (₹5,000)</option>
                </select>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Amount Paid (₹)</label>
                    <input type="number" placeholder="e.g. 5000" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Payment Method</label>
                    <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white text-sm">
                        <option value="cash">Cash</option>
                        <option value="cheque">Cheque</option>
                        <option value="bank">Bank Transfer</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Transaction Reference / Notes</label>
                <textarea rows="3" placeholder="Cheque number or any specific details" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm"></textarea>
            </div>
            
            <button type="button" class="bg-primary text-white py-2 px-6 rounded-lg font-bold shadow-md hover:bg-opacity-90 transition mt-2">
                Record Payment & Activate Plan
            </button>
        </form>
    </div>
</div>

<!-- Tab Content: Settings -->
<div id="tab-settings" class="bg-white p-6 rounded-b-xl shadow-sm border border-t-0 border-gray-100 hidden">
    <div class="max-w-3xl">
        <h4 class="font-bold text-gray-800 mb-4">Payment Gateways</h4>
        <p class="text-sm text-gray-500 mb-6">Configure the active payment methods shown to users during registration or plan upgrades.</p>
        
        <div class="space-y-4">
            <!-- Razorpay -->
            <div class="border border-gray-200 rounded-xl p-4 flex items-center justify-between bg-gray-50">
                <div class="flex items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Razorpay_logo.svg" alt="Razorpay" class="h-6 w-auto mr-4">
                    <div>
                        <h5 class="font-bold text-gray-800">Razorpay (UPI, Cards, NetBanking)</h5>
                        <p class="text-xs text-gray-500">Key: <span class="font-mono text-gray-400">rzp_test_**********</span></p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-sm text-primary font-medium hover:underline">Edit Keys</button>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
                    </label>
                </div>
            </div>

            <!-- Stripe -->
            <div class="border border-gray-200 rounded-xl p-4 flex items-center justify-between">
                <div class="flex items-center">
                    <div class="w-20 font-bold text-lg text-indigo-600 mr-4">Stripe</div>
                    <div>
                        <h5 class="font-bold text-gray-800">Stripe (International Cards)</h5>
                        <p class="text-xs text-gray-500">Not configured</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="text-sm text-primary font-medium hover:underline">Setup</button>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
                    </label>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    // Tab switching logic
    function switchTab(tabId) {
        // Hide all tabs
        document.getElementById('tab-history').classList.add('hidden');
        document.getElementById('tab-manual').classList.add('hidden');
        document.getElementById('tab-settings').classList.add('hidden');
        
        // Show selected tab
        document.getElementById('tab-' + tabId).classList.remove('hidden');
        
        // Update button styles
        const buttons = document.querySelectorAll('.bg-white.rounded-t-xl button');
        buttons.forEach(btn => {
            btn.classList.remove('text-primary', 'border-b-2', 'border-primary', 'font-bold');
            btn.classList.add('text-gray-500', 'font-medium');
        });
        
        // Highlight active button
        const activeBtn = event.currentTarget;
        activeBtn.classList.remove('text-gray-500', 'font-medium');
        activeBtn.classList.add('text-primary', 'border-b-2', 'border-primary', 'font-bold');
    }
</script>

<?php include 'includes/footer.php'; ?>
