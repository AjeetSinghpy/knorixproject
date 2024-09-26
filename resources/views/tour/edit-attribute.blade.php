@extends('layouts.vertical', ['title' => ' Edit:Attribute Name', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
            <div class="flex justify-center items-center mt-6">
                <div class="card w-full max-w-md p-6">
                    <h4>Attribute Content</h4>
                    <br>
                    <div class="mb-4 w-full">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="attribute name">
                        </div>

                        <div class="w-full mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Position Order</label>
                            <input type="number" id="price" name="price" min="0"  step="1" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="0">
                                The position will be used to order in the Filter</br> page search. The greater number is priority
                       </div>

                       <div class="w-full mb-4">
                            <label for="hide_service" class="block text-sm font-medium text-gray-700">Hide in details service</label>
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                        Enable hide
                        </div>

                        <div class="w-full mb-4">
                            <label for="hide_service" class="block text-sm font-medium text-gray-700">Hide in filter search</label>
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                        Enable hide
                        </div>
                </div>
            </div>

            <hr class="my-6">
            <div class="flex justify-end w-full px-6">
                <button type="submit" class="btn bg-success/25 text-sm font-medium text-success hover:text-white hover:bg-success">
                    Save Changes
                </button>
            </div>
@endsection
