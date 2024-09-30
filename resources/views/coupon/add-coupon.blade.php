@extends('layouts.vertical', ['title' => 'Add New Coupon', 'sub_title' => 'Apps', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <div class="flex gap-4">
        

        <div class="flex-1 flex flex-col gap-4">
            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">General</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
                        
                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="couponCode" class="block text-sm font-medium text-gray-700">Coupon Code *</label>
                                <input type="text" id="couponCode" name="couponCode" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Unique code" required>
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="couponName" class="block text-sm font-medium text-gray-700">Coupon Name</label>
                                <input type="text" id="couponName" name="couponName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Name">
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="couponAmount" class="block text-sm font-medium text-gray-700">Coupon Amount *</label>
                                <input type="number" id="couponAmount" name="couponAmount" min="0" step="1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Ex: 3" required>
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="discountType" class="block text-sm font-medium text-gray-700">Discount Type</label>
                                <select id="discountType" name="discountType" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                    <option value="amount">Amount</option>
                                    <option value="percent">Percent</option>
                                </select>
                            </div>
                        </div>

                        <div class="w-1/2 mb-4">
                            <label for="endDate" class="block text-sm font-medium text-gray-700">End Date</label>
                            <input type="date" id="endDate" name="endDate" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>
                    </form>

                </div>
            </div>

            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Usage Restriction</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
  
                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="couponCode" class="block text-sm font-medium text-gray-700">Minimum Speed</label>
                                <input type="text" id="couponCode" name="couponCode" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="No Minimum" required>
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="couponName" class="block text-sm font-medium text-gray-700">Maximum Speed</label>
                                <input type="text" id="couponName" name="couponName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="No Maximum">
                            </div>
                        </div>


                        <div class="flex gap-4">
                            <div class="w-1/2 mb-4">
                                <label for="couponAmount" class="block text-sm font-medium text-gray-700">Only for services</label>
                                <select id="discountType" name="discountType" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                    <option value="amount">--select services--</option>
                                    <option value="percent">service 1 </option>
                                </select>
                            </div>
                            <div class="w-1/2 mb-4">
                                <label for="discountType" class="block text-sm font-medium text-gray-700">Only for User</label>
                                <select id="discountType" name="discountType" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                    <option value="amount">--select user--</option>
                                    <option value="percent">user1</option>
                                </select>
                            </div>
                        </div>

					
                
                            
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Usage Limits</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">
                    <form class="w-full">
		
						    <div class="flex items-center gap-4 mb-4">

                                <div class="w-full mb-4">
                                    <label for="price" class="block text-sm font-medium text-gray-700">Usage Limit per Coupon</label>
                                        <input type="number" id="price" name="price" min=""  step="1" required
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Unlimited usage">
                                </div>

                                <div class="w-full mb-4">
                                    <label for="role" class="block text-sm font-medium text-gray-700">Usage Limit Per User</label>
                                    <input type="number" id="price" name="price" min=""  step="1" required
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Unlimited usage">
                                </div>
                            </div>
                    </form>
                </div>
            </div>


			
        </div>

        <div class="flex-1">
            <div class="card">
                <div class="flex flex-wrap justify-between items-center gap-2 p-6">
                    <h2 class="text-xl font-bold">Publish</h2>
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
                    <h2 class="text-xl font-bold">Feature image</h2>
                    <hr class="w-full border-t border-gray-300 mt-2">

					<div class="w-1/2 mb-4">
                                <label for="photo" class="block text-sm font-medium text-gray-700">Upload image</label>
                                <input type="file" id="photo" name="photo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>
                    
                </div>
            </div>
			
        </div>

		
    </div>

    
@endsection


