<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Data Driven smart garbase system</title>
    </head>
    
    <div class=" w-full  p-2 bg-sky-900 mb-3">
        <nav class="flex justify-between items-center mb-4">
            {{-- <a href="/" 
                ><img class="w-24" src = "{{asset('images/logo.png')}} " alt="" class="logo"
            /></a> --}}
            <h2 class="text-white flex space-x-6 mr-6 text-lg">Data driven smart garbage collection system</h2>
            <ul class="flex space-x-6 mr-6 text-lg text-white">
                
                <li>
                    <a href="/register" 
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="/login" 
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                     >
                </li>

            </ul>
        </nav>
    </div>