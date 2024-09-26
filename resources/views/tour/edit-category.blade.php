@extends('layouts.vertical', ['title' => 'Edit : Category Name', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="flex gap-4">
        

        <div class="flex-1 flex flex-col gap-4">
            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Content</h2>
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


