<x-app>
    <form action="{{$user->path()}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <!--Input field for name-->
       <div class="mb-6">
           <label for="name" class="block mb-2 font-bold text-xs text-gray-700">Name</label>
           <input class="border border-gray-400 p-2 w-full" type="text" name="name" id="name" value="{{$user->name}}" required >
           @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
           @enderror
       </div>
            <!--Input field for username-->
            <div class="mb-6">
                <label for="username" class="block mb-2 font-bold text-xs text-gray-700">Username</label>
                <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" value="{{$user->username}}" required >
                @error('username')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 font-bold text-xs text-gray-700">Email</label>
                <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{$user->email}}" required >
                @error('email')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="username" class="block mb-2 font-bold text-xs text-gray-700">Username</label>
                <input class="border border-gray-400 p-2 w-full" type="text" name="username" id="username" value="{{$user->username}}" required >
                @error('username')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <!--Input field for profile description-->
            <div class="mb-6">
                <label for="profile_description" class="block mb-2 font-bold text-xs text-gray-700">Profile description</label>
                <textarea class="w-full border border-gray-500" style="height: 200px; resize: none" type="text" name="profile_description" id="profile_description" value="{{$user->profile_description}}" ></textarea>
                @error('username')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <!--Input field for banner avatar-->
            <div class="mb-6">
                <label for="banner_avatar" class="block mb-2 font-bold text-xs text-gray-700">Banner Avatar</label>
                <input class="border border-gray-400 p-2 w-full" type="file" name="banner_avatar" id="banner_avatar" value="{{$user->banner_avatar}}" >
                @error('banner_avatar')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <!--Input field for avatar file upload-->
            <div class="mb-6">
                <label for="avatar" class="block mb-2 font-bold text-xs text-gray-700">Picture Profile</label>
                <input class="border border-gray-400 p-2 w-full" type="file" name="avatar" id="avatar" >
                @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <!--Input field for confirm-password-->
            <div class="mb-6">
                <label for="password" class="block mb-2 font-bold text-xs text-gray-700">Password</label>
                <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required >
                @error('password')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <!--Input field for confirm password-->
            <div class="mb-6">
                <label for="password" class="block mb-2 font-bold text-xs text-gray-700">Confirm Password</label>
                <input class="border border-gray-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required >
                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <!--Button for submitting-->
             <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                    Submit
                </button>
                 <a href="{{$user->path()}}" class="hover:underline">Cancel</a>
             </div>
    </form>
</x-app>
