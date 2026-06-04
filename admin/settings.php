<?php
$current_page = 'settings.php';
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<!-- Page Header -->
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h3 class="text-2xl font-bold text-gray-800">Admin Settings</h3>
        <p class="text-gray-500 text-sm">Configure global platform settings and admin preferences.</p>
    </div>
    <button class="bg-primary text-white px-5 py-2.5 rounded-lg text-sm font-bold hover:bg-opacity-90 transition shadow-sm flex items-center">
        <i class="fas fa-save mr-2"></i> Save All Settings
    </button>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    
    <!-- Global Settings -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
            <h4 class="font-bold text-gray-800"><i class="fas fa-globe mr-2 text-primary"></i> Global Platform Settings</h4>
        </div>
        <div class="p-6 space-y-6">
            
            <div class="flex items-center justify-between">
                <div>
                    <h5 class="font-bold text-gray-800">Enable Payment on Registration</h5>
                    <p class="text-xs text-gray-500 mt-1">If enabled, users must pay the subscription fee before completing their profile registration. If disabled, users can register for free.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer ml-4">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>
            
            <hr class="border-gray-100">

            <div class="flex items-center justify-between">
                <div>
                    <h5 class="font-bold text-gray-800">Auto-Approve Profiles</h5>
                    <p class="text-xs text-gray-500 mt-1">Automatically approve new registrations without admin verification.</p>
                </div>
                <label class="relative inline-flex items-center cursor-pointer ml-4">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                </label>
            </div>

            <hr class="border-gray-100">

            <div>
                <label class="block font-bold text-gray-800 mb-2">Support Email Address</label>
                <input type="email" value="support@jaindigambarmatrimony.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm">
            </div>
            
            <hr class="border-gray-100 mt-6 mb-6">

            <div>
                <label class="block font-bold text-gray-800 mb-2">About Us YouTube Video URL</label>
                <input type="text" value="https://www.youtube.com/embed/dQw4w9WgXcQ" placeholder="Enter YouTube Embed URL" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm">
                <p class="text-xs text-gray-500 mt-1">This video will be displayed on the About Us page.</p>
            </div>
            
        </div>
    </div>

    <!-- Admin Account Settings -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
            <h4 class="font-bold text-gray-800"><i class="fas fa-lock mr-2 text-primary"></i> Change Admin Password</h4>
        </div>
        <div class="p-6">
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                    <input type="password" placeholder="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                    <input type="password" placeholder="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                    <input type="password" placeholder="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm">
                </div>
                <div class="pt-2">
                    <button type="button" class="bg-gray-800 text-white py-2 px-6 rounded-lg font-bold shadow-sm hover:bg-gray-700 transition">
                        Update Password
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
