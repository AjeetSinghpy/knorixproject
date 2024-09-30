@extends('layouts.vertical', ['title' => ' Edit:Attribute term Name', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
            <div class="flex justify-center items-center mt-6">
                <div class="card w-full max-w-md p-6">
                    <h4>Term Content</h4>
                    <br>
                    <div class="mb-4 w-full">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Term name">
                            Class Icon - get icon in fontawesome.com or icofont.com

                        </div>

                        <div class="w-1/2 mb-4">
                                <label for="photo" class="block text-sm font-medium text-gray-700">Upload image</label>
                                <input type="file" id="photo" name="photo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                All the Term's image are same size
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
