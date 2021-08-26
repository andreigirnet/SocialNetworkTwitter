<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-8 bg-gray-300 border border-gray-400 rounded-lg">
        <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('E-Mail Address') }}</label>


                                <input id="email" type="email" class="border border-gray-400 p-2 w-full" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="width:300px; ">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="mb-6">
                            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="border border-gray-400 p-2 w-full" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <div>
                                <input id="remember" type="checkbox" class="mr-1" name="remember">
                                <label for="password" class="text-xs text-gray-700 font-bold uppercase" {{old('remember') ? 'checked' : ''}}>Remember Me</label>
                            </div>
                        </div>

                        <div class="mb-6">
                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">Login</button>
                            <a href="{{route('password.request')}}" class="text-xs text-blue-500 ml-20 ">Forgot your password</a>
                        </div>

                        <div class=" ml-4">
                            <p>Have an account? Go to <a href="{{ url('/register') }}" style="color: cadetblue">Register page</a></p>
                        </div>

                    </form>
        </div>
    </div>
</div>
</x-master>
