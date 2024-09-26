@extends('layouts.vertical', ['title' => 'Edit: User Name', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="flex gap-4">
        <div class="flex-1">
            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">User Info</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                        <!-- Form fields for the first card -->
                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="hotelName" class="block text-sm font-medium text-gray-700">Business Name</label>
                                <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter Business name">
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="hotelLocation" class="block text-sm font-medium text-gray-700">E-mail</label>
                                <input type="text" id="hotelLocation" name="hotelLocation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="hotelRating" class="block text-sm font-medium text-gray-700">User name</label>
                                <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter user name">
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="hotelName" class="block text-sm font-medium text-gray-700">First name</label>
                                <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter first name">
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="hotelLocation" class="block text-sm font-medium text-gray-700">Last name</label>
                                <input type="text" id="hotelLocation" name="hotelLocation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter last name">
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="hotelName" class="block text-sm font-medium text-gray-700">Phone Number</label>
                                <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter phone number">
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="hotelLocation" class="block text-sm font-medium text-gray-700">Birthday</label>
                                <input type="text" id="hotelLocation" name="hotelLocation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter date of birth">
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="hotelName" class="block text-sm font-medium text-gray-700">Address Line 1</label>
                                <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter address line 1">
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="hotelLocation" class="block text-sm font-medium text-gray-700">Address Line 2</label>
                                <input type="text" id="hotelLocation" name="hotelLocation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter addressline 2">
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="hotelName" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter city name">
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="hotelLocation" class="block text-sm font-medium text-gray-700">State</label>
                                <input type="text" id="hotelLocation" name="hotelLocation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter state name">
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="hotelName" class="block text-sm font-medium text-gray-700">Country</label>
                                <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter country name">
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="hotelLocation" class="block text-sm font-medium text-gray-700">Zip Code</label>
                                <input type="text" id="hotelLocation" name="hotelLocation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter zip code">
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-full mb-4">
                                <label for="biography" class="block text-sm font-medium text-gray-700">Biography</label>
                                <textarea id="biography" name="biography" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter a brief biography"></textarea>
                            </div>
                        </div>
                        <!-- Additional fields here... -->
                    </form>
                </div>
            </div>
        </div>

        <div class="flex-1 flex flex-col gap-4">
            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Publish</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                    <div class="w-1/2 mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <select id="status" name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="publish">Publish</option>
                            <option value="blocked">Blocked</option>
                        </select>
                    </div>
                    <div class="w-1/2 mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Role *</label>
                        <select id="status" name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="publish">--Select--</option>
                            <option value="blocked">Administrator</option>
                            <option value="blocked">Vendor</option>
                            <option value="blocked">Customer</option>
                        </select>
                    </div>
                    <div class="w-1/2 mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Email Verified? *</label>
                        <select id="status" name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="publish">No</option>
                            <option value="blocked">Yes</option>
                            
                        </select>
                    </div>
                        <!-- Additional fields here... -->
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Vendor</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                    <div class="w-1/2 mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700">Vendor Commission Type</label>
                        <select id="status" name="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="publish">Default</option>
                            <option value="blocked">Percent</option>
                            <option value="blocked">Amount</option>
                            <option value="blocked">Disable Amount</option>
                        </select>
                    </div>

                    <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="hotelRating" class="block text-sm font-medium text-gray-700">Vendor Commission Value</label>
                                <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Avatar</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                        
                        <div class="w-1/2 mb-4">
                            <label for="photo" class="block text-sm font-medium text-gray-700">Upload Photo</label>
                            <input type="file" id="photo" name="photo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <hr class="w-full border-t border-gray-300 mt-2">
        <br>
        <div class="flex justify-end gap-4">
            <button type="submit" class="btn bg-success/25 text-sm font-medium text-success hover:text-white hover:bg-success">
            Save Changes
            </button>
        </div>
@endsection


