@extends('layouts.vertical', ['title' => 'User Plans', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')


<div class="mt-6">
<div class="flex gap-4">
    <div class="flex-1">
      
        <div class="card h-96"> 
            <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                <h2 class="text-xl font-bold">Add Plan</h2>
                <hr class="w-full border-t border-gray-300 mt-2">
                <form class="w-full">
                    
                   <div class="w-full">
                        <label for="email" class="block text-sm font-medium text-gray-700">Name* </label>
                        <input type="email" id="name" name="email" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="name">
                    </div>
                    <div class="w-full">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" name="description" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder=""></textarea>
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
        
    <div class="flex items-center gap-2 p-6">
        <select class="form-select text-sm border-gray-300 rounded-lg">
            <option value="" disabled selected>Bulk Actions</option>
            <option value="">Delete</option>
        </select>
        <button type="button" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90 mr-6">
            Apply
        </button>
                <input type="text" placeholder="Search by name" class="form-input text-sm border-gray-500 rounded-lg py-2 px-2 w-48" />
                <button type="button" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">
                    Search
                </button>
    </div>

        <div class="card h-96"> 
            <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                  
            <div class="mt-6">
                <div class="card h-96 overflow-hidden">
                    <div class="relative h-full overflow-y-auto">
                        <table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                        <input type="checkbox" id="select-all" class="form-checkbox -5 w-5 text-blue-600"/>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">ID</th>				
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Name</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200"> For Role</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Price</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Annual Price</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Duration</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Max Services</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Status</th>
                                </tr>     
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="py-4 px-3 text-sm">
                                        <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">#5</td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <a href="{{ route('second', ['userPlan', 'edit-plan']) }}" class="">
                                                        Ajeet Singh
                                                    </a>
                                                </div>
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">Vendor</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">$23</td>                                  
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">$345</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">1 month</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">50</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">publish</td>
                                </tr>       

                                <tr>
                                    <td class="py-4 px-3 text-sm">
                                        <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">#4</td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <a href="{{ route('second', ['userPlan', 'edit-plan']) }}" class="">
                                                        Aman
                                                    </a>
                                                </div>
                                    </td>                                    <td class="whitespace-nowrap py-4 px-3 text-sm">Vendor</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">$21</td>                                  
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">$34</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">2 month</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">40</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">publish</td>
                                </tr>  
                                
                                <tr>
                                    <td class="py-4 px-3 text-sm">
                                        <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">#3</td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <a href="{{ route('second', ['userPlan', 'edit-plan']) }}" class="">
                                                        Akash
                                                    </a>
                                                </div>
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">Vendor</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">$20</td>                                  
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">$45</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">6 month</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">60</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">publish</td>
                                </tr>  
                                <tr>
                                    <td class="py-4 px-3 text-sm">
                                        <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">#2</td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <a href="{{ route('second', ['userPlan', 'edit-plan']) }}" class="">
                                                        Prashant
                                                    </a>
                                                </div>
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">Vendor</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">$68</td>                                  
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">$357</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">1 month</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">48</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">publish</td>
                                </tr>  
                                <tr>
                                    <td class="py-4 px-3 text-sm">
                                        <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">#1</td>
                                    <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <a href="{{ route('second', ['userPlan', 'edit-plan']) }}" class="">
                                                        Viraj
                                                    </a>
                                                </div>
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">Vendor</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">$56</td>                                  
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">$456</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">1 month</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">78</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">publish</td>
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
