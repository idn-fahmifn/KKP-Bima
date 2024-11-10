<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Laporan Pengaduan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="rounded-lg border border-gray-200 dark:border-gray-700">
                <div class="overflow-x-auto rounded-t-lg">
                    <table
                        class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm dark:divide-gray-700 dark:bg-gray-900">
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                                    Judul Pengaduan
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                                    Nama Pelapor
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                                    Staus
                                </th>
                                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 dark:text-white">
                                    Pilihan
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>