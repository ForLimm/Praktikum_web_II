<x-default-layout title="Dashboard" section_title="Dashboard">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="px-6 py-4 bg-white border hover:border-2 border-sky-400 space-y-1.5 shadow transition duration-200">
            <div class="text-zinc-600 text-sm">Total Students</div>
            <div class="text-2xl font-bold">321</div>
        </div>
        <div class="px-6 py-4 bg-green-50 border hover:border-2 border-green-400 space-y-1.5 shadow transition duration-200">
            <div class="text-zinc-600 text-sm">Total Majors</div>
            <div class="text-2xl font-bold">346</div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 mt-6">
        <div class="col-span-1 sm:col-span-2 overflow-auto">
            <table class="min-w-full bg-white shadow">
                <thead>
                    <tr class="border-b border-zinc-200 text-sm font-normal">
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Majors</th>
                        <th class="py-3 px-6 text-center">Total Students</th>
                    </tr>
                </thead>
                <tbody class="text-zinc-700 text-sm font-light">
                    <tr class="border-b border-zinc-200 hover:bg-zinc-100">
                        <td class="py-3 px-6 text-left">1</td>
                        <td class="py-3 px-6 text-left">S1 Information Technology</td>
                        <td class="py-3 px-6 text-center">153</td>
                    </tr>
                    <tr class="border-b border-zinc-200 hover:bg-zinc-100">
                        <td class="py-3 px-6 text-left">2</td>
                        <td class="py-3 px-6 text-left">S1 Business Informatics</td>
                        <td class="py-3 px-6 text-center">128</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-default-layout>