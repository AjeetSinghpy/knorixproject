  <@extends('layouts.vertical', ['title' => 'Manage Fields', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')


<div class="mt-6">
    <div class="flex items-center gap-2 p-6">
        <select class="form-select text-sm border-gray-300 rounded-lg">
            <option value="" disabled selected>Bulk Actions</option>
            <option value="delete">Delete</option>
        </select>
        <button type="button" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90 mr-6">
            Apply
        </button>

</div>

<div class="flex gap-4">
    <div class="flex-1">
      
        <div class="card h-96"> 
            <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                <h2 class="text-xl font-bold">Add New Field</h2>
                <hr class="w-full border-t border-gray-300 mt-2">
                <form class="w-full">
                   
                        <div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">Field Id *</label>
                            <input type="text" id="hoteFieldIdlName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                            <span class="text-sm text-gray-500">Must be unique. Only accept letter and number, dash, underscore, without space</span>
                        </div>

                        <div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">Field Name *</label>
                        </div>

                        <div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">English</label>
                            <input type="text" id="hoteFieldIdlName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                        </div>

                        <div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">Japanese</label>
                            <input type="text" id="hoteFieldIdlName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                        </div>
                        <div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">Egyptian</label>
                            <input type="text" id="hoteFieldIdlName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                        </div><div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">Ina</label>
                            <input type="text" id="hoteFieldIdlName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                        </div>
                        <div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">France</label>
                            <input type="text" id="hoteFieldIdlName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                        </div>
                        <div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">Arabic</label>
                            <input type="text" id="hoteFieldIdlName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                        </div>
                        <div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">Türkçe</label>
                            <input type="text" id="hoteFieldIdlName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                        </div>


                        <div class="w-1/2 mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700">Type *</label>
                            <select id="type" name="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="" disabled selected>Text</option>
                                <option value="option1">Phone</option>
                                <option value="option2">Number</option>
                                <option value="option3">File Attachment</option>
                                <option value="option2">Multi Files Attachment</option>
                            </select>
                        </div>

                        <div class="w-1/2 mb-4">
                            <label class="block text-sm font-medium text-gray-700">For Roles?*</label>
                            <div class="mt-1 space-y-2">
                                <div class="flex items-center">
                                    <input type="checkbox" id="administrator" name="roles[]" value="role" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500 rounded">
                                    <label for="role" class="ml-2 text-sm text-gray-700">Aadmministrator</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="vendor" name="roles[]" value="manager" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500 rounded">
                                    <label for="manager" class="ml-2 text-sm text-gray-700">Vendor</label>
                                </div>
                                <div class="flex items-center">
                                    <input type="checkbox" id="Customer" name="roles[]" value="admin" class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500 rounded">
                                    <label for="admin" class="ml-2 text-sm text-gray-700">Customer</label>
                                </div>
                                <!-- Add more checkboxes as needed -->
                            </div>
                        </div>

                        <div class="w-1/2 mb-4">
                            <label for="type" class="block text-sm font-medium text-gray-700">Is Required *</label>
                            <select id="type" name="type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="" disabled selected>No</option>
                                <option value="option1">Yes</option>
                            </select>
                        </div>

                        <div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">Order</label>
                            <input type="text" id="hoteFieldIdlName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="0">
                        </div>

                        <div class="w-1/2 mb-4">
                            <label for="FielId" class="block text-sm font-medium text-gray-700">Icon</label>
                            <input type="text" id="hoteFieldIdlName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Eg :fa fa-phone">
                        </div>

                                            
                          <hr class="w-full border-t border-gray-300 mt-2">
                            <br>
                            <div class="flex justify-start gap-4">
                                <button type="submit" class="btn bg-success/25 text-sm font-medium text-success hover:text-black hover:bg-success">
                                    Add New
                                </button>
                            </div>
                </form>
            </div>
        </div>
    </div>

    <div class="flex-1">

        <div class="card h-96"> 
            <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Add New Field</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                <div class="card h-96 overflow-hidden">
                    <div class="relative h-full overflow-y-auto">
                
                        <table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                        <input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/>
                                    </th>					
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">ID</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Icon</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Type</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">For Roles</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Order</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Required</th>
                                </tr>
                                
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <!-- Add sample data rows as needed -->
                                <!-- Display only the first four rows initially -->
                                <tr>
                                    <td class="py-4 px-3 text-sm">
                                        <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                    </td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Phone</div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">Ajeet</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Text</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Administrator</td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">7</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">No</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <a href="{{ route('second', ['users', 'edit-verification']) }}" class="text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="py-4 px-3 text-sm">
                                        <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                    </td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Phone</div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">*</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">Akash</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Text</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Vendor</td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">8</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">No</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <a href="{{ route('second', ['users', 'edit-verification']) }}" class="text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-3 text-sm">
                                        <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                    </td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Phone</div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">#</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">Aman</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Text</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Customer</td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">6</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Yes</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <a href="{{ route('second', ['users', 'edit-verification']) }}" class="text-blue-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
