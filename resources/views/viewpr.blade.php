 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> View Product</title>
    @vite('resources/css/app.css')
</head>

<body>
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
                    <a href="home" class="text-gray-200 hover:text-white transition">Contact</a>
                    <a href="home" class="text-gray-200 hover:text-white transition">About</a>
                    <a href="login" class="text-gray-200 hover:text-white transition">Sign Up</a>
                </div>
                <a href="" class="text-gray-200 hover:text-white transition">Login/Register</a>
            </div>
        </div>
    </nav>
    <div class="container py-4 flex items-center gap-3">
        <a href="home" class="text-pink-400 text-base">Home
        <i class='bx bx-home'></i>
        </a>
        <span class="text-sm text-gray-400">
        <i class='bx bx-chevron-right'></i>
        </span>
        <a href="viewpr" class="text-gray-600 font-medium">View Product</a>
    </div>

    <div class="container grid grid-cols-2 gap-8">
        <div>
        <img src="./image/jacket.jpeg " class="w-12/12">
        <div class="grid  grid-cols-4 gap-4 mt-4">
        <img src="./image/jacket.jpeg " class="w-full cursor-pointer border border-pink-500">
        <img src="./image/jacket.jpeg " class="w-full cursor-pointer border ">
        <img src="./image/jacket.jpeg " class="w-full cursor-pointer border ">
        <img src="./image/jacket.jpeg " class="w-full cursor-pointer border ">

        </div>
        </div>
        <div>
            <h2 class="text-3xl font-medium uppercase mb-2">Nike Swoosh Jacket</h2>
            <div class="flex items-center mb-4">
            <div class="flex gap-1 text-sm text-yellow-400">
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
                <span><i class='bx bxs-star'></i></span>
            </div>
            <div class="text-xs text-gray-500 ml-3">(123 Reviews)</div>
        </div>
        <div class="space-y-2">
        <p class="text-gray-800 font-semibold">
            <span>availability</span>
            <span class="text-green-500">In Stock</span>
        </p>
        <p class="space-x-2">
            <span class="text-gray-800 font-semibold">Brand:</span>
            <span class="text-gray-600">Nike</span>
        </p>
        <p class="space-x-2">
            <span class="text-gray-800 font-semibold">Category:</span>
            <span class="text-gray-600">Jacket</span>
        </p>
         <p class="space-x-2">
            <span class="text-gray-800 font-semibold">Br:</span>
            <span class="text-gray-600">bewjsk789</span>
        </p>
        </div>
        <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
            <p class="text-2xl text-red-500 font-semibold">$23.00</p>
            <p class="text-base text-gray-400 line-through">$32.00</p>
        </div>
        <div class="p-4">
        <h3 class="uppercase text-gray-800 font-medium text-xl">Size</h3>
                    <div class="flex flex-row my-3">
                        <div  class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1  hover:text-gray-900"><a href="">XL</a></div>
                        <div  class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1  hover:text-gray-900"><a href="">XXL</a></div>
                        <div  class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1  hover:text-gray-900"><a href="">L</a></div>
                        <div  class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1  hover:text-gray-900"><a href="">M</a></div>
                        <div  class="border-2 border-gray-300 text-gray-400 rounded-md text-xs px-2 py-1  hover:text-gray-900"><a href="">S</a></div>
                    </div>
                    <h3 class="uppercase text-gray-800 font-medium text-xl">color</h3>
                    <div class="flex flex-row my-3">
                    <div class="bg-black  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-blue-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-white  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-red-800  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    <div class="bg-green-700  h-5 w-5 rounded-full shadow-md mr-2"></div>
                    </div>
                    <div class="mt-4">
                    <h3 class="uppercase text-gray-800 font-medium text-xl">Quantity</h3>
                    <div class="flex border border-gray-300 text-gray-600 divide-x divide-gray-300 w-max">
                        <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>
                        <div class="h-8 w-8 text-base flex items-center justify-center  ">2</div>
                        <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>
                    </div>
                    </div>
                    <div class="flex gap-3 border-b border-gray-200 pb-5 mt-6">
                        <a href="" class="bg-pink-600 border border-pink-800 text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-pink-800 transition">
                        <i class='bx bx-cart'></i>Add to Cart
                        </a>
                        <a href="" class="bg-pink-600 border border-pink-800 text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-pink-800 transition">
                        <i class='bx bx-heart'></i>Wishlist
                        </a>
                    </div>
                    <div class="flex gap-3 mt-4">
                        <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                        <i class='bx bxl-facebook-circle'></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                        <i class='bx bxl-twitter' ></i>
                                            </a>
                        <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full border border-gray-300 flex items-center justify-center">
                        <i class='bx bxl-instagram' ></i>  
                                          </a>
                    </div>

    </div>
    </div>
    </div>

    <footer class="bg-white border-t border-green-100 pt-16 pb-12 ">
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

</html>
