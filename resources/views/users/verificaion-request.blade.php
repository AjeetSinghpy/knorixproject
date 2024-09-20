@extends('layouts.vertical', ['title' => ' Verification-Requests', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
                <select class="form-select text-sm border-gray-300 rounded-lg">
                    <option value="">--Select--</option>
                    <option value="option1">Administrator</option>
                    <option value="option2">Vendor</option>
                    <option value="option3">Customer</option>
                </select>

                <div class="flex items-center gap-2">
                    <input type="text" placeholder="Search by name" class="form-input text-sm border-gray-500 rounded-lg py-2 px-2 w-48" />
                    <button type="button" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">
                        Search
                    </button>
                </div>
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
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Name</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Email</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">phone</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Role</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Date</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200"> Status</th>
					
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">
					<tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
                            <div class="flex items-center">
                                <a href="{{ route('second', ['users', 'verification-request-details']) }}" class="font-medium text-gray-900 dark:text-gray-200 ms-4">
                                    Ajeet Singh
                                </a>
                            </div>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">ajeet@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">8</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">58486848684</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Manager</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/0/2024</td>
                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                            <div class="flex items-center">
                                <a href="{{ route('second', ['users', 'verification-request-details']) }}" class="font-medium text-gray-900 dark:text-gray-200 ms-4">
                                    View Request
                                </a>
                            </div>
                        </td>
					</tr>
					
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
                            <div class="flex items-center">
                                <a href="{{ route('second', ['users', 'verification-request-details']) }}" class="font-medium text-gray-900 dark:text-gray-200 ms-4">
                                    Aman Rajawat
                                </a>
                            </div>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">aman@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">6</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">67676</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Employee</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">11/06/2023</td>
                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                            <div class="flex items-center">
                                <a href="{{ route('second', ['users', 'verification-request-details']) }}" class="font-medium text-gray-900 dark:text-gray-200 ms-4">
                                    View Request
                                </a>
                            </div>
                        </td>
					</tr>

                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
                            <div class="flex items-center">
                                <a href="{{ route('second', ['users', 'verification-request-details']) }}" class="font-medium text-gray-900 dark:text-gray-200 ms-4">
                                    Akash Gupta
                                </a>
                            </div>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">akash@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">4</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">76778676</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Employee</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/05/2024</td>
                        <td class="whitespace-nowrap py-4 pe-3 text-sm">
                            <div class="flex items-center">
                                <a href="{{ route('second', ['users', 'verification-request-details']) }}" class="font-medium text-gray-900 dark:text-gray-200 ms-4">
                                    View Request
                                </a>
                            </div>
                        </td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection