@extends('layouts.vertical', ['title' => ' Add New Role', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
<div class="flex justify-center items-center mt-6">
    <div class="card w-full max-w-md p-6">
        <h4>Role Content</h4>
        <br>
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" placeholder="Enter name">
        </div>

        <div class="mb-4">
            <label for="code" class="block text-sm font-medium text-gray-700">Code</label>
            <input type="text" name="code" id="code" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" placeholder="Enter code">
            <span class="text-sm text-gray-500">Should be unique and letters only</span>
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
