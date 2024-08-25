<div>
    <div class="flex justify-center mt-4">
        <div class="w-8/12 p-4 flex justify-between rounded-md bg-slate-200 shadow-md animate-pulse">
            @foreach (range(1, 3) as $status)
                <div class="flex flex-col justify-center items-center space-y-2">
                    <!-- Circle Skeleton -->
                    <div class="w-16 h-16 bg-gray-200 rounded-full dark:bg-gray-600"></div>
                    <!-- Status Name Skeleton -->
                    <div class="w-20 h-4 bg-gray-200 rounded dark:bg-gray-600"></div>
                </div>
            @endforeach
        </div>
    </div>
    
    <div
    class="my-4 px-4 py-6 bg-white rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate-pulse">
    <div class="p-4 leading-normal">
        <div class="flex justify-between mb-4">
            <!-- Title Skeleton -->
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-3/4"></div>
            <!-- Deadline Skeleton -->
            <div class="h-6 bg-gray-200 rounded dark:bg-gray-600 w-1/4"></div>
        </div>
        <!-- Description Skeleton -->
        <div class="space-y-2">
            <div class="h-4 bg-gray-200 rounded dark:bg-gray-600 w-full"></div>
            <div class="h-4 bg-gray-200 rounded dark:bg-gray-600 w-5/6"></div>
            <div class="h-4 bg-gray-200 rounded dark:bg-gray-600 w-4/6"></div>
        </div>
    </div>
    <div class="flex justify-between mt-4">
        <!-- Status Buttons Skeleton -->
        <div class="flex space-x-2">
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-20"></div>
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-20"></div>
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-20"></div>
        </div>
        <!-- Edit/Delete Buttons Skeleton -->
        <div class="flex space-x-2">
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-20"></div>
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-20"></div>
        </div>
    </div>
</div>

<div
    class="my-4 px-4 py-6 bg-white rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 animate-pulse">
    <div class="p-4 leading-normal">
        <div class="flex justify-between mb-4">
            <!-- Title Skeleton -->
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-3/4"></div>
            <!-- Deadline Skeleton -->
            <div class="h-6 bg-gray-200 rounded dark:bg-gray-600 w-1/4"></div>
        </div>
        <!-- Description Skeleton -->
        <div class="space-y-2">
            <div class="h-4 bg-gray-200 rounded dark:bg-gray-600 w-full"></div>
            <div class="h-4 bg-gray-200 rounded dark:bg-gray-600 w-5/6"></div>
            <div class="h-4 bg-gray-200 rounded dark:bg-gray-600 w-4/6"></div>
        </div>
    </div>
    <div class="flex justify-between mt-4">
        <!-- Status Buttons Skeleton -->
        <div class="flex space-x-2">
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-20"></div>
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-20"></div>
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-20"></div>
        </div>
        <!-- Edit/Delete Buttons Skeleton -->
        <div class="flex space-x-2">
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-20"></div>
            <div class="h-8 bg-gray-200 rounded dark:bg-gray-600 w-20"></div>
        </div>
    </div>
</div>
</div>