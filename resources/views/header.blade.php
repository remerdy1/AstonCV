<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AstonCV</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <header class="block mt-4 lg:inline-block lg:mt-0 text-lg mr-4">
                    <h1 class="text-white hover:text-black"><a href="/">AstonCV</a></h1>
                </header>
            </div>
            
            @if(!Auth::check())
                <div>
                    <a href="/login" class="inline-block text-sm px-4 py-2 mx-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Log-In</a>
                </div>

                <div>
                    <a href="/signup"  class="inline-block text-sm px-4 py-2 mx-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Sign Up</a>
                </div>
            @else
                <div>
                    <a href="" class="inline-block text-sm px-4 py-2 mx-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Edit CV</a>
                </div>

                <div>
                    <a href=""  class="inline-block text-sm px-4 py-2 mx-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Log Out</a>
                </div>
            @endif
        </div>
    </nav>

    @yield('content');
</body>
</html>