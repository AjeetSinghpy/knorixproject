@extends('layouts.vertical', ['title' => ' Permission Matrix', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')

    <div class="mt-6">
    
	 <div class="card">
		<div class="relative overflow-x-auto">
       
        <hr class="w-full border-t border-gray-300 mt-2">
			<table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
				<thead class="">
					<tr>					
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Role</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Administrator</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Vendor</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200"> Customer</th>
					</tr>
				</thead>
				<tbody class="divide-y divide-gray-200 dark:divide-gray-700 ">
					<tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Report</div>
							</div>
						</td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> Report_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Contact</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> Contact_manage</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Newsletter</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> Newsletter_manage</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Language</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> Language_manage</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> Language_translation</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Booking</div>
							</div>
						</td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> booking_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> booking_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> booking_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Enquiry</div>
							</div>
						</td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> enquiry_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> enquiry_manage</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> enquiry_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Template</div>
							</div>
						</td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> template_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> template_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> template_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> template_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> News</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> new_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> news_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> news_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> news_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> news_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Role</div>
							</div>
						</td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> role_manage</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr><tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> role_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> role_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> role_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> role_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Permission</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> permission_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> permission_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> permission_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> permission_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Dashboard</div>
							</div>
						</td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> dashboard_access</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> dashoard_vendor_access</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Setting</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> setting_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> setting_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Menu</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> menu_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> menu_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> menu_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> menu_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> User</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> user_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> user_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> user_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> user_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Page</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> page_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> page_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> page_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> page_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> page_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Media</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> media_upload</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> media_manage</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> media_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Location</div>
							</div>
						</td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> location_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> location_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> location_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> location_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> location_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    


                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Review</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> review_manage_oters</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> System</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> system_log_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Theme</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> theme_manage</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Social</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> social_manage_forum</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Plugin</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> plugin_manage</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Vendor</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> vendor_payout_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> vendor_payout_manage</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Popup</div>
							</div>
						</td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> popup_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> pop_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> pop_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>  
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> popup_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Hotel</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> hotel_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> hotel_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> hotel_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> hotel_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> hotel_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> hotel_manage_attributes</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Space</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> space_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> space_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> space_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> space_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> space_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> space_manage_attributes</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Car</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> car_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> car_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> car_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> car_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> car_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> car_manage_attributes</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Event</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> event_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> event_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>  <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> event_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> event_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> event_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr> 
                     <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> event_manage_attributes</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>

                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Tour</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> tour_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> tour_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> tour_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> tour_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> tour_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> tour_manage_attributes</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Boat</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> boat_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> boat_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> boat_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> boat_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> boat_manage_others</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> boat_manage_attributes</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Coupon</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> coupon_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> coupon_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> coupon_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> coupon_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Support</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_topic_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_topic_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_topic_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_topic_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_topic_category</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_ticket_view</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_ticket_create</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_ticket_update</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_ticket_delete</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_ticket_reply</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_ticket_category</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> support_ticket_manage</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium text-gray-900 dark:text-gray-200 ms-4"> Ai</div>
							</div>
						</td>
					</tr>
                    <tr>
						<td class="whitespace-nowrap py-4 pe-3 text-sm">
							<div class="flex items-center">
								<div class="font-medium   ms-4"> ai_text_generate</div>
                            </div>
						</td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
						<td><input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/></td>
					</tr>
                    
				</tbody>
			</table>
		</div>
	</div>
</div>

<hr class="w-full border-t border-gray-300 mt-2">
        <br>
        <div class="flex justify-end gap-4">
            <button type="submit" class="btn bg-success/25 text-sm font-medium text-success hover:text-white hover:bg-success">
            Save Changes
            </button>
        </div>
@endsection