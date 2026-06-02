<?php
$current_page = 'registration-visibility.php';
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<!-- Page Header -->
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h3 class="text-2xl font-bold text-gray-800">Registration Form Setup</h3>
        <p class="text-gray-500 text-sm">Manage which fields are shown on the public signup page.</p>
    </div>
    <button class="bg-primary text-white px-5 py-2.5 rounded-lg text-sm font-bold hover:bg-opacity-90 transition shadow-sm flex items-center">
        <i class="fas fa-save mr-2"></i> Save Changes
    </button>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    
    <!-- Standard Fields List -->
    <div class="lg:col-span-2 space-y-6">
        
        <!-- Basic Details Group -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h4 class="font-bold text-gray-800"><i class="fas fa-user text-gray-400 mr-2"></i> Basic Details</h4>
            </div>
            <div class="p-0">
                <ul class="divide-y divide-gray-100">
                    <li class="flex items-center justify-between p-4 px-6 hover:bg-gray-50 transition">
                        <div>
                            <p class="font-semibold text-gray-800">Profile Created For</p>
                            <p class="text-xs text-gray-500">Self, Son, Daughter, etc.</p>
                        </div>
                        <div class="flex items-center">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked disabled>
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary opacity-50 cursor-not-allowed"></div>
                            </label>
                            <span class="text-xs text-gray-400 ml-4 w-16 text-right">Required</span>
                        </div>
                    </li>
                    <li class="flex items-center justify-between p-4 px-6 hover:bg-gray-50 transition">
                        <div>
                            <p class="font-semibold text-gray-800">Full Name</p>
                        </div>
                        <div class="flex items-center">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked disabled>
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary opacity-50 cursor-not-allowed"></div>
                            </label>
                            <span class="text-xs text-gray-400 ml-4 w-16 text-right">Required</span>
                        </div>
                    </li>
                    <li class="flex items-center justify-between p-4 px-6 hover:bg-gray-50 transition">
                        <div>
                            <p class="font-semibold text-gray-800">Date of Birth</p>
                        </div>
                        <div class="flex items-center">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                            </label>
                            <span class="text-xs text-green-500 ml-4 w-16 text-right font-medium">Visible</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Religious & Astrological Details -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h4 class="font-bold text-gray-800"><i class="fas fa-om text-gray-400 mr-2"></i> Religious & Astrological Details</h4>
            </div>
            <div class="p-0">
                <ul class="divide-y divide-gray-100">
                    <li class="flex items-center justify-between p-4 px-6 hover:bg-gray-50 transition">
                        <div>
                            <p class="font-semibold text-gray-800">Gotra</p>
                        </div>
                        <div class="flex items-center">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                            </label>
                            <span class="text-xs text-green-500 ml-4 w-16 text-right font-medium">Visible</span>
                        </div>
                    </li>
                    <li class="flex items-center justify-between p-4 px-6 hover:bg-gray-50 transition">
                        <div>
                            <p class="font-semibold text-gray-800">Manglik Status</p>
                        </div>
                        <div class="flex items-center">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer" checked>
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                            </label>
                            <span class="text-xs text-green-500 ml-4 w-16 text-right font-medium">Visible</span>
                        </div>
                    </li>
                    <li class="flex items-center justify-between p-4 px-6 hover:bg-gray-50 transition">
                        <div>
                            <p class="font-semibold text-gray-800">Star (Nakshatra)</p>
                        </div>
                        <div class="flex items-center">
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                            </label>
                            <span class="text-xs text-gray-400 ml-4 w-16 text-right font-medium">Hidden</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Custom Fields Sidebar -->
    <div class="lg:col-span-1 space-y-6">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="bg-primary/5 px-6 py-4 border-b border-primary/10 flex justify-between items-center">
                <h4 class="font-bold text-primary"><i class="fas fa-plus-circle mr-2"></i> Add Custom Field</h4>
            </div>
            <div class="p-6">
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Field Label</label>
                        <input type="text" placeholder="e.g. Dietary Preference" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Field Type</label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white text-sm">
                            <option value="text">Short Text</option>
                            <option value="textarea">Long Text</option>
                            <option value="dropdown">Dropdown Options</option>
                            <option value="radio">Radio Buttons</option>
                            <option value="checkbox">Checkbox</option>
                        </select>
                    </div>
                    <div id="optionsGroup" class="hidden">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Options (Comma separated)</label>
                        <input type="text" placeholder="Vegetarian, Vegan, Jain" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary outline-none text-sm">
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="is_required" class="rounded border-gray-300 text-primary focus:ring-primary w-4 h-4">
                        <label for="is_required" class="ml-2 text-sm text-gray-700">Make this field Required</label>
                    </div>
                    <button type="button" class="w-full bg-primary text-white py-2 rounded-lg font-bold shadow-md hover:bg-opacity-90 transition mt-2">
                        Create Field
                    </button>
                </form>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-100">
                <h4 class="font-bold text-gray-800">Existing Custom Fields</h4>
            </div>
            <div class="p-0">
                <ul class="divide-y divide-gray-100 text-sm">
                    <li class="flex items-center justify-between p-4 px-6">
                        <div>
                            <span class="font-medium text-gray-800">Complexion</span>
                            <span class="block text-xs text-gray-400 mt-1">Dropdown (Required)</span>
                        </div>
                        <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    // Simple script to toggle options input visibility based on field type
    document.querySelector('select').addEventListener('change', function(e) {
        const val = e.target.value;
        const optsGroup = document.getElementById('optionsGroup');
        if(val === 'dropdown' || val === 'radio') {
            optsGroup.classList.remove('hidden');
        } else {
            optsGroup.classList.add('hidden');
        }
    });
</script>

<?php include 'includes/footer.php'; ?>
