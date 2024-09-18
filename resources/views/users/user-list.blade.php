@extends('layouts.vertical', ['title' => ' All Users', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')

    <div class="mt-6">
    
        <div class="flex justify-between items-center gap-2 p-6">
            <div></div>
            <div class="flex gap-2">
                <a href="{{ route('second', ['users', 'add-user']) }}" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">Add New User</a>
                <button type="button" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">Export to Excel</button>
            </div>
        </div>

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
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Credit</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Phone</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Role</th>
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
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Ajeet Singh</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">ajeet@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">8</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">58486848684</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Manager</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/0/2024</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>
					<tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Suraj Sharma </div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">shuraj@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">5</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">78676756</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Administrator</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/08/2011</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>

                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Akash Jain</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">akash@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">3</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">67666867</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Customer</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/08/2011</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Raj Singh</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">raj@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">8</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">67668807869</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Manager</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">23/08/2011</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Lakahan</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">lakhan@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">5</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">688089676</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Manager</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">23/08/2011</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Yash</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">yash@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">5</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">677687</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Administrator</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">11/08/2011</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Walton</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">walton@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">5</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">75667766766</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">manager</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">12/08/2011</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Lindsay Walton</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">Lindsay@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">5</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">988678078</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">Customer</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/08/2011</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>
                    <tr>
                        <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
	
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Ram</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">ram@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">5</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">998088</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            manager
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">11/08/2011</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Rasgymp Walton</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">Rasgymp@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">5</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">7778657</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">manager</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/08/2011</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>
                    <tr>
                       <td class="py-4 px-3 text-sm">
                            <input type="checkbox" class="row-checkbox form-checkbox h-5 w-5 text-blue-600"/>
                        </td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4">Lindsay Walton</div>
							</div>
						</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">ajeet@gmail.com</td>
						<td class="whitespace-nowrap py-4 px-3 text-sm">5</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">75667766766</td>
						<td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">manager</td>
						<td class="whitespace-nowrap py-4 pe-3 text-sm font-medium text-gray-900 dark:text-gray-200">13/08/2011</td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            <select class="form-select text-xs w-24 border-gray-300 rounded-md dark:border-gray-700 dark:bg-gray-800 dark:text-gray-200">
                                <option>Select</option>
                                <option>Edit</option>
                                <option>Verify Email</option>
                                <option>Change Password</option>
                                <option>Add Credit</option>
                            </select>
                        </td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection