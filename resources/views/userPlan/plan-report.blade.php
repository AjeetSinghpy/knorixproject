@extends('layouts.vertical', ['title' => ' Plan Report', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')

    <div class="mt-6">
    
        <div class="flex items-left gap-1 p-4">
            <select class="form-select text-sm border-gray-300 rounded-lg">
                <option value="" disabled selected>--Select Employer--</option>
                <option value="delete">User1</option>
                <option value="delete">User2</option>
                <option value="delete">User3</option>
                <option value="delete">User4</option>
                <option value="delete">User5</option>
            </select>
          
            <div class="flex items-center gap-4 ml-auto">
                <select class="form-select text-sm border-gray-300 rounded-lg">
                    <option value="">All Plan</option>
                    <option value="option1">Basic</option>
                    <option value="option2">Standard</option>
                    <option value="option3">Extended</option>
                </select>

                <div class="flex items-center gap-2">
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
                        				
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Plan ID</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Customer</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Plan Name</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Expiry</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200">Used/Total</th>
						<th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200"> Price</th>
                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 dark:text-gray-200"> Status</th>
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

@endsection