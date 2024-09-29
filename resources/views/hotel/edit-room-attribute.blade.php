@extends('layouts.vertical', ['title' => ' Edit:Room Attribute', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
<div class="flex justify-center items-center mt-6">
    <div class="card w-full max-w-md p-6">
        <h4>Attribute Content</h4>
        <br>
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 p-2 block w-full border border-gray-300 rounded-md" placeholder="Enter name">
        </div>

      
    </div>
</div>

            <hr class="my-6">
            <div class="flex justify-end w-full px-6">
                <button type="submit" class="btn bg-success/25 text-sm font-medium text-success hover:text-white hover:bg-success">
                    Save
                </button>
            </div>
@endsection
