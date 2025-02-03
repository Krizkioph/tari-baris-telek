<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tari Baris Telek</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="pb-20 text-white bg-black font-hanken-grotest">

    
    <main class="mt-20 max-w-[986px] mx-auto">
        <x-page-heading>Login</x-page-heading>
        <div class="">
            <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
    
                <x-forms.input name="email" label="Email" type="email" />
                <x-forms.input name="password" label="Password" type="password" />
            
                <x-forms.button>Login In</x-forms.button>
            </x-forms.form>
        </div>
        

    </main>
</body>
</html>