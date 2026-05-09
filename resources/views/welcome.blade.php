<!DOCTYPE html>
<html>
<head>
    <title>My Web Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-blue-100 to-blue-300">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 text-white flex justify-between shadow-lg">
        <h1 class="font-bold text-lg">Travel Buzz</h1>
        <div>
            <a href="#" class="mr-4 hover:text-gray-200">HOME</a>
            <a href="#" class="mr-4 hover:text-gray-200">ABOUT</a>
            <a href="#" class="hover:text-gray-200">CONTACT</a>
        </div>
    </nav>

    <!-- Main Section -->
    <div class="text-center mt-16">
        <h1 class="text-4xl font-bold text-blue-800">The Adventure Awaits</h1>
        <p class="mt-4 text-gray-700 text-lg">
            Discover amazing destinations and create unforgettable memories.
        </p>

        <!-- Button -->
        <button class="mt-6 bg-blue-700 hover:bg-blue-800 text-white px-6 py-2 rounded-lg shadow-md">
            Explore Now
        </button>
    </div>

    <!-- Card Section -->
    <div class="flex justify-center mt-12">
        <div class="bg-white shadow-xl rounded-xl p-6 w-80 text-center hover:scale-105 transition">
            <img src="{{ asset('images/meghalaya.jpg') }}" 
            class="rounded mb-4 w-full h-48 object-cover">
            <h2 class="text-xl font-semibold">Meghalaya</h2>
            <p class="text-gray-600 mt-2">Discover the scenic beauty of the "Abode of Clouds"</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-16 p-4 text-gray-700">
        &copy; 2026 Travel Buzz | Created by Vivek
    </footer>

</body>
</html>