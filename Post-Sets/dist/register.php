<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css">
    <link rel="icon" type="image/x-icon" href="../logo/book/Logo.png">
    <title>BookList || Register</title>
</head>

<body class="bg-gradient-to-r from-blue-500 via-blue-400 to-cyan-400 dark:from-blue-900 dark:via-blue-800 dark:to-cyan-800">
    <section class="py-8 px-4 my-10 sm:my-20 sm:py-0 sm:px-0">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <h1 class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2 transition-transform transform hover:rotate-180" src="../logo/book/Logo.png" alt="logo">
                𝐵𝑜𝑜𝓀𝐿𝒾𝓈𝓉
            </h1>
            <div class="w-full flex flex-col md:flex-row bg-white rounded-lg shadow-md dark:border md:mt-0 sm:max-w-max xl:p-0 dark:bg-blue-800 dark:border-gray-800">
                <div class="md:w-1/2 p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Create an account
                    </h1>
                    <!-- Form Inputs -->
                    <form class="space-y-4 md:space-y-6" method="post" action="auth/register_process.php">
                        <div class="flex space-x-4">
                            <div class="flex-1">
                                <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your First
                                    name</label>
                                <input type="first_name" name="first_name" id="first_name" class="bg-gray-200 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-white dark:border-black dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 focus:outline-none" placeholder="John" required="">
                            </div>
                            <div class="flex-1">
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Last
                                    name</label>
                                <input type="text" name="last_name" id="last_name" class="bg-gray-200 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-white dark:border-black dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 focus:outline-none" placeholder="Doe" required="">
                            </div>
                        </div>
                        <div class="relative">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                email</label>
                            <div class="absolute mt-3.5 left-0 flex items-center pl-3.5 pointer-events">
                                <svg data-tooltip-target="tooltip-email" class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                            </div>
                            <div id="tooltip-email" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                Icon no function
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <input type="email" name="email" id="email" class="bg-gray-200 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-white dark:border-black dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 pl-10 pr-2.5 py-2.5 focus:outline-none" placeholder="name@company.com" required="">
                        </div>
                        <div class="relative">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <div class="absolute mt-3.5 left-0 flex items-center pl-3.5">
                                <svg id="showPassword" class="w-4 h-4 text-gray-500 dark:text-gray-400 cursor-pointer" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <!-- SVG icon for showing password -->
                                    <path id="eyeIcon" stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z">
                                    </path>
                                    <path id="eyeIcon" stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    <path id="eyeSlashIcon" stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88">
                                    </path>
                                </svg>
                            </div>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-200 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-white dark:border-black dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 pl-10 pr-2.5 py-2.5 focus:outline-none" required="">
                        </div>
                        <div class="relative">
                            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                password</label>
                            <div class="absolute mt-3.5 left-0 flex items-center pl-3.5">
                                <svg id="showConfirmPassword" class="w-4 h-4 text-gray-500 dark:text-gray-400 cursor-pointer" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <!-- SVG icon for showing password -->
                                    <path id="eyeIcon" stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z">
                                    </path>
                                    <path id="eyeIcon" stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    <path id="eyeSlashIcon" stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88">
                                    </path>
                                </svg>
                            </div>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••" class="bg-gray-200 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-white dark:border-black dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500 pl-10 pr-2.5 py-2.5 focus:outline-none" required="">
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox" class="peer relative appearance-none shrink-0 w-4 h-4 mt-1" required="">
                                <svg class="absolute w-5 h-5 pointer-events-none stroke-black dark:stroke-white fill-none peer-checked:!fill-yellow-500" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25">
                                    </path>
                                </svg>
                            </div>

                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-blue-500 dark:text-blue-200">I accept
                                    the <a class="font-medium text-blue-600 hover:underline dark:text-blue-200" href="https://github.com/YOLO-GIT/Booklist">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit" class="w-full text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" onclick="return confirm('Are you sure you want to create an account?')" name="cmdregister">Create
                            an account</button>
                        <p class="text-sm font-light text-blue-500 dark:text-blue-200">
                            Already have an account? <a href="login.php" class="font-medium text-blue-600 hover:underline dark:text-blue-200">Login
                                here</a>
                        </p>
                    </form>
                </div>
                <div class="md:w-1/2 bg-gray-100 dark:bg-slate-800 p-6 flex items-center justify-center">
                    <div class="max-w-sm">
                        <h2 class="text-2xl font-semibold text-gray-900 dark:text-white">Welcome to 𝐵𝑜𝑜𝓀𝐿𝒾𝓈𝓉
                        </h2>
                        <p class="mt-2 text-gray-700 dark:text-gray-300">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Vestibulum sit amet eleifend mi. Duis dictum semper eros nec lacinia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="../script/custom.js"></script>
</body>

</html>