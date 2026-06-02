<?php
$current_page = 'advertisement.php';
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<!-- Page Header -->
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h3 class="text-2xl font-bold text-gray-800">Hero Advertisements</h3>
        <p class="text-gray-500 text-sm">Manage banners and promotional ads displayed on the homepage.</p>
    </div>
    <button class="bg-primary text-white px-5 py-2.5 rounded-lg text-sm font-bold hover:bg-opacity-90 transition shadow-sm flex items-center" onclick="document.getElementById('uploadAdModal').classList.remove('hidden')">
        <i class="fas fa-upload mr-2"></i> Upload New Ad
    </button>
</div>

<!-- Active Ads Grid -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    
    <!-- Ad Card -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex flex-col">
        <div class="h-48 bg-gray-200 relative overflow-hidden group">
            <img src="https://images.unsplash.com/photo-1522673607200-164d1b6ce486?w=800&h=400&fit=crop" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                <button class="bg-white text-gray-800 p-2 rounded-full mx-1 hover:bg-gray-100 transition shadow" title="Preview"><i class="fas fa-eye w-5 h-5 flex items-center justify-center"></i></button>
                <button class="bg-white text-red-600 p-2 rounded-full mx-1 hover:bg-red-50 transition shadow" title="Delete"><i class="fas fa-trash w-5 h-5 flex items-center justify-center"></i></button>
            </div>
            <div class="absolute top-3 right-3">
                <span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded shadow-sm">Active</span>
            </div>
        </div>
        <div class="p-5">
            <h4 class="font-bold text-gray-800 mb-1">Diwali Special Offer</h4>
            <p class="text-xs text-gray-500 mb-4">Uploaded on Oct 15, 2026</p>
            
            <div class="space-y-3 bg-gray-50 p-4 rounded-lg">
                <div class="flex justify-between items-center">
                    <span class="text-sm font-medium text-gray-700">Display Size</span>
                    <select class="text-sm border-gray-300 rounded focus:ring-primary focus:border-primary p-1 outline-none bg-white">
                        <option value="full" selected>Full Width</option>
                        <option value="half">Half Width</option>
                        <option value="popup">Popup Box</option>
                    </select>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-sm font-medium text-gray-700">Position</span>
                    <select class="text-sm border-gray-300 rounded focus:ring-primary focus:border-primary p-1 outline-none bg-white">
                        <option value="top_right">Top Right (Hero)</option>
                        <option value="top_left">Top Left (Hero)</option>
                        <option value="bottom_center" selected>Bottom Center</option>
                    </select>
                </div>
                <div class="flex justify-between items-center pt-2 border-t border-gray-200">
                    <span class="text-sm font-medium text-gray-700">Status</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" checked>
                        <div class="w-9 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
                    </label>
                </div>
            </div>
            <button class="w-full mt-4 bg-gray-100 text-gray-700 py-2 rounded-lg text-sm font-bold hover:bg-gray-200 transition">
                Update Settings
            </button>
        </div>
    </div>

    <!-- Upload Ad Modal -->
    <div id="uploadAdModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-xl w-full max-w-lg overflow-hidden flex flex-col max-h-[90vh]">
            <div class="flex justify-between items-center p-6 border-b border-gray-100">
                <h3 class="text-xl font-bold text-gray-800">Upload Advertisement</h3>
                <button class="text-gray-400 hover:text-gray-600 transition" onclick="document.getElementById('uploadAdModal').classList.add('hidden')">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <div class="p-6 overflow-y-auto">
                <form class="space-y-5">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Ad Title / Name</label>
                        <input type="text" placeholder="e.g. Summer Promo" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Upload Banner Image</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:bg-gray-50 transition cursor-pointer">
                            <i class="fas fa-cloud-upload-alt text-3xl text-primary mb-2"></i>
                            <p class="text-sm font-medium text-gray-800">Click to upload or drag and drop</p>
                            <p class="text-xs text-gray-500 mt-1">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Default Size</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white text-sm">
                                <option value="full">Full Width</option>
                                <option value="half">Half Width</option>
                                <option value="popup">Popup Box</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Default Position</label>
                            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white text-sm">
                                <option value="top_right">Top Right (Hero)</option>
                                <option value="top_left">Top Left (Hero)</option>
                                <option value="bottom_center">Bottom Center</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Target URL (Optional)</label>
                        <input type="url" placeholder="https://" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none">
                    </div>
                </form>
            </div>
            
            <div class="p-6 border-t border-gray-100 bg-gray-50 flex justify-end gap-3">
                <button class="px-5 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition font-medium" onclick="document.getElementById('uploadAdModal').classList.add('hidden')">Cancel</button>
                <button class="px-5 py-2 bg-primary text-white rounded-lg hover:bg-opacity-90 transition font-bold shadow-sm">Upload & Save</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
