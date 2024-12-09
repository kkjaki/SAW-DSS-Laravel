<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Alternatives Table -->
                    <div>
                        <h4 class="font-semibold text-md mb-2">Alternatives</h4>
                        <table class="min-w-full border-collapse border border-gray-200 dark:border-gray-700">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="border border-gray-200 dark:border-gray-600 px-4 py-2 text-left">#</th>
                                    <th class="border border-gray-200 dark:border-gray-600 px-4 py-2 text-left">
                                        Alternative Name</th>
                                    @foreach ($criteria as $criterion)
                                        <th class="border border-gray-200 dark:border-gray-600 px-4 py-2 text-left">
                                            {{ $criterion->name }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatives as $index => $alternative)
                                    <tr class="bg-white dark:bg-gray-800">
                                        <td class="border border-gray-200 dark:border-gray-600 px-4 py-2">
                                            {{ $index + 1 }}</td>
                                        <td class="border border-gray-200 dark:border-gray-600 px-4 py-2">
                                            {{ $alternative->name }}</td>
                                        @foreach ($criteria as $criterion)
                                            @php
                                                $value = $alternative->alternativevalues
                                                    ->where('criteria_id', $criterion->id)
                                                    ->first();
                                            @endphp
                                            <td class="border border-gray-200 dark:border-gray-600 px-4 py-2">
                                                {{ $value ? $value->score : '-' }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
