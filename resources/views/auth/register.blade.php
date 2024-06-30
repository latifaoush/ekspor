<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   
</head>

<body>
    <div class="relative flex justify-center h-screen w-screen overflow-hidden shadow-md bg-cover bg-center"
        style="background-image: url('/images/login.jpg');">
        <div
            class="w-full p-2 m-auto bg-white rounded-md shadow-md lg:max-w-lg md:max-w-md sm:max-w-sm bg-opacity-80 backdrop-blur-md">
            <h1 class="text-3xl font-semibold text-center text-gray-700">Register</h1>

            <form id="registerForm" action="{{ route('register.save') }}" method="POST" class="max-w-sm mx-auto">
                @csrf
                <!-- Display Errors -->
                @if ($errors->any())
                    <div id="errorPopup" class="hidden">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

              

                <div class="mb-4">
                    <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Your
                        Name</label>
                    <input type="text" id="name" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                        value="{{ old('name') }}" required autofocus />
                </div>
                <div class="mb-4">
                    <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Your
                        email</label>
                    <input type="email" id="email" name="email"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                        placeholder="name@gmail.com" value="{{ old('email') }}" required />
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Your
                        password</label>
                    <input type="password" id="password" name="password"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                        required />
                </div>
                <div class="mb-4">
                    <label for="password_confirmation"
                        class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Repeat password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                        required />
                </div>
                <div class="mb-4">
                    <label for="phone" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Your
                        Phone Number</label>
                    <input type="tel" id="phone" name="phone"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
                        required pattern="[0-9]{10,15}" />
                </div>
                <div class="mb-4">
                    <label for="role"
                        class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">User</label>
                    <select id="role" name="role"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                        <option value="Pembeli" {{ old('role') == 'Pembeli' ? 'selected' : '' }}>Buyer</option>
                        <option value="Petani" {{ old('role') == 'Petani' ? 'selected' : '' }}>Farmer</option>
                    </select>
                </div>
                <div class="flex items-start mb-4">
                    <div class="flex items-center h-5">
                        <input id="terms" type="checkbox" name="terms"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"
                            required />
                    </div>
                    <label for="terms" class="ms-2 text-sm font-medium text-gray-900">I agree with the <a
                            href="#" class="text-blue-600 hover:underline">terms and conditions</a></label>
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Register
                        new account</button>
                </div>
            </form>

            <p class="text-center mt-4">Already have an account?
                <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 hover:underline">Login</a>
            </p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const errorPopup = document.getElementById('errorPopup');
            if (errorPopup) {
                alert(errorPopup.innerText);
            }
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const passwordConfirmation = document.getElementById('password_confirmation').value;

            if (password !== passwordConfirmation) {
                e.preventDefault();
                alert('Passwords do not match. Please try again.');
            }
        });
    </script>
</body>

</html>
