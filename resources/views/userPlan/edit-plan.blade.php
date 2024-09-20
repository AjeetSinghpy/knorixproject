@extends('layouts.vertical', ['title' => 'Edit:Plan Name', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')


<div class="mt-6">
<div class="flex gap-4">
    <div class="flex-1">
      
        <div class="card h-96"> 
            <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                <h2 class="text-xl font-bold">Plan Content</h2>
              
                <form class="w-full">
                    
                   <div class="w-full">
                        <label for="email" class="block text-sm font-medium text-gray-700">Name* </label>
                        <input type="email" id="name" name="email" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Email">
                    </div>
                    <div class="w-full">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Enter description here"></textarea>
                    </div>

                    <div class="w-full mb-4">
                    <label for="role" class="block text-sm font-medium text-gray-700">For Role*</label>
                    <select id="role" name="role" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option value="" disabled selected>--Plesase Select--</option>
                        <option value="manager">Administrator</option>
                        <option value="employee">Vendor</option>
                        <option value="employee">Customer</option>
                    </select>
                </div>

                <div class="w-full mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" id="price" name="price"  step="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="free">
                </div>

                <div class="w-full mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Aannual Price</label>
                        <input type="number" id="price" name="price"   step="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="">
                </div>

                <div class="w-full mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Duration *</label>
                        <input type="number" id="price" name="price" min="1"  step="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="">
                </div>

                <div class="w-full mb-4">
                    <label for="role" class="block text-sm font-medium text-gray-700">Duration Type*</label>
                    <select id="role" name="role" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        <option value="" disabled selected>Day</option>
                        <option value="manager">Week</option>
                        <option value="employee">Month</option>
                        <option value="employee">Year</option>
                    </select>
                </div>
            
                <div class="w-full mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Max Services</label>
                        <input type="number" id="price" name="price" min="0"  step="0" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Unlimited">
                            How many publish services user can post
                        </div>

                        <div class="w-full mb-4">
                            <label for="role" class="block text-sm font-medium text-gray-700">Status</label>
                            <select id="role" name="role" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="" disabled selected>Publish</option>
                                <option value="manager">Draft</option>
                            </select>
                        </div>
                </form>
            </div>
        </div>
    </div>

    

    <div class="flex-1">
        
        <div class="card h-96"> 
            <div class="flex flex-wrap justify-between items-center gap-2 p-6">

                <h2 class="text-xl font-bold">Publish</h2>
                <hr class="w-full border-t border-gray-300 mt-2">
                  
                <br>
                    <div class="flex justify-start gap-4">
                    <button type="submit" class="btn bg-success/25 text-sm font-medium text-success hover:text-black hover:bg-success">
                    Save Changes  </button>
                </div>
        </div>
    </div>
</div>
@endsection
