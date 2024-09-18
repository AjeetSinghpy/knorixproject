@extends('layouts.vertical', ['title' => 'Tickets', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
<div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
	<div class="card">
		<div class="p-5">
			<div class="flex justify-between">
				<div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-primary/25 ">
					<i class="mgc_tag_line text-4xl text-primary"></i>
				</div>
				<div class="text-right">
					<h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-gray-300">3947</h3>
					<p class="text-gray-500 mb-1 truncate dark:text-gray-400">Total Tickets</p>
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="p-5">
			<div class="flex justify-between">
				<div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-yellow-100">
					<i class="mgc_alarm_2_line text-4xl text-yellow-500"></i>
				</div>
				<div class="text-right">
					<h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-gray-300">624</h3>
					<p class="text-gray-500 mb-1 truncate dark:text-gray-400">Pending Tickets</p>
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="p-5">
			<div class="flex justify-between">
				<div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-green-100">
					<i class="mgc_check_line text-4xl text-green-500"></i>
				</div>
				<div class="text-right">
					<h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-gray-300">3195</h3>
					<p class="text-gray-500 mb-1 truncate dark:text-gray-400">Closed Tickets</p>
				</div>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="p-5">
			<div class="flex justify-between">
				<div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-red-100">
					<i class="mgc_delete_line text-4xl text-red-500"></i>
				</div>
				<div class="text-right">
					<h3 class="text-gray-700 mt-1 text-2xl font-bold mb-5 dark:text-gray-300">128</h3>
					<p class="text-gray-500 mb-1 truncate dark:text-gray-400">Deleted Tickets</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="mt-6">
    <div class="card">
        <div class="flex flex-wrap justify-between items-center gap-2 p-6">
            <h2 class="text-xl font-bold">Add New Hotel</h2>
            <form class="w-full">
                <div class="mb-4">
                    <label for="hotelName" class="block text-sm font-medium text-gray-700">Hotel Name</label>
                    <input type="text" id="hotelName" name="hotelName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter hotel name">
                </div>
                <div class="mb-4">
                    <label for="hotelLocation" class="block text-sm font-medium text-gray-700">Location</label>
                    <input type="text" id="hotelLocation" name="hotelLocation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter location">
                </div>
                <div class="mb-4">
                    <label for="hotelRating" class="block text-sm font-medium text-gray-700">Rating</label>
                    <input type="number" id="hotelRating" name="hotelRating" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter hotel rating (1-5)" min="1" max="5">
                </div>
                <div class="mb-4">
                    <label for="hotelPrice" class="block text-sm font-medium text-gray-700">Price Per Night</label>
                    <input type="text" id="hotelPrice" name="hotelPrice" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter price per night">
                </div>
                <div class="mb-4">
                    <label for="hotelFacilities" class="block text-sm font-medium text-gray-700">Facilities</label>
                    <input type="text" id="hotelFacilities" name="hotelFacilities" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter facilities">
                </div>
                <div class="flex gap-4">
                    <button type="submit" class="btn bg-success/25 text-sm font-medium text-success hover:text-white hover:bg-success">
                        <i class="mgc_add_circle_line me-2"></i> Add Hotel
                    </button>
                    <button type="button" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection