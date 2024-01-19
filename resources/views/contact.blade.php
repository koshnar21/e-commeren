<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />

        @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto my-20 w-1/3 border border-pink-400 bg-white">
    <div class="p-5 space-y-5 shadow-xl">
        <h4 class="text-center text-3xl">Contact Us</h4>
        <form >
            <div class="grid grid-cols-2 gap-5">
                <input type="text " class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-e-pink-400" placeholder="First name">
                <input type="text " class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-e-pink-400" placeholder="Last name">
                <input type="text " class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-e-pink-400 col-span-2" placeholder="Phone">
                <input type="text " class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-e-pink-400 col-span-2" placeholder="Email">
                <textarea class="border border-gray-500 px-4 py-2 focus:outline-none focus:border-e-pink-400  " cols="10" rows="5" placeholder="Write your message"></textarea>


            </div>
            <input type="submit" class="focus:outline-none mt-5 bg-pink-400 px-4 py-2 text-white font-bold w-full">

        </form>

    </div>
</div>
</body>
</html>