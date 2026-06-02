<?php
$current_page = 'members-requests.php';
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<!-- Page Header -->
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h3 class="text-2xl font-bold text-gray-800">Deactivation / Deletion Requests</h3>
        <p class="text-gray-500 text-sm">Process requests from users who want to deactivate or delete their accounts.</p>
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
                    <th class="py-4 px-6 font-semibold">Request Type</th>
                    <th class="py-4 px-6 font-semibold">Reason</th>
                    <th class="py-4 px-6 font-semibold">Date</th>
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
                            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center mr-3 text-gray-500"><i class="fas fa-user"></i></div>
                            <div>
                                <p class="font-bold text-gray-800">Amit Desai</p>
                                <p class="text-xs text-gray-500">ID: #JDM1040</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                            Deletion Request
                        </span>
                    </td>
                    <td class="py-4 px-6 text-gray-600">
                        "I have found my life partner."
                    </td>
                    <td class="py-4 px-6 text-gray-600">
                        Oct 26, 2026
                    </td>
                    <td class="py-4 px-6 text-right">
                        <button class="bg-red-50 text-red-600 border border-red-200 hover:bg-red-600 hover:text-white px-3 py-1 rounded-lg transition text-xs font-bold mr-2">Process Deletion</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
