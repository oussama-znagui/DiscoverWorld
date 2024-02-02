<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>DiscoverWorld</title>
</head>

<body>
    <header>

        <nav class="bg-white border-gray-200 dark:bg-gray-900 px-10">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img class="h-16" src="{{ asset('images/logo.png') }}" alt="Logo">
                    <span class="self-center text-2xl  whitespace-nowrap dark:text-white font-extrabold">DiscoverWorld</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="/add" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">créer un récit</a>

                </div>

            </div>
        </nav>

        <div class="flex flex-col justify-center items-center my-5">

            <!-- <img class="h-64" src="{{ asset('images/a.jpg') }}" alt=""> -->
            <div class="bg-[url('{{ asset('images/a.jpg') }}')] w-3/4 h-48  bg-cover	bg-no-repeat	bg-center">

            </div>
            <h1 class="text-center  mb-4 text-4xl my-5 font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl ">We invest in the world’s potential</h1>
            <p class="text-center  mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Learn more
                <svg class=" w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>


        </div>




    </header>
    <main>
        <section class="my-16">
            <h1 class="text-center  mb-4 text-2xl my-5 font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl lg:text-4xl ">We invest in the world’s potential</h1>
            <p class="text-center  mb-6 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>


            <div class="grid grid-cols-1 md:grid-cols-2 md:grid-cols-3 gap-4 w-3/4 m-auto">

                @foreach($recits as $recit)

                <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="">
                    <a href="#">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$recit->titre}}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    <a href="/recit/{{$recit->id}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

                @endforeach



            </div>


        </section>
    </main>


    <footer class="bg-gray-200 my-2 rounded-lg shadow dark:bg-gray-900 m-4 w-3/4 m-auto">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img class="h-16" src="{{ asset('images/logo.png') }}" alt="Logo">
                    <span class="self-center text-2xl  whitespace-nowrap dark:text-white font-extrabold">DiscoverWorld</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">DiscoverWord™</a>. All Rights Reserved.</span>
        </div>
    </footer>





</body>

</html>