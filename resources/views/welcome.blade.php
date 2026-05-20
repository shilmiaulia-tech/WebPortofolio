<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 font-sans antialiased">

    <div class="flex flex-col items-center justify-center min-h-screen text-center px-4">
        
        <div class="w-32 h-32 rounded-full bg-blue-600 shadow-lg flex items-center justify-center text-white text-3xl font-bold mb-6 animate-bounce">
            SA
        </div>

        <h1 class="text-4xl md:text-5xl font-extrabold text-slate-800 tracking-tight">
            Hai, Aku <span class="text-blue-600">Shilmi Aulia</span> ✨
        </h1>
        <p class="text-lg text-slate-600 mt-3 max-w-md font-medium">
            Multimedia & Broadcasting Student | UI/UX Enthusiast & Visual Asset Creator
        </p>

        <div class="mt-8 flex gap-4">
            <a href="#portfolio" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition duration-200">
                Lihat Portofolio
            </a>
            <a href="#about" class="px-6 py-3 bg-white text-slate-700 font-semibold rounded-lg shadow-md border border-slate-200 hover:bg-slate-50 transition duration-200">
                Tentang Saya
            </a>
        </div>
    </div>

    <div id="portfolio" class="max-w-5xl mx-auto px-4 py-16">
        <h2 class="text-2xl font-bold text-slate-800 text-center mb-8">Fokus & Keahlian</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="text-blue-500 text-2xl mb-3">🎨</div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">UI/UX Design</h3>
                <p class="text-slate-600 text-sm">Merancang layout website yang estetik, ramah pengguna, dan interaktif menggunakan Figma.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="text-blue-500 text-2xl mb-3">📐</div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Visual Assets</h3>
                <p class="text-slate-600 text-sm">Membuat aset visual digital, termasuk pemodelan objek 3D untuk kebutuhan media interaktif.</p>
            </div>

            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
                <div class="text-blue-500 text-2xl mb-3">💻</div>
                <h3 class="text-lg font-bold text-slate-800 mb-2">Web Development</h3>
                <p class="text-slate-600 text-sm">Mengembangkan tampilan website modern menggunakan HTML, CSS, Bootstrap, dan Tailwind CSS.</p>
            </div>
        </div>
    </div>
</body>
</html>