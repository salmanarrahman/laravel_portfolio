<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body>

    <div class="container mx-auto">
        <div class="navbar bg-base-100">
            <div class="navbar-start">
                <div class="dropdown">
                    <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                        <li><a>Work Experience</a></li>
                        <li><a>Projects</a></li>
                    </ul>
                </div>
                <a class="btn btn-ghost text-xl">JOHN DOE</a>
            </div>
            <div class="navbar-center hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a>Work Experience</a></li>
                    <li><a>Projects</a></li>
                </ul>
            </div>
            <div class="navbar-end">
                <a class="btn">Contact Me</a>
            </div>
        </div>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>

    </div>





</body>

</html>
