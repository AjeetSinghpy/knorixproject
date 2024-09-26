@extends('layouts.vertical', ['title' => 'Languages', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')


<div class="mt-6">
<div class="flex gap-4">
    <div class="flex-1">
      
        <div class="card h-96"> 
            <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                <h2 class="text-xl font-bold">Add Subscribers</h2>
                <hr class="w-full border-t border-gray-300 mt-2">
                <form class="w-full">
                    
                   <div class="w-full">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email </label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Email">
                    </div>
                    <div class="w-full">
                        <label for="email" class="block text-sm font-medium text-gray-700">First name</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="First name">
                    </div>

                    <div class="w-full">
                        <label for="email" class="block text-sm font-medium text-gray-700">Last name</label>
                        <input type="email" id="email" name="email" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Last name">
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
            <option value="delete">Publish</option>
            <option value="delete">Move to Draft</option>
            <option value="delete">Delete</option>
        </select>
        <button type="button" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90 mr-6">
            Apply
        </button>
        <div class="flex gap-2">
        </div>
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
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Locale</th>
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
                                            <a href="{{ route('second', ['tools', 'edit-language']) }}" class="whitespace-nowrap py-4 px-3 text-sm">
                                                English
                                            </a>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">en</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">Publish</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm">12/04/2034</td>
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
