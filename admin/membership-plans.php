<?php
$current_page = 'membership-plans.php';
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<!-- Page Header -->
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h3 class="text-2xl font-bold text-gray-800">Membership Plans</h3>
        <p class="text-gray-500 text-sm">Manage subscription packages and pricing.</p>
    </div>
    <button class="bg-primary text-white px-5 py-2.5 rounded-lg text-sm font-bold hover:bg-opacity-90 transition shadow-sm flex items-center" onclick="document.getElementById('addPlanModal').classList.remove('hidden')">
        <i class="fas fa-plus mr-2"></i> Add New Plan
    </button>
</div>

<!-- Plans Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
    
    <!-- Free Plan -->
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden flex flex-col">
        <div class="bg-gray-50 p-6 text-center border-b border-gray-100 relative">
            <h4 class="text-xl font-bold text-gray-800">Basic Trial</h4>
            <div class="mt-4 flex justify-center items-baseline">
                <span class="text-4xl font-extrabold text-gray-800">Free</span>
            </div>
            <p class="text-sm text-gray-500 mt-1">Valid for 1 Month</p>
        </div>
        <div class="p-6 flex-1">
            <ul class="space-y-3 text-sm text-gray-600">
                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-3"></i> Create Profile</li>
                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-3"></i> Search Matches</li>
                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-3"></i> Send Interests (Up to 5)</li>
                <li class="flex items-start text-gray-400"><i class="fas fa-times mt-1 mr-3"></i> View Contact Details</li>
                <li class="flex items-start text-gray-400"><i class="fas fa-times mt-1 mr-3"></i> Chat Feature</li>
            </ul>
        </div>
        <div class="p-6 pt-0 border-t border-gray-50 mt-auto bg-white flex justify-between">
            <button class="text-primary font-semibold text-sm hover:underline"><i class="fas fa-edit mr-1"></i> Edit</button>
            <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded">Active</span>
        </div>
    </div>

    <!-- Yearly Plan -->
    <div class="bg-white rounded-2xl shadow-md border-2 border-primary overflow-hidden flex flex-col relative transform scale-105 z-10">
        <div class="absolute top-0 right-0 bg-primary text-white text-xs font-bold px-3 py-1 rounded-bl-lg">Most Popular</div>
        <div class="bg-primary/5 p-6 text-center border-b border-primary/10">
            <h4 class="text-xl font-bold text-primary">Premium Yearly</h4>
            <div class="mt-4 flex justify-center items-baseline">
                <span class="text-2xl font-semibold text-gray-600 mr-1">₹</span>
                <span class="text-4xl font-extrabold text-gray-800">5,000</span>
            </div>
            <p class="text-sm text-gray-500 mt-1">Valid for 1 Year</p>
        </div>
        <div class="p-6 flex-1">
            <ul class="space-y-3 text-sm text-gray-600">
                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-3"></i> Create Profile & Search</li>
                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-3"></i> Unlimited Interests</li>
                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-3"></i> View Contact Details (150 profiles)</li>
                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-3"></i> Standout Profile Placement</li>
                <li class="flex items-start"><i class="fas fa-check text-green-500 mt-1 mr-3"></i> Priority Support</li>
            </ul>
        </div>
        <div class="p-6 pt-0 border-t border-gray-50 mt-auto bg-white flex justify-between">
            <button class="text-primary font-semibold text-sm hover:underline"><i class="fas fa-edit mr-1"></i> Edit</button>
            <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded">Active</span>
        </div>
    </div>

</div>

<!-- Add Plan Modal -->
<div id="addPlanModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-2xl overflow-hidden flex flex-col max-h-[90vh]">
        <div class="flex justify-between items-center p-6 border-b border-gray-100">
            <h3 class="text-xl font-bold text-gray-800">Create New Membership Plan</h3>
            <button class="text-gray-400 hover:text-gray-600 transition" onclick="document.getElementById('addPlanModal').classList.add('hidden')">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        
        <div class="p-6 overflow-y-auto">
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Plan Name</label>
                        <input type="text" placeholder="e.g. Gold Quarterly" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Price (₹)</label>
                        <input type="number" placeholder="e.g. 2000" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Duration</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                            <option value="1">1 Month</option>
                            <option value="3">3 Months</option>
                            <option value="6">6 Months</option>
                            <option value="12">1 Year</option>
                            <option value="999">Lifetime</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Contact View Limit</label>
                        <input type="number" placeholder="e.g. 50" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Features (One per line)</label>
                    <textarea rows="4" placeholder="Unlimited Interests&#10;View Contact Details&#10;Priority Support" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none"></textarea>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="is_active" class="rounded border-gray-300 text-primary focus:ring-primary w-4 h-4" checked>
                    <label for="is_active" class="ml-2 text-sm text-gray-700">Make this plan Active immediately</label>
                </div>
            </form>
        </div>
        
        <div class="p-6 border-t border-gray-100 bg-gray-50 flex justify-end gap-3">
            <button class="px-5 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition font-medium" onclick="document.getElementById('addPlanModal').classList.add('hidden')">Cancel</button>
            <button class="px-5 py-2 bg-primary text-white rounded-lg hover:bg-opacity-90 transition font-bold shadow-sm">Save Plan</button>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
