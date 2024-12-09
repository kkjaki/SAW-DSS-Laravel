<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Add Alternative') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                  <form action="{{ route('alternatives.store') }}" method="POST">
                      @csrf
                      
                      <!-- Input Nama Alternative -->
                      <div class="mb-4">
                          <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alternative Name</label>
                          <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" required>
                      </div>

                      <!-- Input Dinamis untuk Kriteria -->
                      <div class="mb-4">
                          <h3 class="text-lg font-medium text-gray-800 dark:text-gray-200 mb-2">Criteria Scores</h3>
                          @foreach ($criteria as $criterion)
                              <div class="mb-2">
                                  <label for="criteria_{{ $criterion->id }}" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                      {{ $criterion->name }}
                                  </label>
                                  <input type="number" name="criteria[{{ $criterion->id }}]" id="criteria_{{ $criterion->id }}" class="mt-1 block w-full rounded-md shadow-sm border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" required>
                              </div>
                          @endforeach
                      </div>

                      <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Save Alternative</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
