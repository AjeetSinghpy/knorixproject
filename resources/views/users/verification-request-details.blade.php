@extends('layouts.vertical', ['title' => 'Verify-Request:User Name', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')

<div class="mt-6">
    <div class="card">
        <div class="p-6">
       
            <h2 class="text-xl font-bold mb-4">Data</h2>
            <hr class="w-full border-t border-gray-300 mb-4">
            
          
            <div class="relative h-64 overflow-y-auto">
                <table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                    <thead>
                        <tr>					
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">No</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Information</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Mark As Completed</th>
              
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                     
                        <tr> 
                            <td class="whitespace-nowrap px-3 py-4 text-sm font-medium text-gray-900 dark:text-gray-200">1</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 dark:text-gray-200">
                                <div>
                                    <span>Phone: 99696995</span><br>
                                    <span class="text-sm text-red-500">Not Verified</span>
                                </div>
                            </td>                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 dark:text-gray-200">
                              <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                            </td>
                            
                        </tr>
                    
                        <tr> 
                            <td class="whitespace-nowrap px-3 py-4 text-sm font-medium text-gray-900 dark:text-gray-200">2</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 dark:text-gray-200">
                                <div>
                                    <span>Id Card: Download </span><br>
                                    <span class="text-sm text-red-500">Not Verified</span>
                                </div>
                            </td>                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-900 dark:text-gray-200">
                              <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
