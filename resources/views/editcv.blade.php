@extends('header')

@section('content')
    <div class="flex justify-center mt-5">
        <div class="w-full max-w-xs">
            <form action="{{route('editcv')}}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf

                <!-- Name Field -->
                @if ($errors->has('name'))
                    <span>
                        <strong style="color: red">{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Name</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="name" name="name" value='{{old('name', $cv[0]->name)}}'>
                </div>
                
                <!--Key Programming Field -->
                @if ($errors->has('keyprogramming'))
                    <span>
                        <strong style="color: red">{{ $errors->first('keyprogramming') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="keyprogramming">Key Programming Languages</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="keyprogramming" type="keyprogramming" placeholder="Languages" name="keyprogramming" value="{{old('keyprogramming', $cv[0]->keyprogramming)}}">
                </div>
                
                <!--Profile Field -->
                @if ($errors->has('profile'))
                    <span>
                        <strong style="color: red">{{ $errors->first('profile') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="profile">Profile</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="profile" type="profile" placeholder="Profile" name="profile" value="{{old('profile', $cv[0]->profile)}}">
                </div>
                
                <!--Education Field -->
                @if ($errors->has('education'))
                    <span>
                        <strong style="color: red">{{ $errors->first('education') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="education">Education</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="education" type="education" placeholder="Education" name="education" value="{{old('education', $cv[0]->education)}}">
                </div>
                
                <!--URL Field -->
                @if ($errors->has('URLlinks'))
                    <span>
                        <strong style="color: red">{{ $errors->first('URLlinks') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="URLlinks">URL Links</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="URLlinks" type="URLlinks" placeholder="URL" name="URLlinks" value="{{old('URLlinks', $cv[0]->URLlinks)}}">
                </div>

                <!--Submit Button -->
                <div class="flex items-center justify-between">
                    <button class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Save Changes</button>
                </div>
            </form>

        </div>
    </div>
    
@endsection