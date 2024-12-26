@extends('admin-fe.layouts.main')

@section('container-admin-fe')
    <!-- Hero section start -->
        <div class="container">
            <div class="flex flex-wrap gap-3 mb-6">
                <h1 class="text-xl md:text-2xl lg:text-4xl text-primary-2 text-left">List Package</h1>
                <a href="/admin-fe/package/create" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded shadow flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Add
                </a>
                <div class="h-[3px] w-full bg-primary-2 block"></div>
                <!-- Breadcrumb -->
                <nav class="mt-2" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li>
                            <a href="/admin-fe/dashboard" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-400 mx-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <p class="text-sm font-medium text-gray-500">Package</p>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="w-full overflow-auto mt-10">
                <table class="table-auto border-collapse w-full text-left text-xs md:text-sm lg:text-base">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="border px-4 py-2">No.</th>
                            <th class="border px-4 py-2">Package Type</th>
                            <th class="border px-4 py-2">Description</th>
                            <th class="border px-4 py-2">Pricelist Name</th>
                            <th class="border px-4 py-2">Price</th>
                            <th class="border px-4 py-2">Discount (%)</th>
                            <th class="border px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">1.</td>
                            <td class="border px-4 py-2">Wedding</td>
                            <td class="border px-4 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eos porro ipsam voluptatum.</td>
                            <td class="border px-4 py-2">Wedding 1</td>
                            <td class="border px-4 py-2">Rp.5.000.000</td>
                            <td class="border px-4 py-2">0</td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2 justify-center">
                                    <!-- View Icon -->
                                    <a href="/admin-fe/package/show" class="text-blue-500 hover:text-blue-700" aria-label="View">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 4.5c4.97 0 9.15 3.41 10.62 8.16-.86 2.9-3.49 5.34-7.14 6.73-.68.26-1.34.37-2.01.37s-1.34-.12-2.01-.37c-3.65-1.39-6.28-3.83-7.14-6.73C2.85 7.91 7.03 4.5 12 4.5zm0-1.5C6.5 3 2.28 7.13 1 11.67c1.32 5.1 6.08 8.33 11 8.33s9.68-3.22 11-8.33C21.72 7.13 17.5 3 12 3zm0 7.5c-1.65 0-3 1.35-3 3s1.35 3 3 3 3-1.35 3-3-1.35-3-3-3z" />
                                        </svg>
                                    </a>

                                    <!-- Edit Icon -->
                                    <a href="/admin-fe/package/edit" class="text-green-500 hover:text-green-700" aria-label="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M16.5 3c.57 0 1.13.22 1.56.64l2.3 2.3c.87.87.87 2.28 0 3.15l-1.36 1.36-5.45-5.45 1.36-1.36c.44-.43 1-.64 1.59-.64zm-1.41 5.12L5 18.21V21h2.79l10.09-10.09-2.79-2.79z" />
                                        </svg>
                                    </a>

                                    <!-- Delete Icon -->
                                    <button disabled class="opacity-50 cursor-not-allowed text-red-500" aria-label="Delete">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Sub-row 1 -->
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2">Wedding 2</td>
                            <td class="border px-4 py-2">Rp.7.000.000</td>
                            <td class="border px-4 py-2">0</td>
                            <td class="border px-4 py-2"></td>
                        </tr>
                        <!-- Sub-row 2 -->
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2">Wedding 3</td>
                            <td class="border px-4 py-2">Rp.9.499.000</td>
                            <td class="border px-4 py-2">5</td>
                            <td class="border px-4 py-2"></td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2">2.</td>
                            <td class="border px-4 py-2">Prewedding</td>
                            <td class="border px-4 py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eos porro ipsam voluptatum.</td>
                            <td class="border px-4 py-2">Prewedding 1</td>
                            <td class="border px-4 py-2">Rp.1.500.000</td>
                            <td class="border px-4 py-2">0</td>
                            <td class="border px-4 py-2">
                                <div class="flex gap-2 justify-center">
                                    <!-- View Icon -->
                                    <a href="/admin-fe/package/show" class="text-blue-500 hover:text-blue-700" aria-label="View">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12 4.5c4.97 0 9.15 3.41 10.62 8.16-.86 2.9-3.49 5.34-7.14 6.73-.68.26-1.34.37-2.01.37s-1.34-.12-2.01-.37c-3.65-1.39-6.28-3.83-7.14-6.73C2.85 7.91 7.03 4.5 12 4.5zm0-1.5C6.5 3 2.28 7.13 1 11.67c1.32 5.1 6.08 8.33 11 8.33s9.68-3.22 11-8.33C21.72 7.13 17.5 3 12 3zm0 7.5c-1.65 0-3 1.35-3 3s1.35 3 3 3 3-1.35 3-3-1.35-3-3-3z" />
                                        </svg>
                                    </a>

                                    <!-- Edit Icon -->
                                    <a href="/admin-fe/package/edit" class="text-green-500 hover:text-green-700" aria-label="Edit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M16.5 3c.57 0 1.13.22 1.56.64l2.3 2.3c.87.87.87 2.28 0 3.15l-1.36 1.36-5.45-5.45 1.36-1.36c.44-.43 1-.64 1.59-.64zm-1.41 5.12L5 18.21V21h2.79l10.09-10.09-2.79-2.79z" />
                                        </svg>
                                    </a>

                                    <!-- Delete Icon -->
                                    <button class="opacity-50 cursor-pointer text-red-500 hover:text-red-700" aria-label="Delete" onclick="document.getElementById('deleteModal').classList.remove('hidden')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Sub-row 3 -->
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2">Prewedding 2</td>
                            <td class="border px-4 py-2">Rp.2.000.000</td>
                            <td class="border px-4 py-2">0</td>
                            <td class="border px-4 py-2"></td>
                        </tr>
                        <!-- Sub-row 4 -->
                        <tr class="hover:bg-gray-100">
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2"></td>
                            <td class="border px-4 py-2">Prewedding 3</td>
                            <td class="border px-4 py-2">Rp.2.500.000</td>
                            <td class="border px-4 py-2">5</td>
                            <td class="border px-4 py-2"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                <!-- Pagination -->
            <div class="flex justify-center mt-4">
                <nav aria-label="Page navigation">
                    <ul class="inline-flex items-center space-x-1">
                        <li>
                            <button class="px-3 py-1 border rounded-md bg-gray-200 text-gray-600 hover:bg-gray-300" aria-label="Previous">
                                &laquo;
                            </button>
                        </li>
                        <li><button class="px-3 py-1 border rounded-md bg-blue-500 text-white">1</button></li>
                        <li><button class="px-3 py-1 border rounded-md bg-white text-gray-600 hover:bg-gray-100">2</button></li>
                        <li><button class="px-3 py-1 border rounded-md bg-white text-gray-600 hover:bg-gray-100">3</button></li>
                        <li>
                            <button class="px-3 py-1 border rounded-md bg-gray-200 text-gray-600 hover:bg-gray-300" aria-label="Next">
                                &raquo;
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        </div>
    <!-- Hero section end -->

    <div id="deleteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <!-- Modal Content -->
        <div class="bg-white rounded-lg w-11/12 md:w-1/3 p-6">
            <h2 class="text-lg font-semibold text-gray-800">Delete Confirmation</h2>
            <p class="mt-2 text-sm text-gray-600">
                Are you sure you want to delete this data? This action cannot be undone.
            </p>

            <!-- Buttons -->
            <div class="mt-4 flex justify-end gap-2">
                <!-- Cancel Button -->
                <button
                    class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600"
                    onclick="document.getElementById('deleteModal').classList.add('hidden')">
                    Cancel
                </button>

                <!-- Confirm Delete Button -->
                <button
                    class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">
                    Confirm Delete
                </button>
            </div>
        </div>
    </div>

    <!-- Script to Show Modal -->
    <script>
        // Function to show the modal
        function showModal() {
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        // Example of triggering modal to show (you can call this in the 'Delete' button onclick)
        document.getElementById('deleteButton').addEventListener('click', showModal);
    </script>


@endsection
