@extends('layouts.vertical', ['title' => 'Tour Categories', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')


<div class="mt-6">
    <div class="flex gap-4">
        <div class="flex-1">
        
            <div class="card h-96"> 
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Add Categories</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                        
                        <div class="mb-4 w-full">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter category name">
                        </div>

                        <div class="mb-4 w-full">
                            <label for="parent" class="block text-sm font-medium text-gray-700">Parent Category</label>
                            <select id="parent" name="parent" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                <option value="">-- Please Select --</option>
                                <option value="1">Extreme Adventure</option>
                                <option value="2">Mountaineering</option>
                                <option value="3">City trips</option>
                                <option value="2">Ecotourism</option>
                                <option value="2">Escorted Tour</option>
                                <option value="2">Ligula</option>
                            </select>
                        </div>

                    
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
                    <option value="delete">Delete</option>
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
                                            <input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/>
                                        </th>					
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Name</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Slug</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Status</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Date</th>
                                    </tr>
                                    
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                        <td class="py-4 px-3 text-sm">
                                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <div class="whitespace-nowrap py-4 px-3 text-sm">
                                                        <a href="{{ route('second', ['tour', 'edit-category']) }}" class="text-blue-600 hover:text-blue-800">
                                                            Extreme Adventure
                                                        </a>
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Extreme Adventure</td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Publish</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">23/03/2024</td>                                  
                                    </tr>

                                    <tr>
                                        <td class="py-4 px-3 text-sm">
                                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <div class="whitespace-nowrap py-4 px-3 text-sm">
                                                        <a href="{{ route('second', ['tour', 'edit-category']) }}" class="text-blue-600 hover:text-blue-800">
                                                            Mountaineering
                                                        </a>
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Mountaineering</td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Publish</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">23/03/2024</td>                                  
                                    </tr>

                                    <tr>
                                        <td class="py-4 px-3 text-sm">
                                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <div class="whitespace-nowrap py-4 px-3 text-sm">
                                                        <a href="{{ route('second', ['tour', 'edit-category']) }}" class="text-blue-600 hover:text-blue-800">
                                                            City trips
                                                        </a>
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">City trips</td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Publish</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">23/03/2024</td>                                  
                                    </tr>


                                    <tr>
                                        <td class="py-4 px-3 text-sm">
                                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <div class="whitespace-nowrap py-4 px-3 text-sm">
                                                        <a href="{{ route('second', ['tour', 'edit-category']) }}" class="text-blue-600 hover:text-blue-800">
                                                            Ecotourism
                                                        </a>
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Ecotourism</td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Publish</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">23/03/2024</td>                                  
                                    </tr>

                                    <tr>
                                        <td class="py-4 px-3 text-sm">
                                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <div class="whitespace-nowrap py-4 px-3 text-sm">
                                                        <a href="{{ route('second', ['tour', 'edit-category']) }}" class="text-blue-600 hover:text-blue-800">
                                                            Escorted Tour
                                                        </a>
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Escorted Tour</td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Publish</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">23/03/2024</td>                                  
                                    </tr>

                                    <tr>
                                        <td class="py-4 px-3 text-sm">
                                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                                        </td>
                                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                                                <div class="flex items-center">
                                                    <div class="whitespace-nowrap py-4 px-3 text-sm">
                                                        <a href="{{ route('second', ['tour', 'edit-category']) }}" class="text-blue-600 hover:text-blue-800">
                                                            Ligula
                                                        </a>
                                                    </div>
                                                </div>
                                        </td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Ligula</td>
                                        <td class="whitespace-nowrap py-4 px-3 text-sm">Publish</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">23/03/2024</td>                                  
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
</div>
@endsection
