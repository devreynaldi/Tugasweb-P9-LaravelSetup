<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Tugas P9') - Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen">
    <nav class="bg-slate-800 border-b border-slate-700">
        <div class="max-w-4xl mx-auto px-4 py-3 flex gap-6">
            <a href="/" class="font-bold text-pink-400">Laravel P9</a>
            <a href="/about" class="hover:text-pink-400">About</a>
            <a href="/contact" class="hover:text-pink-400">Contact</a>
            <a href="/hello/Dunia" class="hover:text-pink-400">Hello</a>
        </div>
    </nav>
    <main class="max-w-4xl mx-auto px-4 py-10">
        @yield('content')
    </main>
</body>
</html>
