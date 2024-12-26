@extends('admin-fe.layouts.main')

@section('container-admin-fe')
    <!-- Hero section start -->
        <div class="container">
            <div class="mb-6">
                <h1 class="text-xl md:text-2xl lg:text-4xl text-primary-2 text-left">Edit Package</h1>
                <div class="h-[3px] w-full bg-primary-2 block mt-2"></div>
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
                                <a href="/admin-fe/package" class="text-sm font-medium text-gray-500 hover:text-gray-700">Package</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-gray-400 mx-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                                <p class="text-sm font-medium text-gray-500">Edit</p>
                            </div>
                        </li>
                    </ol>
                </nav>

            </div>

            <form accept-charset="UTF-8" action="#" method="POST" role="form" class="multi-action-form validate-form repeater" data-parsley-validate="" enctype="multipart/form-data">
            @csrf
            @include('admin-fe.package.partials.form')
            </form>
            <!-- Buttons -->
            <div class="flex justify-between mt-6">
                <a href="/admin-fe/package" class="py-2 px-6 md:px-16 lg:px-24 text-white bg-blue-600 hover:opacity-70 hover:shadow-md text-center rounded flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M4 2a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6.414a2 2 0 00-.586-1.414l-3.414-3.414A2 2 0 0012.586 2H4zm1 2a1 1 0 011-1h6.586L15 5.414V15a1 1 0 01-1 1H5a1 1 0 01-1-1V4zm4 10a2 2 0 100-4 2 2 0 000 4zM5 6h6v4H5V6z" />
                    </svg>
                    Save
                </a>
                <a href="/admin-fe/package" class="py-2 px-6 md:px-14 lg:px-20 text-white bg-red-600 hover:opacity-70 hover:shadow-md text-center rounded flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    Cancel
                </a>

            </div>
        </div>
    <!-- Hero section end -->
@endsection
