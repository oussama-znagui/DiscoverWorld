<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <header class="py-5 bg-gradient-to-tl from-rose-100 to-teal-100">
        <nav class=" border-gray-200 dark:bg-gray-900 px-10">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img class="h-16" src="{{ asset('images/logo.png') }}" alt="Logo">
                    <span class="self-center text-2xl  whitespace-nowrap dark:text-white font-extrabold">DiscoverWorld</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <a href="/" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Voir le fil d'actualité</a>

                </div>

            </div>
        </nav>

        <!-- Container for demo purpose -->
        <div class="container my-24 mx-auto md:px-6">
            <!-- Section: Design Block -->
            <section class="mb-32">
                <!-- Jumbotron -->
                <div class="container mx-auto text-center lg:text-left xl:px-32">
                    <div class="flex grid items-center lg:grid-cols-2">
                        <div class="mb-12 lg:mb-0">
                            <div class="relative z-[1] block rounded-lg bg-[hsla(0,0%,100%,0.55)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] backdrop-blur-[30px] dark:bg-[hsla(0,0%,5%,0.55)] dark:shadow-black/20 md:px-12 lg:-mr-14">
                                <h2 class="mb-8 text-3xl font-bold">{{$recit->titre}}</h2>
                                <div class="mx-auto mb-8 flex flex-col md:flex-row md:justify-around lg:justify-between">


                                    <p class="mx-auto mb-4 flex items-center md:mx-0 md:mb-2 lg:mb-0">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M5 8a4 4 0 1 1 7.8 1.3l-2.5 2.5A4 4 0 0 1 5 8Zm4 5H7a4 4 0 0 0-4 4v1c0 1.1.9 2 2 2h2.2a3 3 0 0 1-.1-1.6l.6-3.4a3 3 0 0 1 .9-1.5L9 13Zm9-5a3 3 0 0 0-2 .9l-6 6a1 1 0 0 0-.3.5L9 18.8a1 1 0 0 0 1.2 1.2l3.4-.7c.2 0 .3-.1.5-.3l6-6a3 3 0 0 0-2-5Z" clip-rule="evenodd" />
                                        </svg>

                                        {{$recit->created_at}}
                                    </p>

                                    <p class="mx-auto mb-2 flex items-center md:mx-0 lg:mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor" height="25" width="25">
                                            <path d="M18,4.48a8.45,8.45,0,0,0-12,12l5.27,5.28a1,1,0,0,0,1.42,0L18,16.43A8.45,8.45,0,0,0,18,4.48ZM16.57,15,12,19.59,7.43,15a6.46,6.46,0,1,1,9.14,0ZM9,7.41a4.32,4.32,0,0,0,0,6.1,4.31,4.31,0,0,0,7.36-3,4.24,4.24,0,0,0-1.26-3.05A4.3,4.3,0,0,0,9,7.41Zm4.69,4.68a2.33,2.33,0,1,1,.67-1.63A2.33,2.33,0,0,1,13.64,12.09Z" id="mainIconPathAttribute" fill="#000000" stroke-width="0" stroke="#ff0000" filter="url(#shadow)"></path>
                                            <filter id="shadow">
                                                <feDropShadow id="shadowValue" stdDeviation=".5" dx="0.6" dy="0" flood-color="black"></feDropShadow>
                                            </filter>
                                        </svg>
                                        {{$recit->destination->destination}}
                                    </p>
                                </div>
                                <p class="mb-8 pb-2 text-neutral-500 dark:text-neutral-300 lg:pb-0">
                                    {{$recit->description}}
                                </p>

                                <h2 class=" text-xl  font-bold">Conseils</h2>

                                <p class="mb-0 text-neutral-500 dark:text-neutral-300">
                                    {{$recit->conseil}}
                                </p>
                            </div>
                        </div>

                        <div>
                            <img src="https://mdbcdn.b-cdn.net/img/new/ecommerce/vertical/117.jpg" class="w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />
                        </div>
                    </div>
                </div>


                <div class="grid gap-4 w-3/4 my-5 m-auto bg-gray-400 p-4 rounded-lg">

                    <div class="grid grid-cols-5 gap-4">
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                        </div>
                    </div>
                </div>


            </section>

        </div>

    </header>

</body>

</html>