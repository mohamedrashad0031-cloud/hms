<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StayNest | Hotel Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white text-gray-800">

<!-- NAVBAR -->
<nav class="border-b">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-semibold tracking-wide">
            StayNest
        </h1>
        <a href="/register"
           class="px-5 py-2 border border-gray-800 rounded hover:bg-gray-800 hover:text-white transition">
            Staff Login
        </a>
    </div>
</nav>

<!-- HERO -->
<section class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-16 items-center">
    <div>
        <h2 class="text-5xl font-light leading-tight mb-6">
            Simple hotel <br>
            management, <br>
            done right.
        </h2>

        <p class="text-gray-600 text-lg mb-8">
            StayNest helps hotels manage rooms, bookings, and daily operations
            with a clean and reliable system.
        </p>

        <a href="/login"
           class="inline-block px-8 py-3 bg-gray-800 text-white rounded hover:bg-gray-900 transition">
            Get Started
        </a>
    </div>

    <div>
        <img
            src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb"
            class="rounded-lg shadow"
            alt="Hotel lobby">
    </div>
</section>

<!-- FEATURES -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-12 text-center">

        <div>
            <h3 class="text-xl font-medium mb-2">Room Management</h3>
            <p class="text-gray-600">
                Track availability, pricing, and room status easily.
            </p>
        </div>

        <div>
            <h3 class="text-xl font-medium mb-2">Booking Control</h3>
            <p class="text-gray-600">
                Smooth check-in and check-out experience.
            </p>
        </div>

        <div>
            <h3 class="text-xl font-medium mb-2">Staff Access</h3>
            <p class="text-gray-600">
                Secure role-based access for hotel staff.
            </p>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="py-6 text-center text-gray-500">
    © {{ date('Y') }} StayNest. All rights reserved.
</footer>

</body>
</html>