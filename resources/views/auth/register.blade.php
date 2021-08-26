<x-master>
<div class="container mx-auto flex justify-center ">
    <div class="px-12 py-5 bg-gray-300 border border-gray-400 rounded-lg">
        <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--User name section-->
                            <div class="mb-6">
                                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>


                                <input id="username" type="text" class="border border-gray-400 p-2 w-full" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus style="width:300px; ">

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="mb-6">
                                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700"> Complete Name</label>


                                <input id="name" type="text" class="border border-gray-400 p-2 w-full" name="email" value="{{ old('name') }}" required autocomplete="name" autofocus style="width:300px; ">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

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
                                <label for="password-confirm" class="block mb-2 uppercase font-bold text-xs text-gray-700">Confirm your password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="border border-gray-400 p-2 w-full" name="password-confirm" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0 ">
                            <div class="col-md-6 offset-md-4 flex" >
                                <button type="submit" class="px-6 py-4 rounded text-sm uppercase bg-blue-600 text-white ">
                                    {{ __('Register') }}
                                </button>
                                <div class=" ml-4">
                                <p>Have an account? <br>Go to <a href="{{ url('/login') }}" style="color: cadetblue">Login page</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</x-master>
