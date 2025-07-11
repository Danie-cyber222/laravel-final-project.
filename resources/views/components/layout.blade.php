<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Position</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400,500,600&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-[#060606] text-white font-hanken-grotesk pb-20">
    <div>
        <div class="px-10">
            <nav class="flex justify-between items-center  py-10 border-b border-white/20">
                <div>
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                    </a>
                </div>
                <div class="space-x-6 bold">

                    @guest
                        <a href="/listjobs" class="text-4xl font-extrabold">Jobs</a>
                    @endguest
                    @auth
                        <a href="/">Job</a>
                        <a href="/career">Career</a>
                        <a href="/salaries">Salaries</a>
                        <a href="/companies">Companies</a>
                        <a href="/employerJob">Jobs</a>
                    @endauth

                </div>

                @auth
                    <div class="space-x-6 font-bold flex">
                        <a href="/jobs/create">post a job</a>

                        <form method="POST" action="/logout">
                            @csrf
                            @method('DELETE')
                            <button> Log Out </button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="space-x-2">
                        <a href="/register">Sign Up</a>
                        <a href="/login">Log in</a>
                    </div>
                @endguest
            </nav>
        </div>
        <main class="mt-10 p-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>