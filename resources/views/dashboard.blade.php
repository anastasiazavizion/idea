<x-layout>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-md">
                <p class="text-sm text-green-700">{{ session('success') }}</p>
            </div>
        @endif

        <div class="bg-white rounded-lg shadow-sm p-8">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Dashboard</h2>
                    <p class="text-gray-600 mt-1">Welcome, {{ Auth::user()->name }}!</p>
                </div>
            </div>
            <p class="text-gray-600">Start managing your ideas.</p>
        </div>
    </div>

</x-layout>
