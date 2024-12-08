<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Alternatives') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                  <h3 class="text-lg font-semibold mb-4">Alternatives List</h3>

                  <!-- Add Alternative Button -->
                  <div class="mb-4">
                      <a href="{{ route('alternatives.create') }}"
                         class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                          + Add Alternative
                      </a>
                  </div>

                  @if($alternatives->isEmpty())
                      <p class="text-gray-500 dark:text-gray-400">No alternatives found.</p>
                  @else
                      <table class="min-w-full border-collapse border border-gray-200 dark:border-gray-700">
                          <thead>
                              <tr class="bg-gray-100 dark:bg-gray-700">
                                  <th class="border border-gray-200 dark:border-gray-600 px-4 py-2 text-left">#</th>
                                  <th class="border border-gray-200 dark:border-gray-600 px-4 py-2 text-left">Name</th>
                                  <th class="border border-gray-200 dark:border-gray-600 px-4 py-2 text-left">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($alternatives as $index => $alternative)
                                  <tr class="bg-white dark:bg-gray-800">
                                      <td class="border border-gray-200 dark:border-gray-600 px-4 py-2">{{ $index + 1 }}</td>
                                      <td class="border border-gray-200 dark:border-gray-600 px-4 py-2">{{ $alternative->name }}</td>
                                      <td class="border border-gray-200 dark:border-gray-600 px-4 py-2">
                                          <a href="{{ route('alternatives.edit', $alternative->id) }}" 
                                             class="text-blue-500 hover:text-blue-700">Edit</a>
                                          <form action="{{ route('alternatives.destroy', $alternative->id) }}" method="POST" class="inline">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" 
                                                      class="text-red-500 hover:text-red-700 ml-2"
                                                      onclick="return confirm('Are you sure?')">
                                                  Delete
                                              </button>
                                          </form>
                                      </td>
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
