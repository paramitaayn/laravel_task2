<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>INDI</title>
</head>
<body class="bg-gray-100">

    <!-- Header -->
    <header class="bg-white p-6 shadow-md">
        <h1 class="text-3xl font-bold">INDI</h1>
        <form class="mt-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
            <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter your email">
            <button type="submit" class="mt-2 w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Submit</button>
        </form>
        <p class="mt-4 text-gray-600">From cult classics to modern masterpieces.</p>
        <p class="mt-2 text-gray-600">Stay updated with the latest movies, news and articles from INDI.</p>
        <p class="mt-2 font-semibold">Stay Connected</p>
    </header>

    <!-- Body -->
    <main class="p-6">
        <section class="mt-6">
            <h2 class="text-2xl font-bold">Top Rated Films</h2>
            <h2 class="text-2xl font-bold mt-4">Recently Added Films</h2>
        </section>
        <article class="mt-6 bg-white p-4 rounded-md shadow-md">
            <h3 class="text-xl font-semibold">SAM AWAY</h3>
            <p class="mt-2">Director: Todd Burns</p>
            <p>Cast: Jenny Loifer, Sarah Obrien, Larry Moss Jr.</p>
            <p class="mt-2">When a tornado hits through City of Peaceville, Samantha (Jenny Loifer) and her dog, Ricko, are whisked away in their house to an amazing journey.</p>
            <p class="mt-2 text-gray-500">Genre: Adventure, Fantasy | Year: 2019 | Duration: 136 Min.</p>
            <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600">Watch Now</button>
        </article>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; 2023 INDI. All rights reserved.</p>
    </footer>

</body>
</html>