<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>


    <title>Log In</title>
</head>

<body>
    <main>

        <div class="flex flex-col items-center w-1/4 mt-9 w-full">
            <form class="border p-5" action="{{route('login')}}" method="post">

                <div class="ml-2 mt-4 mb-2">
                    <label class="inline">E-mail</label>
                    <input class="border-gray-400 w-full" type="text" name="email" />
                </div>
                <div class="ml-2 mt-4 mb-2">
                    <label class="inline">Password</label>
                    <input class="border-gray-400 w-full" type="password" name="password" />
                </div>

                <button class="border bg-gray-800 text-white p-2 rounded-md mt-4 " type="submit">Log In</button>
            <input type="hidden" name="_token" value="{{csrf_token()}}"> </input>
            </form>

            <div>
                <a class="text-blue-700" href="/reset"> Reset Password </a>
                <p> Don't have an account? <a class="text-blue-700" href="/register"> Register here </a></p>

            </div>


        </div>



    </main>



</body>

</html>