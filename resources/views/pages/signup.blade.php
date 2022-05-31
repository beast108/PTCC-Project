<x-base-layout title="Sign Up">
    <div class="h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                <h2 class="mt-6 text-3xl text-center font-extrabold text-gray-900">
                Create your account
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="#" method="POST">
                @csrf
                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input id="name" name="name" autocomplete="name" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-blue-500 focus:ring-1.5 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Name" value="{{old('name')}}">
                        @error('name')<span class="text-red-500 text-sm">{{$message}}</span> @enderror
                    </div>
                    <div>
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Email address" value="{{old('email')}}">
                        @error('email')<span class="text-red-500 text-sm">{{$message}}</span> @enderror
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Password">
                        @error('password')<span class="text-red-500 text-sm">{{$message}}</span> @enderror
                    </div>
                    <div>
                        <label for="password_confirmation" class="sr-only">Confirm password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Confirm password">
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Create Account
                    </button>
                </div>
                <div class="text-sm flex mt-6 font-medium text-gray-900">
                    <h3>
                    Already have an account?
                    </h3>
                    <a href="/" class="ml-2 text-blue-600 hover:text-blue-500">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-base-layout>