@extends('layouts.vertical', ['title' => ' Role', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')

    <div class="mt-6">
    
        <div class="flex justify-between items-center gap-2 p-6">
            <div></div>
            <div class="flex gap-2">
                <a href="{{ route('second', ['users', 'verify-config']) }}" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">Verify Config</a>
                <a href="{{ route('second', ['users', 'permission-matrix']) }}" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">Permission Matrix</a>
                <a href="{{ route('second', ['users', 'add-role']) }}" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">Add New Role</a>

            </div>
        </div>

	 <div class="card">
		<div class="relative overflow-x-auto">
        <p class="text-xl font-bold">All Roles</p>
        <hr class="w-full border-t border-gray-300 mt-2">
			<table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
				<thead class="">
					<tr>
                        <th scope="col" class="py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                            <input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/>
                        </th>					
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Id</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Name</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Code</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200"> Date</th>
					
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">
					<tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> #1</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">Ajeet Singh</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">Aadministrator</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/0/2024</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <a href="{{ route('second', ['users', 'edit-role']) }}" class="text-blue-500 hover:underline">Edit</a>
                        </td>
					</tr>

                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> #2</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">Aman Singh</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">Vendor</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">10/0/2024</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <a href="{{ route('second', ['users', 'edit-role']) }}" class="text-blue-500 hover:underline">Edit</a>
                        </td>
					</tr>

                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> #3</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">Ajeet Singh</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">Customer</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">11/0/2024</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <a href="{{ route('second', ['users', 'edit-role']) }}" class="text-blue-500 hover:underline">Edit</a>
                        </td>			
        		</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection