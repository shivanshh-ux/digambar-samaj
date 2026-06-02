<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<!-- Dashboard Content -->
<div class="mb-6 flex justify-between items-center">
    <div>
        <h3 class="text-2xl font-bold text-gray-800">Welcome back, Admin</h3>
        <p class="text-gray-500 text-sm">Here's what's happening with your platform today.</p>
    </div>
    <div>
        <a href="../index.php" target="_blank" class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition shadow-sm">
            <i class="fas fa-external-link-alt mr-2 text-gray-400"></i> View Website
        </a>
    </div>
</div>

<!-- Key Metrics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    
    <!-- Total Members -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Total Members</p>
            <h4 class="text-3xl font-bold text-gray-800">4</h4>
            <p class="text-xs text-gray-400 font-medium mt-1">Platform active members</p>
        </div>
        <div class="w-12 h-12 bg-blue-50 text-blue-500 rounded-lg flex items-center justify-center text-xl">
            <i class="fas fa-users"></i>
        </div>
    </div>

    <!-- Active Subscriptions -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Active Subscriptions</p>
            <h4 class="text-3xl font-bold text-gray-800">1</h4>
            <p class="text-xs text-gray-400 font-medium mt-1">Currently paid members</p>
        </div>
        <div class="w-12 h-12 bg-yellow-50 text-yellow-500 rounded-lg flex items-center justify-center text-xl">
            <i class="fas fa-crown"></i>
        </div>
    </div>

    <!-- Pending Approvals -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Pending Approvals</p>
            <h4 class="text-3xl font-bold text-gray-800">1</h4>
            <p class="text-xs text-red-500 font-medium mt-1"><i class="fas fa-exclamation-circle mr-1"></i> Needs your attention</p>
        </div>
        <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-lg flex items-center justify-center text-xl">
            <i class="fas fa-user-clock"></i>
        </div>
    </div>

    <!-- Revenue -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex items-center justify-between">
        <div>
            <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide mb-1">Monthly Revenue</p>
            <h4 class="text-3xl font-bold text-gray-800">₹5,000</h4>
            <p class="text-xs text-gray-400 font-medium mt-1">This month's collections</p>
        </div>
        <div class="w-12 h-12 bg-green-50 text-green-500 rounded-lg flex items-center justify-center text-xl">
            <i class="fas fa-rupee-sign"></i>
        </div>
    </div>

</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <!-- Quick Actions -->
    <div class="lg:col-span-1 bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <h4 class="text-lg font-bold text-gray-800 mb-4 border-b pb-2">Quick Actions</h4>
        <div class="space-y-3">
            <a href="members.php" class="flex items-center justify-between p-3 rounded-lg border border-gray-100 hover:bg-gray-50 hover:border-primary transition group">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-primary/10 text-primary rounded-md flex items-center justify-center mr-3 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <span class="font-medium text-gray-700 group-hover:text-primary transition">Review New Profiles</span>
                </div>
                <i class="fas fa-chevron-right text-gray-300 group-hover:text-primary transition"></i>
            </a>
            
            <a href="membership-plans.php" class="flex items-center justify-between p-3 rounded-lg border border-gray-100 hover:bg-gray-50 hover:border-primary transition group">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-primary/10 text-primary rounded-md flex items-center justify-center mr-3 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-tag"></i>
                    </div>
                    <span class="font-medium text-gray-700 group-hover:text-primary transition">Update Pricing Plans</span>
                </div>
                <i class="fas fa-chevron-right text-gray-300 group-hover:text-primary transition"></i>
            </a>
            
            <a href="advertisement.php" class="flex items-center justify-between p-3 rounded-lg border border-gray-100 hover:bg-gray-50 hover:border-primary transition group">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-primary/10 text-primary rounded-md flex items-center justify-center mr-3 group-hover:bg-primary group-hover:text-white transition">
                        <i class="fas fa-image"></i>
                    </div>
                    <span class="font-medium text-gray-700 group-hover:text-primary transition">Manage Hero Banners</span>
                </div>
                <i class="fas fa-chevron-right text-gray-300 group-hover:text-primary transition"></i>
            </a>
        </div>
    </div>

    <!-- Recent Registrations (Dummy Table) -->
    <div class="lg:col-span-2 bg-white rounded-xl shadow-sm border border-gray-100 p-6">
        <div class="flex justify-between items-center mb-4 border-b pb-2">
            <h4 class="text-lg font-bold text-gray-800">Recent Registrations</h4>
            <a href="members.php" class="text-sm text-primary font-medium hover:underline">View All</a>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-sm text-gray-500 uppercase border-b border-gray-100 bg-gray-50">
                        <th class="py-3 px-4 font-semibold rounded-tl-lg">Profile ID</th>
                        <th class="py-3 px-4 font-semibold">Name</th>
                        <th class="py-3 px-4 font-semibold">Date</th>
                        <th class="py-3 px-4 font-semibold text-center">Status</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    <tr class="border-b border-gray-50 hover:bg-gray-50 transition">
                        <td class="py-3 px-4 text-gray-600 font-medium">#JDM1042</td>
                        <td class="py-3 px-4 text-gray-800 font-bold">Rahul Jain</td>
                        <td class="py-3 px-4 text-gray-500">Today, 10:23 AM</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs font-bold">Pending</span>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-50 hover:bg-gray-50 transition">
                        <td class="py-3 px-4 text-gray-600 font-medium">#JDM1041</td>
                        <td class="py-3 px-4 text-gray-800 font-bold">Priya Shah</td>
                        <td class="py-3 px-4 text-gray-500">Yesterday, 04:15 PM</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">Approved</span>
                        </td>
                    </tr>
                    <tr class="border-b border-gray-50 hover:bg-gray-50 transition">
                        <td class="py-3 px-4 text-gray-600 font-medium">#JDM1040</td>
                        <td class="py-3 px-4 text-gray-800 font-bold">Amit Desai</td>
                        <td class="py-3 px-4 text-gray-500">Yesterday, 11:30 AM</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-bold">Approved</span>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-4 text-gray-600 font-medium">#JDM1039</td>
                        <td class="py-3 px-4 text-gray-800 font-bold">Neha Jain</td>
                        <td class="py-3 px-4 text-gray-500">Oct 24, 2026</td>
                        <td class="py-3 px-4 text-center">
                            <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs font-bold">Rejected</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

<?php include 'includes/footer.php'; ?>
