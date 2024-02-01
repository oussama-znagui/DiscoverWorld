<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ajouter un recit</title>
</head>

<body>
    <section class="py-5">
        <nav class="bg-white border-gray-200 dark:bg-gray-900 px-10">
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

        <div class="flex justify-center items-center  h-auto bg-white">

            <div class="container mx-auto my-4 px-4 lg:px-20">

                <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                    <div class="flex">
                        <h1 class="font-bold uppercase text-5xl">Ajouter un recit</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="First Name*" />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Last Name*" />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" placeholder="Email*" />
                        <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="number" placeholder="Phone*" />
                    </div>
                    <div class="my-4">
                        <textarea placeholder="Message*" class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="my-2 w-1/2 lg:w-1/4">
                        <button class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                            Send Message
                        </button>
                    </div>
                </div>

                <div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-blue-900 rounded-2xl">
                    <div class="flex flex-col text-white">
                        <h1 class="font-bold uppercase text-4xl my-4">Drop in our office</h1>
                        <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                            tincidunt arcu diam,
                            eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque ex.
                        </p>

                        <div class="flex my-4 w-2/3 lg:w-1/2">
                            <div class="flex flex-col">
                                <i class="fas fa-map-marker-alt pt-2 pr-2" />
                            </div>
                            <div class="flex flex-col">
                                <h2 class="text-2xl">Main Office</h2>
                                <p class="text-gray-400">5555 Tailwind RD, Pleasant Grove, UT 73533</p>
                            </div>
                        </div>

                        <div class="flex my-4 w-2/3 lg:w-1/2">
                            <div class="flex flex-col">
                                <i class="fas fa-phone-alt pt-2 pr-2" />
                            </div>
                            <div class="flex flex-col">
                                <h2 class="text-2xl">Call Us</h2>
                                <p class="text-gray-400">Tel: xxx-xxx-xxx</p>
                                <p class="text-gray-400">Fax: xxx-xxx-xxx</p>
                            </div>
                        </div>

                        <div class="flex my-4 w-2/3 lg:w-1/2">
                            <a href="https://www.facebook.com/ENLIGHTENEERING/" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                                <i class="fab fa-facebook-f text-blue-900" />
                            </a>
                            <a href="https://www.linkedin.com/company/enlighteneering-inc-" target="_blank" rel="noreferrer" class="rounded-full bg-white h-8 w-8 inline-block mx-1 text-center pt-1">
                                <i class="fab fa-linkedin-in text-blue-900" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COMPONENT CODE -->
        </div>


    </section>

</body>

</html>