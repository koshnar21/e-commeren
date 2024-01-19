<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>User Account</title>
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
        <a href="useracc" class="text-gray-600 font-medium">My Account</a>
    </div>

    <div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16">
        <div class="col-span-3">
            <div class="px-4 py-3 shadow flex items-center gap-4">
                <div class="flex-shrink-0">
                <img src="./image/photo.jpg" class="rounded-full w-14 h-14 border border-gray-200 p-1 object-cover">
            </div>
            <div class="flex-grow">
                <p class="text-gray-600">Hello,</p>
                <h4 class="text-gray-800 font-medium">
                    Koshnar Kamal
                </h4>
            </div>
        </div>
        <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600">
            <div class="space-y-1 pl-8">
                <a href="" class="relative text-pink-400 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                    <i class='bx bx-id-card'></i>
                    </span>
                    Manage Account
                </a>
                <a href="profileinfo" class="relative hover:text-pink-400 block  capitalize transition">
                   Profile Info
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                    Manage Address
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                    Change Password
                </a>
            </div>
            <div class="space-y-1 pl-8 pt-4">
                <a href="" class="relative hover:text-pink-400 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                    <i class='bx bx-gift' ></i>
                    </span>
                   My Order History
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                   My Returns
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                   My Cancellation
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                   My Reviews
                </a>
            </div>
            <div class="space-y-1 pl-8 pt-4">
                <a href="" class="relative hover:text-pink-400 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                    <i class='bx bx-id-card'></i>
                    </span>
                 Payment Method
                </a>
                <a href="" class="relative hover:text-pink-400 block  capitalize transition">
                   Voucher
                </a>
              
            </div>
            <div class="space-y-1 pl-8 pt-4">
                <a href="" class="relative hover:text-pink-400 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                    <i class='bx bx-heart' ></i>
                    </span>
                   Wishlist
                </a>
               
            </div>
            <div class="space-y-1 pl-8 pt-4">
                <a href="" class="relative hover:text-pink-400 block font-medium capitalize transition">
                    <span class="absolute -left-8 top-0 text-base">
                    <i class='bx bx-log-out'></i>
                    </span>
                   Log Out
                </a>
               
            </div>


        </div>
        </div>
        <div class="col-span-9 grid grid-cols-3 gap-4">
            <div class="shadow rounded bg-white px-4 pb-8">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-medium text-gray-800 text-lg">Personal Profile</h3>
                    <a href="#" class="text-pink-400">Edit</a>
                </div>
                <div class="space-y-1">
                    <h4 class="text-gray-700 font-medium">Koshnar Kamal</h4>
                    <p class="text-gray-800">koshnar.kama@gmail.com</p>
                    <p class="text-gray-800">0770 245 0308</p>
                </div>
            </div>
            <div class="shadow rounded bg-white px-4 pb-8">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-medium text-gray-800 text-lg">Shipping Address</h3>
                    <a href="#" class="text-pink-400">Edit</a>
                </div>
                <div class="space-y-1">
                    <h4 class="text-gray-700 font-medium">Koshnar Kamal</h4>
                    <p class="text-gray-800">27306 Sulaymaniah,Tuy Malik,kurdistan.</p>
                    <p class="text-gray-800">0770 245 0308</p>
                </div>
            </div>
            <div class="shadow rounded bg-white px-4 pb-8">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-medium text-gray-800 text-lg">Billing <Address></Address></h3>
                    <a href="#" class="text-pink-400">Edit</a>
                </div>
                <div class="space-y-1">
                    <h4 class="text-gray-700 font-medium">Koshnar Kamal</h4>
                    <p class="text-gray-800">27306 Sulaymaniah,Tuy Malik,kurdistan.</p>
                    <p class="text-gray-800">0770 245 0308</p>
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
</html>