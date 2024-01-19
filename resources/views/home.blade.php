    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">     
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        @vite('resources/css/app.css')
    </head>
    <body class= "bg-[#fbfbfb]">
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Your Website</title>
</head>

<body >
    <header class="py-4 shadow-sm bg-white">
        <div class="container flex items-center justify-between">
            <a href="">
                <img src="./image/coffeelogo.png" class="w-32">
            </a>
            <div class="w-full max-w-xl relative flex">
                <span class="absolute left-4 top-3 text-xl text-gray-400">
                <i class='bx bx-search-alt-2'></i>
                </span>
                <input type="text " class="w-full border border-pink-500 border-r-0 pl-12 py-3 pr-3 rounded-l-md focus:outline-none" placeholder="search">
                <button class="bg-pink-400 border border-pink-500 text-white px-8 rounded-r-md hover:bg-transparent hover:text-pink-400 transition">Search</button>
                 </div>
                <div class="flex items center space-x-4">
                    <a href="wishlist" class="text-center text-gray-700 hover:text-pink-400 transition relative ">
                        <div class="text-2xl">
                        <i class='bx bx-heart'></i>
                        </div>
                        <div class="text-xs leading-3">Wishlist</div>
                        <span class="absolute right-0 -top-1 2-5 h-5 rounded-full flex items-center justify-center bg-pink-400 text-white text-sm"></span>
                    </a>
                    <a href="#" class="text-center text-gray-700 hover:text-pink-400 transition relative ">
                        <div class="text-2xl">
                        <i class='bx bx-cart' ></i>
                        </div>
                        <div class="text-xs leading-3">Cart</div>
                        <span class="absolute right-0 -top-1 2-5 h-5 rounded-full flex items-center justify-center bg-pink-400 text-white text-sm"></span>
                    </a>
                    <a href="useracc" class="text-center text-gray-700 hover:text-pink-400 transition relative ">
                        <div class="text-2xl">
                        <i class='bx bx-user' ></i>    
                    </div>
                        <div class="text-xs leading-3">User</div>
                        <span class="absolute right-0 -top-1 2-5 h-5 rounded-full flex items-center justify-center bg-pink-400 text-white text-sm"></span>
                    </a>
                </div>
        </div>
    </header>
    <nav class="bg-gray-800">
        <div class="container flex">
            <div class="px-8 py-4 bg-pink-400 flex items-center cursor-pointer relative group">
                <span class="text-white">
                <i class='bx bx-menu'></i>
                </span>
                <span class="capitalize ml-2 text-white">All categories</span>
                <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-dashed opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="./image/pullover.png" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">
                        Men`s Clothing
                    </span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="./image/dress.png" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">
                        Women`s Clothing
                    </span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="./image/sport.png" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">
                        Sport`s Clothing
                    </span>
                    </a><a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                    <img src="./image/guitar.png" class="w-5 h-5 object-contain">
                    <span class="ml-6 text-gray-600 text-sm">
                    Musical`s
                    </span>
                    </a>

                </div>
            </div>
            <div class="flex items-center justify-between flex-grow pl-12">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="home" class="text-gray-200 hover:text-white transition">Home</a>
                    <a href="/contact" class="text-gray-200 hover:text-white transition">Contact</a>
                    <a href="home" class="text-gray-200 hover:text-white transition">About</a>
                    <a href="login" class="text-gray-200 hover:text-white transition">Sign Up</a>
                </div>
                <a href="login" class="text-gray-200 hover:text-white transition">Login/Register</a>
            </div>
        </div>
    </nav>
    <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url(./image/bannerr.jpg);">
                 <div class="container">
                    <h1 class="text-6xl text-gray-800 font-medium mb-4 capitalize">Best Collection <br>For you</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, sint quod? Eligendi explicabo amet sint officia beatae voluptate quisquam maxime!</p>
                    <div class="mt-12">
                        <a href="#" class="bg-pink-500 border border-pink-400 text-white px-8 py-3 font-medium rounded-md hover:bg-transparent hover:text-pink-500 "> Shop Now</a>
                    </div>
                 </div>
</div>


   
        <div class="container py-16">
        <h2 class="text-3xl justify-between my-5 space-y-2">Browse by Category</h2>

        <div class="w-10/12 grid grid-cols-4 gap-8 mx-auto justify-center">
        <a href="" class=" bg-pink-500 border border-pink-400 text-white  uppercase   hover:bg-transparent hover:text-pink-500 transition ">
                <div class="border border-pink-600 rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                    <img src="./image/dress.png" class="w-12 h-12 object-contain">
                    <div>
                        <h4 class="font-medium text-lg ">Women`s Clothing</h4>
                    </div>
                </div>
                </a>
                <a href="" class=" bg-pink-500 border border-pink-400 text-white  uppercase   hover:bg-transparent hover:text-pink-500 transition ">
                <div class="border border-pink-600 rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                    <img src="./image/pullover.png" class="w-12 h-12 object-contain">
                    <div>
                        <h4 class="font-medium text-lg ">Men`s Clothing</h4>
                    </div>
                </div>
                </a>
                <a href="sport" class=" bg-pink-500 border border-pink-400 text-white  uppercase   hover:bg-transparent hover:text-pink-500 transition ">
                <div class="border border-pink-600 rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                    <img src="./image/sport.png" class="w-12 h-12 object-contain">
                    <div>
                        <h4 class="font-medium text-lg ">Sport`s Clothing</h4>
                    </div>
                </div>
                </a>
                <a href="" class=" bg-pink-500 border border-pink-400 text-white  uppercase   hover:bg-transparent hover:text-pink-500 transition ">
                <div class="border border-pink-600 rounded-sm px-3 py-6 flex justify-center items-center gap-5">
                    <img src="./image/guitar.png" class="w-12 h-12 object-contain">
                    <div>
                        <h4 class="font-medium text-lg ">Musical`s</h4>
                    </div>
                </div>
                </a>
                
            </div>
    
        <div class="my-20">
            <div class="flex flex-row justify-between my-5">
                <h2 class="text-3xl">Mens Collection</h2>
                <a href="viewpr" class="text-xl flex flow-row">View All
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 ml-1" viewBox="0 0 24 24"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"/></svg>
                </a>
            </div>
        </div> 
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/jacket.jpeg " class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Nike`s Jacket</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>                            Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/gucci.jpeg " class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Gucci Hudy</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>                            Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/hudy.jpeg " class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Nike`s Hudy</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>                            Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/Tishirt1.png " class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Nike`s T-shirt</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-col xl:flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg> Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="my-20">
            <div class="flex flex-row justify-between my-5">
                <h2 class="text-3xl">Musical`s</h2>
                <a href="viewpr" class="text-xl flex flow-row">View All
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 ml-1" viewBox="0 0 24 24"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"/></svg>
                </a>
            </div>
        </div> 
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/doublebass.jpeg " class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Double bass</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>                            Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/doublebass.jpeg" class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Double bass</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>                            Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/doublebass.jpeg " class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Double bass</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>                            Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/doublebass.jpeg " class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Double bass</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-col xl:flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg> Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-20">
            <div class="flex flex-row justify-between my-5">
                <h2 class="text-3xl">Sport`s Clothing</h2>
                <a href="#" class="text-xl flex flow-row">View All
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 ml-1" viewBox="0 0 24 24"><path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"/></svg>
                </a>
            </div>
        </div> 
        <div class="grid grid-flow-row grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/tishirt1.png " class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Nike T-shirt</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="checkout" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>                            Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/pumahudy.jpeg" class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Puma Hudy</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>                            Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/longnike.jpg " class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Long Sleeve Jersey Nike</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-col xl:flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>                            Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
            <div class="shadow-lg rounded-lg">
                <a href="#">
                <img src="./image/setsgym.jpeg " class="rounded-tl-lg rounded-tr-lg">
                </a>
                <div class="p-5">
                    <h3><a href="#">Sets Gym</a></h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="flex flex-col xl:flex-row my-3">
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">XXL</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">L</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">M</div>
                        <div class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1">S</div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <a href="#" class="bg-gradient-to-r from-red-500 to-pink-500 rounded-full py-2 px-4 text-gray-50  text-sm self-start my-5 items-center flex flex-row hover:from-pink-600 hover:to-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255);transform: msFilter"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg> Add to cart
                        </a>
                        <a href="viewpr" class="bg-purple-600 rounded-full py-2 px-4 text-gray-50   self-start my-5 items-center flex flex-row hover:bg-purple-700 text-sm">
                           
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1"> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg> Views Details
                        </a>
                    </div>
                </div>
            </div>
        </div>




        <footer class="bg-white border-t border-green-100 pt-16 pb-12">
       <div class="container grid grid-cols-3">
        <div class="col-span-1 space-y-8">
            <p class="text-gray-500">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis, praesentium.
            </p>
            <div class="flex space-x-6">
                <a href="#" class="text-gray-500 hover:text-gray-500">
                <i class='bx bxl-facebook-circle'></i>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-500">
                <i class='bx bxl-instagram' ></i>  
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-500">
                <i class='bx bxl-twitter' ></i>
                </a>
            </div>
        </div>
        <div class="col-span-2 grid grid-cols-2 gap-8">
            <div class="grid grid-cols-2 gap-8">
                <div>
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Support</h3>
                <div class="mt-4 space-y-4">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Pricing

                    </a>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guides
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">API Status
                        
                        </a>
                </div>

            </div>
            <div>
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Account</h3>
                <div class="mt-4 space-y-4">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">My Account

                    </a>
                    <a href="login" class="text-base text-gray-500 hover:text-gray-900 block">Login/Register
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Cart
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Wishlist
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Shop
                        
                        </a>
                </div>

            </div>
        </div>
        <div class="grid grid-cols-2 gap-8">
                <div>
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">COMPANY</h3>
                <div class="mt-4 space-y-4">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">About

                    </a>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Blog
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Jobs
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Press
                        
                        </a>
                </div>

            </div>
            <div>
                <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">LEGAL</h3>
                <div class="mt-4 space-y-4">
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Claim

                    </a>
                    <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Privacy
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Policy
                        
                        </a>
                        <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Terms
                        
                        </a>
                </div>

            </div>
        </div>
       </div>
       </div>
    </footer>
    <div class="bg-gray-800 py-4">
        <div class="container flex items-center justify-between">
            <p class="text-white">@ KOSHNAR - All Rights Reserved</p>
            <div>
                <img src="./image/methods.png" class="h-5">
            </div>
        </div>
    </div>
          
        

</body>