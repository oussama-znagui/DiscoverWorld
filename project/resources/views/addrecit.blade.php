<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Ajouter un recit</title>
</head>

<body>
    <section class="py-5 bg-gradient-to-tl from-rose-100 to-teal-100">
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

        <div class="flex justify-center items-center  h-auto ">

            <div class="container mx-auto my-4 px-4 lg:px-20">

                <form class="bg-gray-100 w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl" enctype="multipart/form-data" method="post" action="/add">
                    @csrf
                    <div class="flex">
                        <h1 class="font-bold uppercase text-5xl">Ajouter un recit</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-1 mt-5">
                        <input name="images[]" class="border-2  w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="file" multiple />

                    </div>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-1 mt-5">
                        <label for="">Destination</label>
                        <select name="destination_id" class="border-2  w-full bg-gray-100 text-gray-900  p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Titre*">
                            @foreach($destinations as $destination)
                            <option value="{{$destination->id}}">{{$destination->destination}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="grid grid-cols-1 gap-5 md:grid-cols-1 mt-5">
                        <input name="titre" class="border-2  w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Titre*" />
                        @error('titre')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="my-4">
                        <textarea name="description" placeholder="Description*" class="border-2  w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="my-4">
                        <textarea name="conseil" placeholder="Conseil" class="border-2  w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="my-2 w-1/2 lg:w-1/4">
                        <button class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                            Send Message
                        </button>
                    </div>
                </form>

                <div class="w-full lg:-mt-96 lg:w-2/6 px-8 py-12 ml-auto bg-blue-900 rounded-2xl">
                    <div class="flex flex-col text-white">
                        <h1 class="font-bold uppercase text-4xl my-4">Drop in our office</h1>
                        <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                            tincidunt arcu diam,
                            eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed, scelerisque ex.
                        </p>

                        <div class="flex my-4 w-2/3 ">

                            <div class="flex flex-col">
                                <h2 class="text-2xl">Adresse</h2>
                                <p class="text-gray-400">N° 123 Bloc F9 Cité Dakhla 80000,Agadir</p>
                            </div>
                        </div>

                        <div class="flex my-4  ">

                            <div class="flex flex-col">
                                <h2 class="text-2xl">Appelez-nous</h2>
                                <p class="text-gray-400">Tel: +212 (0) 669 66 62 05</p>
                                <p class="text-gray-400">Fax: +212 (0) 528 66 62 05</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </section>

</body>

</html>