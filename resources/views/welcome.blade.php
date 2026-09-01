<x-layout>

    <div class="flex items-center justify-center min-h-screen">
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Welcome to Ideas Hub</h1>
            <p class="text-lg text-gray-600 mb-8">Manage and organize your ideas efficiently</p>
            
            @auth
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition duration-200">
                        Go to Dashboard
                    </a>
                </div>
            @else
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md transition duration-200">
                        Sign In
                    </a>
                    <a href="{{ route('register') }}" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-6 rounded-md transition duration-200">
                        Create Account
                    </a>
                </div>
            @endauth
        </div>
    </div>

</x-layout>