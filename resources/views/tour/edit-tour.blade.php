@extends('layouts.vertical', ['title' => ' Edit:Tour Name', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="flex gap-4">
        <div class="flex-1">
            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Tour Information</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                        <div class="flex items-center mb-4"> 
                            <a href="{{ route('second', ['tour', 'add-tour']) }}" class="ml-2 text-lg font-semibold text-blue-600 hover:text-blue-800">
                                General
                            </a>
                        </div>
                        <div class="flex items-center mb-4"> 
                            <a href="{{ route('second', ['userPlan', 'edit-plan']) }}" class="ml-2 text-lg font-semibold text-blue-600 hover:text-blue-800">
                                Location
                            </a>
                        </div>

                        <div class="flex items-center mb-4"> 
                            <a href="{{ route('second', ['userPlan', 'edit-plan']) }}" class="ml-2 text-lg font-semibold text-blue-600 hover:text-blue-800">
                                Pricing
                            </a>
                        </div>
                        <div class="flex items-center mb-4">
                            <a href="{{ route('second', ['userPlan', 'edit-plan']) }}" class="ml-2 text-lg font-semibold text-blue-600 hover:text-blue-800">
                                Availability
                            </a>
                        </div>
                        <div class="flex items-center mb-4"> 
                            <a href="{{ route('second', ['userPlan', 'edit-plan']) }}" class="ml-2 text-lg font-semibold text-blue-600 hover:text-blue-800">
                                Status
                            </a>
                        </div>
                        <div class="flex items-center mb-4">
                            <a href="{{ route('second', ['userPlan', 'edit-plan']) }}" class="ml-2 text-lg font-semibold text-blue-600 hover:text-blue-800">
                                SEO
                            </a>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

             <div class="flex-1 flex flex-col gap-4">
                <div class="card">
                    <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                        <h2 class="text-xl font-bold">Tour Content</h2>
                        <hr class="w-full border-t border-gray-300 mt-2">
                        <form class="w-full">
                           
                            <div class="w-full mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title *</label>
                                <input type="text" id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter the title">
                            </div>
                            <div class="w-full mb-4">
                                <label for="content" class="block text-sm font-medium text-gray-700">Content *</label>
                                <textarea id="content" name="content" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter the content"></textarea>
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="category" class="block text-sm font-medium text-gray-700">Category *</label>
                                <select id="category" name="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">--Select Category--</option>
                                    <option value="adventure">Adventure</option>
                                    <option value="leisure">Leisure</option>
                                    <option value="cultural">Cultural</option>
                                </select>
                            </div>
                            <div class="w-full mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Youtube vedio</label>
                                <input type="text" id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter the title">
                            </div>

                            <div class="flex items-center gap-4 mb-4">

                                <div class="w-full mb-4">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Tour Min People</label>
                                        <input type="number" id="price" name="price" min=""  step="1" required
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="tour min people">
                                </div>

                                <div class="w-full mb-4">
                                    <label for="role" class="block text-sm font-medium text-gray-700">Tour Max People</label>
                                    <input type="number" id="price" name="price" min=""  step="1" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="tour max people">
                                </div>
                            </div>

                            <div class="w-full mb-4">
                                <h3 class="">FAQs</h3>   
                                <div class="border border-gray-300 p-4 rounded-md">
                                    <table class="w-full table-auto border-separate border-spacing-4">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-sm font-medium text-gray-700">Title</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Content</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="border border-gray-300 p-2">When and where does the tour end?</td>
                                                <td class="border border-gray-300 p-2"> Content</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 p-2">When and where does the tour end?</td>
                                                <td class="border border-gray-300 p-2">Content</td>
                                            </tr>

                                            <tr>
                                                <td class="border border-gray-300 p-2"> Title</td>
                                                <td class="border border-gray-300 p-2"> Content</td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>     
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Item</button>
                            </div>

                            <div class="w-full mb-4">
                                <h3 class="">Include</h3>   
                                <div class="border border-gray-300 p-4 rounded-md">
                                    <table class="w-full table-auto border-separate border-spacing-4">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-sm font-medium text-gray-700">Title</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <tr>
                                                <td class="border border-gray-300 p-2">Specialized bilingual guide</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 p-2">Private Transport</td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>     
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Item</button>
                            </div>

                            <div class="w-full mb-4">
                                <h3 class="">Exclude</h3>   
                                <div class="border border-gray-300 p-4 rounded-md">
                                    <table class="w-full table-auto border-separate border-spacing-4">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-sm font-medium text-gray-700">Title</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="border border-gray-300 p-2">Additional Services</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 p-2">Insurance</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 p-2">Drink</td>
                                            </tr>
                                            <tr>
                                                <td class="border border-gray-300 p-2">Tickets</td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>     
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Item</button>
                            </div>

                            <div class="w-full mb-4">
                                <h3 class="">Itinerary</h3>   
                                <div class="border border-gray-300 p-4 rounded-md">
                                    <table class="w-full table-auto border-separate border-spacing-4">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-sm font-medium text-gray-700">Image</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Title-Desc</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Content</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="border border-gray-300 p-2">
                                                <img src="{{ asset('path/to/image1.jpg') }}" alt="Image 1" class="w-16 h-16 object-cover">
                                            </td>
                                            <td class="border border-gray-300 p-2">
                                                Static Title 1 - Static Description 1
                                            </td>
                                            <td class="border border-gray-300 p-2">
                                                This is the static content for item 1.
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="border border-gray-300 p-2">
                                                <img src="{{ asset('path/to/image1.jpg') }}" alt="Image 2" class="w-16 h-16 object-cover">
                                            </td>
                                            <td class="border border-gray-300 p-2">
                                                Static Title 1 - Static Description 1
                                            </td>
                                            <td class="border border-gray-300 p-2">
                                                This is the static content for item 1.
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="border border-gray-300 p-2">
                                                <img src="{{ asset('path/to/image1.jpg') }}" alt="Image 3" class="w-16 h-16 object-cover">
                                            </td>
                                            <td class="border border-gray-300 p-2">
                                                Static Title 1 - Static Description 1
                                            </td>
                                            <td class="border border-gray-300 p-2">
                                                This is the static content for item 1.
                                            </td>
                                        </tr>

                                        </tbody>
                                        
                                    </table>     
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Item</button>
                            </div>

                            <div class="w-1/2 mb-4">
                                <label for="photo" class="block text-sm font-medium text-gray-700">Upload Photo</label>
                                <input type="file" id="photo" name="photo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </form>
                     </div>
             </div>

            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Vendor</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                         <div class="w-full mb-4">
                                <h3 class="">Education</h3>   
                                <div class="border border-gray-300 p-4 rounded-md">
                                    <table class="w-full table-auto border-separate border-spacing-4">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-sm font-medium text-gray-700">Name</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Content</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Distance</th>
                                            </tr>
                                        </thead>
                                        
                                    </table>     
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Item</button>
                            </div>

                            <div class="w-full mb-4">
                                <h3 class="">Health</h3>   
                                <div class="border border-gray-300 p-4 rounded-md">
                                    <table class="w-full table-auto border-separate border-spacing-4">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-sm font-medium text-gray-700">Name</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Content</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Distance</th>
                                            </tr>
                                        </thead>
                                        
                                    </table>     
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Item</button>
                            </div>

                            <div class="w-full mb-4">
                                <h3 class="">Transportation</h3>   
                                <div class="border border-gray-300 p-4 rounded-md">
                                    <table class="w-full table-auto border-separate border-spacing-4">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-sm font-medium text-gray-700">Name</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Content</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Distance</th>
                                            </tr>
                                        </thead>
                                        
                                    </table>     
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Item</button>
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


