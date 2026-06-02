<?php
$current_page = 'members-rejected.php';
include 'includes/header.php'; 
include 'includes/sidebar.php'; 
?>

<!-- Page Header -->
<div class="mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
    <div>
        <h3 class="text-2xl font-bold text-gray-800">Rejected Members</h3>
        <p class="text-gray-500 text-sm">Members whose profiles did not meet the guidelines.</p>
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
                    <th class="py-4 px-6 font-semibold">Rejection Reason</th>
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
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop" class="w-10 h-10 rounded-full object-cover mr-3 border border-gray-200">
                            <div>
                                <p class="font-bold text-gray-800">Neha Jain</p>
                                <p class="text-xs text-gray-500">ID: #JDM1039 • Bride</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4 px-6">
                        <p class="text-gray-800">neha@example.com</p>
                        <p class="text-gray-500 text-xs mt-1">+91 9123456780</p>
                    </td>
                    <td class="py-4 px-6 text-gray-600">
                        <span class="text-red-500 font-medium">Incomplete Profile Details</span><br>
                        <span class="text-xs text-gray-400">Rejected on Oct 23, 2026</span>
                    </td>
                    <td class="py-4 px-6 text-right">
                        <button class="text-blue-600 hover:text-blue-900 mx-1 p-1" title="View Profile"><i class="fas fa-eye"></i></button>
                        <button class="text-green-600 hover:text-green-900 mx-1 p-1" title="Re-evaluate"><i class="fas fa-undo"></i></button>
                        <button class="text-red-600 hover:text-red-900 mx-1 p-1" title="Permanently Delete"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
