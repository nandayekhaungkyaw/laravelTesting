<x-app-layout>
<div class="max-w-3xl mx-auto px-6 py-10">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Add New Item</h1>

    <form action="{{ route('curry.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" required
                   class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <!-- Description -->
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="4" required
                      class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
        </div>

        <!-- Price -->
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" id="price" name="price" step="0.01" required
                   class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <!-- Category -->
        <div>
            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
            <input type="text" id="category" name="category" required
                   class="mt-2 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        </div>

        <!-- Image Upload (Dropzone) -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Image</label>
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed
                           rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100
                           dark:bg-gray-700 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5
                                     5.5 5.5 0 0 0 5.207 5.021C5.137 5.017
                                     5.071 5 5 5a4 4 0 0 0 0 8h2.167M10
                                     15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                            <span class="font-semibold">Click to upload</span> or drag and drop
                        </p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG, or GIF (max. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" name="image" type="file" class="hidden" required />
                </label>
            </div>
        </div>

        <!-- Submit -->
        <div class="flex justify-end">
            <button type="submit"
                class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                Save Item
            </button>
        </div>
    </form>
</div>

</x-app-layout>
