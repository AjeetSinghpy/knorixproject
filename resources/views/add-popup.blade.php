@extends('layouts.vertical', ['title' => 'Add New Popup', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="flex gap-4">
        

        <div class="flex-1 flex flex-col gap-4">
            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Content</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Title*</label>
                            <input type="text" id="title" name="title" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="Enter title">
                        </div>

                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                            <textarea id="content" name="content" required
                                class="mit-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                placeholder="Enter content here" rows="4"></textarea>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Show on</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
  
                            <div class="mb-4">
                                <label for="hotelName" class="block text-sm font-medium text-gray-700">Include URLs</label>
                                <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            </div>

                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-700">Wildcard allowed. Eg: */checkout/*</span>
                                <button type="submit" class="btn bg-success/25 text-sm font-medium text-success hover:text-black hover:bg-success">
                                    Add item
                                </button>
                            </div>
                            <br>

                            <hr>

                            <div class="mb-4">
                                <label for="hotelName" class="block text-sm font-medium text-gray-700">Exclude URLs</label>
                            </div>

                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-700">Wildcard allowed. Eg: */checkout/*</span>
                                <button type="submit" class="btn bg-success/25 text-sm font-medium text-success hover:text-black hover:bg-success">
                                    Add item
                                </button>
                            </div>


                    </form>
                </div>
            </div>

            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Schedule</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                    <div class="flex items-center gap-4 mb-4">

                            <div class="w-full mb-4">
                                <label for="price" class="block text-sm font-medium text-gray-700">Show Every</label>
                                    <input type="number" id="price" name="price" min="1"  step="1" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="1">
                            </div>

                            <div class="w-full mb-4">
                                <label for="role" class="block text-sm font-medium text-gray-700">Type</label>
                                <select id="role" name="role" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    
                                    <option value="manager">Day</option>
                                    <option value="employee">Month</option>
                                    <option value="employee">Year</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="flex-1">
            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Pulish</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">

                    <div class="flex flex-col gap-2 mt-4">
                        <label class="flex items-center">
                            <input type="radio" name="status" value="publish" class="form-radio h-5 w-5 text-blue-600" />
                            <span class="ml-2 text-sm">Publish</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="status" value="draft" class="form-radio h-5 w-5 text-blue-600" />
                            <span class="ml-2 text-sm">Draft</span>
                        </label>
                    </div>

                    <div class="flex justify-start gap-4 mt-4">
                        <button type="submit" class="btn bg-success/25 text-sm font-medium text-success hover:text-black hover:bg-success">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection


