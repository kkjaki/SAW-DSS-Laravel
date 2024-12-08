<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Criteria') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                  <h3 class="text-lg font-semibold mb-4">Criteria List</h3>

                  @if($criteria->isEmpty())
                      <p class="text-gray-500 dark:text-gray-400">No criteria found.</p>
                  @else
                      <table class="min-w-full border-collapse border border-gray-200 dark:border-gray-700">
                          <thead>
                              <tr class="bg-gray-100 dark:bg-gray-700">
                                  <th class="border border-gray-200 dark:border-gray-600 px-4 py-2 text-left">#</th>
                                  <th class="border border-gray-200 dark:border-gray-600 px-4 py-2 text-left">Name</th>
                                  <th class="border border-gray-200 dark:border-gray-600 px-4 py-2 text-left">Weight</th>
                                  <th class="border border-gray-200 dark:border-gray-600 px-4 py-2 text-left">Attribute</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($criteria as $index => $criterion)
                                  <tr class="bg-white dark:bg-gray-800">
                                      <td class="border border-gray-200 dark:border-gray-600 px-4 py-2">{{ $index + 1 }}</td>
                                      <td class="border border-gray-200 dark:border-gray-600 px-4 py-2">{{ $criterion->name }}</td>
                                      <td class="border border-gray-200 dark:border-gray-600 px-4 py-2">{{ $criterion->weight }}</td>
                                      <td class="border border-gray-200 dark:border-gray-600 px-4 py-2">{{ Str::title($criterion->attribute) }}</td>
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                  @endif
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
