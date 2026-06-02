<header class="bg-gray-900 text-white">
    <nav class="max-w-7xl mx-auto flex items-center justify-between p-4">

        <div class="text-2xl font-bold">
            <a href="{{ url('/') }}">MyBlog</a>
        </div>

        <ul class="hidden md:flex space-x-6">
            <li><a href="{{ url('/') }}" class="hover:text-blue-400">Home</a></li>
            <li><a href="{{ url('/post') }}" class="hover:text-blue-400">Posts</a></li>
            <li><a href="{{ url('/category') }}" class="hover:text-blue-400">Categories</a></li>
            <li><a href="{{ url('/aboutus') }}" class="hover:text-blue-400">About</a></li>
            <li><a href="{{ url('/contactus') }}" class="hover:text-blue-400">Contact</a></li>
        </ul>

    </nav>
</header>
