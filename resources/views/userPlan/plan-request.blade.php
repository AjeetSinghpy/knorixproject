@extends('layouts.vertical', ['title' => ' Plan Request Management', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')

    <div class="mt-6">

        <div class="flex items-center gap-2 p-6">
                <div class="flex items-center gap-2 w-1/2"> 
                    <select class="form-select text-sm border-gray-300 rounded-lg w-full">
                        <option value="" disabled selected>Bulk Actions</option>
                        <option value="delete">Marks as Completed</option>
                        <option value="delete">Marks as Cancelled</option>
                    </select>
                    <button type="button" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">
                        Apply
                    </button>
                </div>
            <div class="flex items-center gap-4 ml-auto">
                <select class="form-select text-sm border-gray-300 rounded-lg">
                    <option value="">--Status--</option>
                    <option value="option1">Failed</option>
                    <option value="option2">Processing</option>
                    <option value="option3">Cancelled</option>
                </select>

</div>

                <div class="flex items-center gap-2">
                <select class="form-select text-sm border-gray-300 rounded-lg">
                    <option value="">--User--</option>
                    <option value="option1">User1</option>
                    <option value="option2">User2</option>
                    <option value="option3">User3</option>
                </select>
                    <button type="button" class="btn bg-dark/25 text-sm font-medium text-slate-900 dark:text-slate-200/70 hover:text-white hover:bg-dark/90">
                        Filter
                    </button>
                </div>
        </div>
    </div>

	<div class="card">
        
        <div class="relative overflow-x-auto">
            <div class="card h-96"> 
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Purchase logs</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <table class="w-full divide-y divide-gray-300 dark:divide-gray-700">
                        <thead class="">
                        <tr>
                                <th scope="col" class="py-3.5 ps-4 pe-3 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">
                                    <input type="checkbox" id="select-all" class="form-checkbox h-5 w-5 text-blue-600"/>
                                </th>					
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Customer</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Plan</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Amount</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Status</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Payment Method</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200"> Created At</th>
                        
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            {{-- Check if there is no data --}}
                            @if(empty($data) || count($data) == 0)
                                <tr>
                                    <td colspan="7" class="py-12 text-center text-sm text-gray-500 dark:text-gray-400">
                                        No data available
                                    </td>
                                </tr>
                            @else
                                {{-- Loop through the data and display rows --}}
                                @foreach($data as $item)
                                    <tr>
                                        <td class="px-3 py-4 text-sm text-gray-900 dark:text-gray-200">{{ $item->plan_id }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-900 dark:text-gray-200">{{ $item->customer }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-900 dark:text-gray-200">{{ $item->plan_name }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-900 dark:text-gray-200">{{ $item->expiry }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-900 dark:text-gray-200">{{ $item->used }}/{{ $item->total }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-900 dark:text-gray-200">{{ $item->price }}</td>
                                        <td class="px-3 py-4 text-sm text-gray-900 dark:text-gray-200">{{ $item->status }}</td>
                                    </tr>
                                @endforeach
                            @endif
                         </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    <div>


@endsection