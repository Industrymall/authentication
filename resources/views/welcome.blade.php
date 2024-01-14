<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .post-container {
            border: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 5px;
        }

        .user-id {
            font-weight: bold;
            color: #007BFF;
        }

        .post-body {
            color: #6C757D;
        }
    </style>
</head>
<body>
@if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

@foreach ($data as $item)
    <div class="post-container">
        <h2>{{ $item['title'] }}</h2>
        <p class="user-id">User ID: {{ $item['userId'] }}</p>
        <p>ID: {{ $item['id'] }}</p>
        <p class="post-body">Body: {{ $item['body'] }}</p>
    </div>
@endforeach

</body>
</html>
