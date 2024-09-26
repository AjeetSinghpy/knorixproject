@extends('layouts.vertical', ['title' => ' All Modules', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')

    <div class="mt-6">
    
        <div class="flex items-center gap-2 p-6">
            <select class="form-select text-sm border-gray-300 rounded-lg">
                <option value="" disabled selected>Bulk Actions</option>
                <option value="delete">Delete</option>
            </select>
            <button type="button" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90 mr-6">
                Apply
            </button>
            <div class="flex items-center gap-4 ml-auto">

        </div>
    </div>

	<div class="card">
		<div class="relative overflow-x-auto">
			<table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
				<thead class="">
					<tr>
                        <th scope="col" class="py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                            <input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/>
                        </th>					
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Module Name</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Description</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Aauthor</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Version </th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Status</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200"> Action</th>
					
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">
					<tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Agency</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
						<td class="whitespace-nowrap py-4 px-3 text-sm"></td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1.0</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
					</tr>

                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Boat</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
						<td class="whitespace-nowrap py-4 px-3 text-sm"></td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1.0</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Car</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
						<td class="whitespace-nowrap py-4 px-3 text-sm"></td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1.0</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Coupon</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
						<td class="whitespace-nowrap py-4 px-3 text-sm"></td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1.0</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Event</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
						<td class="whitespace-nowrap py-4 px-3 text-sm"></td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1.0</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
					</tr>

                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Location</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
						<td class="whitespace-nowrap py-4 px-3 text-sm"></td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1.0</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Popup</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
						<td class="whitespace-nowrap py-4 px-3 text-sm"></td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1.0</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
					</tr>

                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Property</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
						<td class="whitespace-nowrap py-4 px-3 text-sm"></td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1.0</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Space</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
						<td class="whitespace-nowrap py-4 px-3 text-sm"></td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1.0</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Tour</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
						<td class="whitespace-nowrap py-4 px-3 text-sm"></td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1.0</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">1</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200"></td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"></td>
					</tr>
				
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection