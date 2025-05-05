<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/swastika.png" type="image/webp">
    <title>Tari Baris Telek</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="pb-20 text-white bg-black font-hanken-grotest">

    
    <main class="mt-20 max-w-[986px] mx-auto">
        <div class="p-4 md:p-0"> <!-- Ganti dari p-10 menjadi p-4 md:p-0 -->
            <x-page-heading>Login</x-page-heading>
            <div class="px-4 md:px-0"> <!-- Tambahkan padding horizontal di sini -->
                <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
        
                    <x-forms.input name="email" label="Email" type="email" />
                    <x-forms.input name="password" label="Password" type="password" />
                
                    <x-forms.button>Login In</x-forms.button>
                    <a href="/" class="inline-block px-6 py-2 ml-4 font-semibold transition duration-300 border-2 rounded shadow-md border-white/15 bg-white/5 hover:text-emas hover:border-emas hover:bg-white/10">Kembali</a>
                </x-forms.form>
            </div>
        </div>
    </main>
    
</body>
</html>