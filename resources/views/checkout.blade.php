<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        @vite('resources/css/app.css')
    <title>CheckOut</title>
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
        <a href="checkout" class="text-gray-600 font-medium">Checkout</a>
    </div>


    <div class="container grid grid-cols-12 items-start pb-16 pt-4">

    <div class="col-span-8 border border-gray-200 p-4 rounded">
        <h3 class="text-lg font-medium capitalize mb-4">checkout</h3>
        <div class="space-y-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="text-gray-600 mb-2">First Name <span class="text-pink-600"></span></label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Last Name <span class="text-pink-600"></span></label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
               
             </div>
            </div>
            <div>
                    <label class="text-gray-600 mb-2">Company Name </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Country/Region <span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Street Address<span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Town/City <span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Zip Code<span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Phone Number <span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
                <div>
                    <label class="text-gray-600 mb-2">Email Address <span class="text-pink-600">*</span> </label>
                    <input type="text" class="block w-full border border-gray-300 px-4 py-3 text-gray-600 text-sm rounded placeholder-gray-400 focus:border-pink-600 focus:right-0">
                </div>
        </div>
    </div>
    <div class="col-span-4 border border-gray-200 p-4 rounded">
        <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">Order Summary</h4>
        <div class="space-y-2">
            <div class="flex justify-between">
                <div>
                <h5 class="text-gray-800 font-medium">Puma Hudy</h5>
                <p class="text-sm text-gray-600">Size: M</p>
                </div>
            <p class="text-gray-600">x2</p>
            <p class="text-gray-800 font-medium">$23.00</p>
            </div>
        </div>
        <div class="flex justify-between border-b border-gray-200 text-gray-800 font-medium py-3 uppercase">
            <p>Subtotal</p>
            <p>$46.00</p>

        </div>
        <div class="flex justify-between border-b border-gray-200 text-gray-800 font-medium py-3 uppercase">
            <p>Shipping</p>
            <p>Free</p>

        </div>
        <div class="flex justify-between border-b border-gray-200 text-gray-800 font-medium py-3 uppercase">
            <p class="font-semibold">Total</p>
            <p>$46.00</p>

        </div>
        <div class="flex justify-between items-center border-b border-gray-200 text-gray-800 font-medium py-3 uppercase">Bank
                 <input type="radio" name="bank" id="bank" >
                
        <img src="./image/methods.png" class="h-4">
        </div>  <div class="flex justify-between items-center border-b border-gray-200 text-gray-800 font-medium py-3 uppercase">cash
                 <input type="radio" name="bank" id="bank" >
                
        <img src="./image/cash.jpg" class="h-10">
        </div>
        <div class="flex items-center mb-4 mt-2">
        <a href="#" class=" w-full block text-center  bg-pink-400 border border-pink-500 text-white px-4 py-3 rounded-md hover:bg-transparent hover:text-pink-400 transition">Place Order</a>
            </a>
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

</html