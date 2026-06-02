<?php
$current_page = 'members-approved.php';
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<!-- Page Header -->
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h3 class="text-2xl font-bold text-gray-800">Approved Members</h3>
        <p class="text-gray-500 text-sm">Members whose profiles have been verified and approved.</p>
    </div>
    <div class="flex gap-2">
        <button class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition shadow-sm flex items-center">
            <i class="fas fa-download mr-2"></i> Export
        </button>
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
                    <th class="py-4 px-6 font-semibold">Approval Date</th>
                    <th class="py-4 px-6 font-semibold">Status</th>
                    <th class="py-4 px-6 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-100">
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
                        <button class="text-red-600 hover:text-red-900 mx-1 p-1" title="Revoke Approval"><i class="fas fa-ban"></i></button>
                    </td>
                </tr>
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
                        <button class="text-red-600 hover:text-red-900 mx-1 p-1" title="Revoke Approval"><i class="fas fa-ban"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
