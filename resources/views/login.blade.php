@extends('header')

@section('content')
    <div class="flex justify-center mt-5">
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('login')}}" method="POST">
                @csrf
                @if (session('status'))
                    <span>
                        <strong style="color: red">{{ session('status') }}</strong>
                    </span>
                @endif

                @if ($errors->has('email'))
                    <span>
                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="text" placeholder="Email" value="{{old('email')}}">
                </div>
                

                @if ($errors->has('password'))
                    <span>
                        <strong style="color: red">{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" placeholder="********">
                </div>

                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Log In</button>
                </div>
            </form>
        </div>
    </div>
@endsection