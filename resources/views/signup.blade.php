@extends('header')

@section('content')
    <div class="flex justify-center mt-5">
        <div class="w-full max-w-xs">
            <form action="{{route('signup')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf

                @if ($errors->has('name'))
                    <span>
                        <strong style="color: red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif

                <!-- Name Field -->
                @if ($errors->has('name'))
                    <span>
                        <strong style="color: red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="name" name="name">
                </div>
                
                <!--Email Field -->
                @if ($errors->has('email'))
                    <span>
                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Email" name="email">
                </div>
                
                <!--Key Programming Field -->
                @if ($errors->has('keyprogramming'))
                    <span>
                        <strong style="color: red">{{ $errors->first('keyprogramming') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="keyprogramming">Key Programming Languages</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="keyprogramming" type="keyprogramming" placeholder="Languages" name="keyprogramming">
                </div>
                
                <!--Profile Field -->
                @if ($errors->has('profile'))
                    <span>
                        <strong style="color: red">{{ $errors->first('profile') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="profile">Profile</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="profile" type="profile" placeholder="Profile" name="profile">
                </div>
                
                <!--Education Field -->
                @if ($errors->has('education'))
                    <span>
                        <strong style="color: red">{{ $errors->first('education') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="education">Education</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="education" type="education" placeholder="Education" name="education">
                </div>
                
                <!--URL Field -->
                @if ($errors->has('URLlinks'))
                    <span>
                        <strong style="color: red">{{ $errors->first('URLlinks') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="URLlinks">URL Links</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="URLlinks" type="URLlinks" placeholder="URL" name="URLlinks">
                </div>
                
                <!--Password Field -->
                @if ($errors->has('password'))
                    <span>
                        <strong style="color: red">{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="********" name="password">
                </div>
                
                <!--Confirm Password Field -->
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">Confirm Password</label>          
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" type="password" placeholder="********" name="password_confirmation">
                </div>

                <!--Submit Button -->
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Sign-Up</button>
                </div>
            </form>

        </div>
    </div>
    
@endsection