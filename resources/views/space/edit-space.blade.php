@extends('layouts.vertical', ['title' => 'Edit: Space', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="flex gap-4">
        

        <div class="flex-1 flex flex-col gap-4">
            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Space Content</h2>
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

						<div class="w-full mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Youtube vedio</label>
                                <input type="text" id="title" name="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Enter the title">
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
                                        
                                    </table>     
                                </div>
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
                    <h2 class="text-xl font-bold">Extra Information</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                        <div class="flex items-center gap-4 mb-4">

                            <div class="w-full mb-4">
                                <label for="price" class="block text-sm font-medium text-gray-700">No.Bed</label>
                                    <input type="number" id="price" name="price" min=""  step="1" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Ex:3">
                            </div>

                            <div class="w-full mb-4">
                                <label for="role" class="block text-sm font-medium text-gray-700">No.Bathroom</label>
                                <input type="number" id="price" name="price" min=""  step="1" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Ex: 5">
                            </div>

                            <div class="w-full mb-4">
                                <label for="role" class="block text-sm font-medium text-gray-700">Square</label>
                                <input type="number" id="price" name="price" min=""  step="1" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Ex: 100">
                            </div>
                        </div>



                        <div class="flex items-center gap-4 mb-4">

                            <div class="w-full mb-4">
                                <label for="price" class="block text-sm font-medium text-gray-700">Minimum Advance Reservations</label>
                                    <input type="number" id="price" name="price" min=""  step="1" required
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Ex:3">
                                        Leave blank if you dont need to use the min day option
                                    </div>

                            <div class="w-full mb-4">
                                <label for="role" class="block text-sm font-medium text-gray-700">Minimum day stay requirments</label>
                                <input type="number" id="price" name="price" min=""  step="1" required
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Ex: 5">
                                Leave blank if you dont need to set minimum day stay option
                            </div>
                        </div>
					
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Pricing</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
						
						    <div class="flex items-center gap-4 mb-4">

                                <div class="w-full mb-4">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                        <input type="number" id="price" name="price" min=""  step="1" required
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="space price">
                                </div>

                                <div class="w-full mb-4">
                                    <label for="role" class="block text-sm font-medium text-gray-700">Sale Price</label>
                                    <input type="number" id="price" name="price" min=""  step="1" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="space sale price">
                                    If the regular price is less than the discount , it will show the regular price
                                </div>
                            </div>

                            <div class="w-full mb-4">
                                <label for="price" class="block text-sm font-medium text-gray-700">Max Guests</label>
                                <input type="number" id="price" name="price" min=""  step="1" required
                                 class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="space price">
                            </div>

                            <div class="w-full mb-4">
                                <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                       			 Enable extra price
                           </div>

                           <div class="w-full mb-4">
                                <h3 class="">Extra Price</h3>   
                                <div class="border border-gray-300 p-4 rounded-md">
                                    <table class="w-full table-auto border-separate border-spacing-4">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-sm font-medium text-gray-700">Name</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Price</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Type</th>
                                            </tr>
                                        </thead>
                                        
                                    </table>     
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Item</button>
                            </div>

                            <div class="w-full mb-4">
                                <h3 class="">Diacount by number of day or night</h3>   
                                <div class="border border-gray-300 p-4 rounded-md">
                                    <table class="w-full table-auto border-separate border-spacing-4">
                                        <thead>
                                            <tr>
                                                <th class="text-left text-sm font-medium text-gray-700">From-To</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Discount</th>
                                                <th class="text-left text-sm font-medium text-gray-700">Type</th>
                                            </tr>
                                        </thead>
                                        
                                    </table>     
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Add Item</button>
                            </div>

                            <div class="w-full mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Service fee</label>
                                <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                       			 Enable service fee
                           </div>
                    </form>
                </div>
            </div>

		

			<div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Location</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                            <div class="w-full mb-4">
                                <label for="role" class="block text-sm font-medium text-gray-700">Location</label>
                                <select id="role" name="role" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    
                                    <option value="">--please select--</option>
                                    <option value="">Paris</option>
                                    <option value="">New York,United State</option>
									<option value="">California</option>
									<option value="">United States</option>
									<option value="">Los Angeles</option>
									<option value="">New Jersey</option>
									<option value="">San Francisco</option>
									<option value="">Virginia</option>
									<option value="">London</option>
									<option value="">Germany</option>
                                </select>
                            </div>

							<div class="mb-4">
								<label for="title" class="block text-sm font-medium text-gray-700">Real address</label>
								<input type="text" id="title" name="title" required
									class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
									placeholder="real address">
							</div>

							<div class="mb-4">
								<label for="title" class="block text-sm font-medium text-gray-700">The Geographic Content</label>
							</div>
                    </form>
                </div>
            </div>

			<div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Surroundings</h2>
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

			<div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Search engine</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                    
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
			<br>
			<div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Author Setting</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <div class="w-full mb-4">
                                <select id="role" name="role" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    <option value="">-- select user--</option>
                                    <option value="">user1</option>
                                    <option value="">user2</option>
									<option value="">user3</option>
                                </select>
                   </div>
                </div>
            </div>
				<br>
			<div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Availability</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">

					<div class="w-full mb-4">
                            <label for="hide_service" class="block text-sm font-medium text-gray-700">Space featured</label>
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                        Enable featured
                    </div>

					<div class="w-full mb-4">
                    <label for="hide_service" class="block text-sm font-medium text-gray-700">Default States</label>

                        <select id="role" name="role" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <option value="">-- please select--</option>
                            <option value="">Always available</option>
                            <option value="">available on only speific dates</option>
                        </select>
                   </div>
                    
                </div>
            </div>
			<br>

			<div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Attribute:Space type</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">

					<div class="w-full">
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Auditorium
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Bar
                    </div>
                    <div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Cafe
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Ballroom
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Sance studio
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Office
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Party Hall
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Recording studio
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Yoga Studio
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Villa
                    </div>
                    <div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Warehouse
                    </div>
                </div>
            </div>
			<br>

			<div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Attribute:Amenities</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
					<div class="w-full">
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Air Conditioning
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Breakfast
                    </div>
                    <div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Kitchen
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Parking
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
							Pool
                    </div>
					<div class="w-full" >
                            <input type="checkbox" id="hide_service" name="hide_service" class="form-checkbox h-5 w-5 text-blue-600">
                             Wi-Fi Internet
                    </div>
					
                    
                </div>
            </div>
				<br>
			<div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Aattribute:Test</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">

                    <input type="text" id="title" name="title" requiredclass="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                     placeholder="">
                    
                </div>
            </div>
				<br>
			<div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Feature image</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">

					<div class="w-1/2 mb-4">
                                <label for="photo" class="block text-sm font-medium text-gray-700">Upload image</label>
                                <input type="file" id="photo" name="photo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    
                </div>
            </div>

            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Ical</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">

					<div class="w-1/2 mb-4">
                                <label for="photo" class="block text-sm font-medium text-gray-700">import url</label>

                                <input type="text" id="title" name="title" requiredclass="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                               placeholder="">    
                    </div>
                    
                </div>
            </div>
			
        </div>

		
    </div>

    
@endsection


