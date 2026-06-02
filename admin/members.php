<?php
$current_page = 'members.php';
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<!-- Page Header -->
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h3 class="text-2xl font-bold text-gray-800">All Members</h3>
        <p class="text-gray-500 text-sm">Manage all registered profiles on the platform.</p>
    </div>
    
    <div class="flex gap-2">
        <button class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition shadow-sm flex items-center">
            <i class="fas fa-filter mr-2"></i> Filter
        </button>
        <button class="bg-primary text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-opacity-90 transition shadow-sm flex items-center">
            <i class="fas fa-download mr-2"></i> Export
        </button>
    </div>
</div>

<!-- Filters Bar -->
<div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 mb-6">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <input type="text" placeholder="Search by ID, Name or Email" class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none">
        </div>
        <div>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                <option value="">All Genders</option>
                <option value="male">Groom (Male)</option>
                <option value="female">Bride (Female)</option>
            </select>
        </div>
        <div>
            <select class="w-full px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-primary focus:border-primary outline-none bg-white">
                <option value="">All Statuses</option>
                <option value="pending">Pending</option>
                <option value="approved">Approved</option>
                <option value="rejected">Rejected</option>
            </select>
        </div>
        <div>
            <button class="w-full bg-gray-100 text-gray-700 px-4 py-2 rounded-lg text-sm font-bold hover:bg-gray-200 transition">
                Search
            </button>
        </div>
    </div>
</div>

<!-- Data Table -->
<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-200 text-xs text-gray-500 uppercase tracking-wider">
                    <th class="py-4 px-6 font-semibold w-16">
                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                    </th>
                    <th class="py-4 px-6 font-semibold">Profile</th>
                    <th class="py-4 px-6 font-semibold">Contact Info</th>
                    <th class="py-4 px-6 font-semibold">Registration Date</th>
                    <th class="py-4 px-6 font-semibold">Status</th>
                    <th class="py-4 px-6 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
                
                <!-- Row 1 -->
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6">
                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&h=100&fit=crop" class="w-10 h-10 rounded-full object-cover mr-3 border border-gray-200">
                            <div>
                                <p class="font-bold text-gray-800">Rahul Jain</p>
                                <p class="text-xs text-gray-500">ID: #JDM1042 • Groom</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <p class="text-gray-800"><i class="fas fa-envelope text-gray-400 w-4"></i> rahul@example.com</p>
                        <p class="text-gray-500 text-xs mt-1"><i class="fas fa-phone text-gray-400 w-4"></i> +91 9876543210</p>
                    </td>
                    <td class="py-4 px-6 text-gray-600">
                        Oct 25, 2026<br>
                        <span class="text-xs text-gray-400">10:23 AM</span>
                    </td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                            Pending
                        </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <button class="text-blue-600 hover:text-blue-900 mx-1 p-1" title="View Profile"><i class="fas fa-eye"></i></button>
                        <button class="text-green-600 hover:text-green-900 mx-1 p-1" title="Approve"><i class="fas fa-check-circle"></i></button>
                        <button class="text-red-600 hover:text-red-900 mx-1 p-1" title="Reject"><i class="fas fa-times-circle"></i></button>
                    </td>
                </tr>

                <!-- Row 2 -->
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6">
                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1554151228-14d9def656e4?w=100&h=100&fit=crop" class="w-10 h-10 rounded-full object-cover mr-3 border border-gray-200">
                            <div>
                                <p class="font-bold text-gray-800">Priya Shah</p>
                                <p class="text-xs text-gray-500">ID: #JDM1041 • Bride</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <p class="text-gray-800"><i class="fas fa-envelope text-gray-400 w-4"></i> priya@example.com</p>
                        <p class="text-gray-500 text-xs mt-1"><i class="fas fa-phone text-gray-400 w-4"></i> +91 9988776655</p>
                    </td>
                    <td class="py-4 px-6 text-gray-600">
                        Oct 24, 2026<br>
                        <span class="text-xs text-gray-400">04:15 PM</span>
                    </td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Approved
                        </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <button class="text-blue-600 hover:text-blue-900 mx-1 p-1" title="View Profile"><i class="fas fa-eye"></i></button>
                        <button class="text-gray-400 hover:text-gray-600 mx-1 p-1" title="Edit"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-900 mx-1 p-1" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                
                <!-- Row 3 -->
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6">
                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop" class="w-10 h-10 rounded-full object-cover mr-3 border border-gray-200">
                            <div>
                                <p class="font-bold text-gray-800">Amit Desai</p>
                                <p class="text-xs text-gray-500">ID: #JDM1040 • Groom</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <p class="text-gray-800"><i class="fas fa-envelope text-gray-400 w-4"></i> amit@example.com</p>
                        <p class="text-gray-500 text-xs mt-1"><i class="fas fa-phone text-gray-400 w-4"></i> +91 9988112233</p>
                    </td>
                    <td class="py-4 px-6 text-gray-600">
                        Oct 23, 2026<br>
                        <span class="text-xs text-gray-400">11:30 AM</span>
                    </td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Approved
                        </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <button class="text-blue-600 hover:text-blue-900 mx-1 p-1" title="View Profile"><i class="fas fa-eye"></i></button>
                        <button class="text-gray-400 hover:text-gray-600 mx-1 p-1" title="Edit"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-900 mx-1 p-1" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>

                <!-- Row 4 -->
                <tr class="hover:bg-gray-50 transition">
                    <td class="py-4 px-6">
                        <input type="checkbox" class="rounded border-gray-300 text-primary focus:ring-primary">
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop" class="w-10 h-10 rounded-full object-cover mr-3 border border-gray-200">
                            <div>
                                <p class="font-bold text-gray-800">Neha Jain</p>
                                <p class="text-xs text-gray-500">ID: #JDM1039 • Bride</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <p class="text-gray-800"><i class="fas fa-envelope text-gray-400 w-4"></i> neha@example.com</p>
                        <p class="text-gray-500 text-xs mt-1"><i class="fas fa-phone text-gray-400 w-4"></i> +91 9123456780</p>
                    </td>
                    <td class="py-4 px-6 text-gray-600">
                        Oct 22, 2026<br>
                        <span class="text-xs text-gray-400">02:10 PM</span>
                    </td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            Rejected
                        </span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <button class="text-blue-600 hover:text-blue-900 mx-1 p-1" title="View Profile"><i class="fas fa-eye"></i></button>
                        <button class="text-gray-400 hover:text-gray-600 mx-1 p-1" title="Edit"><i class="fas fa-edit"></i></button>
                        <button class="text-red-600 hover:text-red-900 mx-1 p-1" title="Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    
    <!-- Pagination -->
    <div class="bg-white px-6 py-4 border-t border-gray-200 flex items-center justify-between">
        <div class="text-sm text-gray-500">
            Showing <span class="font-medium text-gray-800">1</span> to <span class="font-medium text-gray-800">4</span> of <span class="font-medium text-gray-800">4</span> results
        </div>
        <div class="flex space-x-1">
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-500 hover:bg-gray-50 disabled:opacity-50" disabled>Previous</button>
            <button class="px-3 py-1 border border-primary bg-primary text-white rounded text-sm font-medium">1</button>
            <button class="px-3 py-1 border border-gray-300 rounded text-sm text-gray-500 hover:bg-gray-50 disabled:opacity-50" disabled>Next</button>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
