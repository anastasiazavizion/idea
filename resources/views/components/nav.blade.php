<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <a href="{{ route('welcome') }}" class="text-xl font-bold text-gray-900">
                    Ideas
                </a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="#" class="text-gray-700 hover:text-gray-900">
                    All Ideas
                </a>
                <a href="#" class="text-gray-700 hover:text-gray-900">
                    About
                </a>
                @auth
                    <a href="{{ route('dashboard') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Dashboard
                    </a>
                    <a href="#" class="text-gray-700 hover:text-gray-900">
                        Profile
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-gray-900">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">
                        Login
                    </a>

                    <a href="{{ route('register') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>