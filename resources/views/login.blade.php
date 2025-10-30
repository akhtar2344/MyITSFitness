<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | myITS Fitness</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex bg-gray-50">

    {{-- Left Illustration --}}
    <div class="hidden md:flex w-1/2 items-center justify-center bg-white">
        <img src="{{ asset('images/login-illustration.png') }}" 
             alt="Skater Girl Illustration"
             class="w-4/5 max-w-lg">
    </div>

    {{-- Right Login Form --}}
    <div class="flex flex-col justify-center w-full md:w-1/2 px-8 md:px-16 bg-white">
        <div class="max-w-md mx-auto w-full">
            {{-- Logo --}}
            <div class="flex items-center space-x-2 mb-2">
                <img src="{{ asset('images/myitsfitness-logo.png.png') }}" alt="myITS Logo" class="w-8 h-8">
                <h1 class="text-2xl font-semibold text-gray-800">myITS <span class="text-blue-600">Fitness</span></h1>
            </div>
            <p class="text-gray-500 mb-6 text-sm">Stay active, stay healthy with myITS.</p>

            {{-- Welcome --}}
            <h2 class="text-2xl font-semibold text-gray-900 mb-6">
                Hi, <span class="text-blue-600">Student</span>
            </h2>

            {{-- Form --}}
            <form method="POST" action="{{ route('login.process') }}" class="space-y-5">
                @csrf
                {{-- Email --}}
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">MyITS Email</label>
                    <input type="email" name="email" id="email"
                           value="{{ old('email') }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                           placeholder="50000000000@student.its.ac.id" required>
                </div>

                {{-- Password --}}
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" id="password"
                           class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                           placeholder="enter your password" required>
                </div>

                {{-- Sign In Button --}}
                <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2.5 rounded-lg font-medium transition">
                    Sign in
                </button>

                {{-- Divider --}}
                <div class="flex items-center justify-center text-gray-400 text-sm">
                    <span class="border-t border-gray-300 w-1/4"></span>
                    <span class="mx-2">OR</span>
                    <span class="border-t border-gray-300 w-1/4"></span>
                </div>

                {{-- Login with myITS --}}
                <a href="{{ route('login.myits') }}"
                   class="flex items-center justify-center border border-gray-300 py-2 rounded-lg hover:bg-gray-50 transition">
                    <img src="{{ asset('images/myits-icon.png .png') }}" alt="myITS" class="w-5 h-5 mr-2">
                    <span class="text-sm font-medium text-gray-700">Login with MyITS</span>
                </a>
            </form>
        </div>
    </div>

</body>
</html>
