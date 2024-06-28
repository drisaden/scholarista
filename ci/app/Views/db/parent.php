<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('Public/css/style.css') ?>">
    <style>
        /* Add custom styles here if needed */
    </style>
</head>

<body class="bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-9 gap-4 place-content-end items-center">
        <div class="w-full col-span-2 hidden md:block">Hello</div>
        <div class="w-full col-span-7">
            <!-- nav -->
            <nav class="bg-white border-gray-200 shadow">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="#" class="flex items-end space-x-3 rtl:space-x-reverse">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap">Howdy, Mrs <?=$name?></span>
                    </a>
                    <div class="flex items-center md:order-2 space-x-2 rtl:space-x-reverse justify-between">

                        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center w-6 h-6 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-user" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900 ">Bonnie Green <i class="fas fa-chevron-down fa-sm"></i></span>
                                <span class="block text-sm  text-gray-500 truncate ">Daniel Green</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Earnings</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('logout')?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
                                </li>
                            </ul>
                        </div>
                        <div class="z-50 hidden my-10 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow m-5" id="announcement-dropdown">
                            <div class="px-4 py-3 mt-7 mx-5" aria-labelledby="announcement-menu-button">

                                <div class="flex items-center mb-4">
                                    <div class="bg-blue-500 rounded-full p-2">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 14l9-5-9-5-9 5 9 5zM5 12l9 5 9-5" />
                                        </svg>
                                    </div>
                                    <div class="ml-4 flex-grow">
                                        <p class="font-semibold">Important Message 1</p>
                                        <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="text-gray-600 text-sm">
                                        <p>Mar 20</p>
                                        <p>10:30 AM</p>
                                    </div>
                                </div>

                                <!-- Announcement Row 2 -->
                                <div class="flex justify-between items-center mb-4">
                                    <div class="bg-green-500 rounded-full p-2">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 14l9-5-9-5-9 5 9 5zM5 12l9 5 9-5" />
                                        </svg>
                                    </div>
                                    <div class="ml-4 flex-grow">
                                        <p class="font-semibold">Important Message 2</p>
                                        <p class="text-sm text-gray-600">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="text-gray-600 text-sm">
                                        <p>Mar 21</p>
                                        <p>3:45 PM</p>
                                    </div>
                                </div>

                                <!-- Announcement Row 3 -->
                                <div class="flex items-center">
                                    <div class="bg-yellow-500 rounded-full p-2">
                                        <svg class="h-6 w-6 text-white" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 14l9-5-9-5-9 5 9 5zM5 12l9 5 9-5" />
                                        </svg>
                                    </div>
                                    <div class="ml-4 flex-grow">
                                        <p class="font-semibold">Important Message 3</p>
                                        <p class="text-sm text-gray-600">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>
                                    <div class="text-gray-600 text-sm">
                                        <p>Mar 22</p>
                                        <p>8:15 AM</p>
                                    </div>
                                </div>
                            </div>                         

                        </div>
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-0" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="announcement-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open announcement</span>
                            <i class="fa-solid fa-bell fa-lg"></i>
                        </button>
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-0 focus:ring-gray-300" id="announcement-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="user photo">
                        </button>

                    </div>
                    <div class="items-center justify-between hidden w-full md:flex md:w-6/12 order-2 md:order-1" id="navbar-user">
                        <div class="flex flex-col font-medium p-4 md:p-0 mt-4 md:mt-0 rounded-lg bg-gray-50 relative w-full">
                            <div class="absolute inset-y-0 start-5 md:start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-70  0 focus:ring-0" placeholder="Search...">
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Dashboard -->
            <section>
                <div class="grid grid-cols-3 gap-5 mt-10 mx-5 md:mx-auto ">
                    <div class="border-gray-200 shadow-md rounded-md bg-teal-100">
                        <div class="flex flex-col md:flex-row justify-center items-center text-center">
                            <div class="rounded-full m-4 self-center bg-white px-4 py-3 md:py-4"><i class="fas fa-light fa-people-group text-lg md:text-xl"></i></div>
                            <div>
                                <p class="text-sm md:text-base">Number of Students</p><span class="block lh-0 font-bold text-base md:text-xl pb-2 md:pb-0">2468</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-gray-200 shadow-md rounded-md bg-pink-100">
                        <div class="flex flex-col md:flex-row justify-center items-center text-center">
                            <div class="rounded-full m-4 self-center bg-white px-4 py-3 md:py-4"><i class="fas fa-light fa-people-group text-lg md:text-xl"></i></div>
                            <div>
                                <p class="text-sm md:text-base">Number of Teachers</p><span class="block lh-0 font-bold text-base md:text-xl pb-2 md:pb-0">245</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-gray-200 shadow-md rounded-md bg-lime-100">
                        <div class="flex flex-col md:flex-row justify-center items-center text-center">
                            <div class="rounded-full m-4 self-center bg-white px-4 py-3 md:py-4"><i class="fas fa-light fa-people-group text-lg md:text-xl"></i></div>
                            <div>
                                <p class="text-sm md:text-base">Number of Staffs</p><span class="block lh-0 font-bold text-base md:text-xl pb-2 md:pb-0">505</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- teacher and students list -->
            <section>
                <div class="block md:grid grid-cols-1 md:grid-cols-9 gap-4 justify-between items-center mt-7 mx-5 md:mx-auto">
                    <div class="md:col-span-3 w-full h-full mx-auto content-stretch border-gray-200 shadow-md rounded-md bg-white relative">
                        <div class="relative">
                            <div class="flex justify-between items-center mx-5">
                                <div class="p-3 py-4">Students</div>
                                <div>
                                    <form class="max-w-sm mx-auto">
                                        <select id="classes" class="bg-gray-50 border-0 text-gray-900 text-sm rounded-lg focus:ring-0 py-0.5 px-2 shadow-sm">

                                            <option>S.S 3</option>
                                            <option>S.S 2</option>
                                            <option>S.S 1</option>
                                            <option>J.S.S 3</option>
                                            <option>J.S.S 2</option>
                                            <option>J.S.S 1</option>
                                        </select>
                                    </form>
                                </div>
                            </div>

                            <div class="w-full p-4 md:p-6  mb-16 text-center mx-auto">
                                <div class="mx-auto relative flex items-center justify-center">
                                    <canvas class="p-10 w-9/12 md:w-11/12 mt-5 mx-auto" id="chartDoughnut" style="z-index: 9999;"></canvas>
                                    <div class="text-center flex items-center justify-center mx-auto" style="position: absolute; top: 50%;z-index: 0;">
                                        <div class="flex flex-col justify-center items-center text-5xl font-bold">
                                            <span class="t_num">375</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="flex justify-between items-center mt-10 mx-15 md:mx-0 gap-6">
                                    <div class="flex items-center justify-between mx-10 md:mx-auto gap-2">
                                        <span class="flex w-3 h-3 bg-teal-600 rounded-full"></span>
                                        <p class="inline">Boys: <span id="b_number">205</span></p>
                                    </div>
                                    <div class="flex items-center justify-between mx-10 gap-2">
                                        <span class="flex w-3 h-3 bg-lime-600 rounded-full"></span>
                                        <p class="inline">Girls: <span id="b_number">170</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center relative md:mt-5">
                                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="mx-auto text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                                    <i class="fas fa-user-plus fa-sm mr-1"></i>
                                    Add New Student
                                </button>
                            </div>

                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="border-gray-200 shadow-md rounded-md bg-white mt-5 md:mt-0">
                            <div class="flex justify-between items-center mx-5">
                                <div class="p-3 py-4">Teachers' List</div>
                                <div>
                                    <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-4 py-3 text-center inline-flex items-center me-2 mb-2">
                                        <i class="fas fa-user-plus fa-sm"></i>
                                    </button>
                                </div>
                            </div>


                            <div class="flex justify-between items-center gap-4 mb-5">
                                <div>
                                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-0  font-medium rounded-lg text-sm px-3 py-1.5 ml-5" type="button">
                                        <span class="sr-only">Action button</span>
                                        Action
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                        <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownActionButton">
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Assign Role</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Promote</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">Activate account</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Delete User</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="relative ml-10 mr-7 w-full">
                                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search-users" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full bg-gray-50 focus:ring-0 focus:border-0" placeholder="Search for teachers">
                                </div>
                            </div>
                            <div class="relative overflow-x-auto shadow-sm sm:rounded-lg">
                                <!-- <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white"> -->

                                <table class="w-full text-sm text-left rtl:text-right">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Subject
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Class
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b  hover:bg-gray-50 ">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0 ">
                                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap ">
                                                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Jese image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Neil Sims</div>
                                                    <div class="font-normal text-gray-500">neil.sims@scholarista.com</div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                S.S 1
                                            </td>
                                            <td class="px-6 py-4">
                                                English
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="#" class="font-medium"><i class="fas fa-ellipsis-vertical"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b  hover:bg-gray-50 ">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0 ">
                                                    <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Jese image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Bonnie Green</div>
                                                    <div class="font-normal text-gray-500">bonnie@scholarista.com</div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                S.S 3
                                            </td>
                                            <td class="px-6 py-4">
                                                Mathematics
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="#" class="font-medium"><i class="fas fa-ellipsis-vertical"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b  hover:bg-gray-50 ">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0 ">
                                                    <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Jese Leos</div>
                                                    <div class="font-normal text-gray-500">jese@scholarista.com</div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                S.S 2
                                            </td>
                                            <td class="px-6 py-4">
                                                Economics
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="#" class="font-medium"><i class="fas fa-ellipsis-vertical"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b  hover:bg-gray-50 ">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0 ">
                                                    <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Jese image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Thomas Lean</div>
                                                    <div class="font-normal text-gray-500">thomes@scholarista.com</div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                J.S.S 1
                                            </td>
                                            <td class="px-6 py-4">
                                                Basic Science
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="#" class="font-medium"><i class="fas fa-ellipsis-vertical"></i></a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white  hover:bg-gray-50 ">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0 ">
                                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" alt="Jese image">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Leslie Livingston</div>
                                                    <div class="font-normal text-gray-500">leslie@scholarista.com</div>
                                                </div>
                                            </th>
                                            <td class="px-6 py-4">
                                                J.S.S 2
                                            </td>
                                            <td class="px-6 py-4">
                                                Agriculture
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="#" class="font-medium"><i class="fas fa-ellipsis-vertical"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-center mt-5">
                                <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                                    <i class="fas fa-chalkboard-user fa-sm mr-1"></i>
                                    Add New Teacher
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

            <!-- Attendance and role assignment -->
            <section>
                <div class="block md:grid grid-cols-1 md:grid-cols-9 gap-4 justify-between items-center mt-7 mx-5 md:mx-auto">
                    <div class="md:col-span-4 w-full h-full mx-auto content-stretch">
                        <div class="border-gray-200 shadow-md rounded-md bg-white">
                            <div class="flex justify-between items-center mx-5">
                                <div class="p-3 py-4">Attendance</div>
                                <div class="flex">
                                    <div>
                                        <form class="max-w-sm mx-auto">
                                            <select id="all_classes" class="bg-gray-50 border-0 text-gray-900 text-sm rounded-lg focus:ring-0 py-0.5 pl-2 pr-1 shadow-sm mx-2.5">
                                                <option>S.S 3</option>
                                                <option>S.S 2</option>
                                                <option>S.S 1</option>
                                                <option>J.S.S 3</option>
                                                <option>J.S.S 2</option>
                                                <option>J.S.S 1</option>
                                            </select>
                                        </form>
                                    </div>
                                    <form class="max-w-sm mx-auto">
                                        <select id="attendance_type" class="bg-gray-50 border-0 text-gray-900 text-sm rounded-lg focus:ring-0 py-0.5 px-2 shadow-sm">

                                            <option>Daily</option>
                                            <option>Class</option>
                                            <option>Bus</option>
                                            <option>Others</option>
                                        </select>
                                    </form>
                                </div>
                            </div>

                            <div class="relative overflow-x-auto shadow-sm sm:rounded-lg">
                                <!-- <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white"> -->

                                <table class="w-full text-sm text-left rtl:text-right">
                                    <thead class="text-xs text-left text-gray-700 uppercase bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                S/N
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                P/A
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center bg-white border-b  hover:bg-gray-50">
                                            <td class="w-4 p-4 mx-auto">
                                                1
                                            </td>
                                            <th scope="row" class="flex items-center px-3 py-4 text-gray-900 whitespace-nowrap ">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Neil Sims</div>
                                                </div>
                                            </th>
                                            <td class="py-4 pl-6 text-center">
                                                <div class="flex items-center">
                                                    <input checked id="checkbox-all-search" type="checkbox" class="ml-1 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-center bg-white border-b  hover:bg-gray-50">
                                            <td class="w-4 p-4 mx-auto">
                                                2
                                            </td>
                                            <th scope="row" class="flex items-center px-3 py-4 text-gray-900 whitespace-nowrap ">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Bonnie Green</div>
                                                </div>
                                            </th>
                                            <td class="py-4 pl-6 text-left">
                                                <div class="flex items-center">
                                                    <input checked id="checkbox-all-search" type="checkbox" class="ml-1 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-center bg-white border-b  hover:bg-gray-50">
                                            <td class="w-4 p-4 mx-auto">
                                                3
                                            </td>
                                            <th scope="row" class="flex items-center px-3 py-4 text-gray-900 whitespace-nowrap ">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Jese Leos</div>
                                                </div>
                                            </th>
                                            <td class="py-4 pl-6 text-center">
                                                <div class="flex items-center">
                                                    <input checked id="checkbox-all-search" type="checkbox" class="ml-1 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="text-center bg-white border-b  hover:bg-gray-50">
                                            <td class="w-4 p-4 mx-auto">
                                                4
                                            </td>
                                            <th scope="row" class="flex items-center px-3 py-4 text-gray-900 whitespace-nowrap ">
                                                <div class="ps-3">
                                                    <div class="text-base font-semibold">Thomas Lean</div>
                                                </div>
                                            </th>
                                            <td class="py-4 pl-6 text-left">
                                                <div class="flex items-center">
                                                    <input checked id="checkbox-all-search" type="checkbox" class="ml-1 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center mx-auto mt-5 mb-10 flex items-center justify-center">
                                    <button type="button" class="flex items-center gap-1 text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                        <i class="fas fa-check-circle fa-md"></i>
                                        <span>Mark Attendance</span>
                                    </button>
                                </div>
                                <div class="flex justify-between items-center mb-10 mx-15 md:mx-0 gap-6">
                                    <div class="flex items-center justify-between mx-10 md:mx-auto gap-2">
                                        <input checked type="checkbox" class="ml-1 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0" disabled>
                                        <p class="inline">Present: <span id="p_number">205</span></p>
                                    </div>
                                    <div class="flex items-center justify-between mx-10 gap-2">
                                        <input type="checkbox" class="ml-1 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-0" disabled>
                                        <p class="inline">Absent: <span id="a_number">170</span></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-span-5">
                        <div class="border-gray-200 shadow-md rounded-md bg-white mt-5 md:mt-0">
                            <div class="flex justify-between items-center mx-5">
                                <div class="p-3 py-4">Payment</div>
                                <div>
                                    <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-4 py-3 text-center inline-flex items-center me-2 mb-2">
                                        <i class="fas fa-user-plus fa-sm"></i>
                                    </button>
                                </div>
                            </div>


                            <div class="text-center mt-5 flex flex-row gap-4 justify-between items-center mx-5">

                                <p>Ade Olakitan</p>
                                <div class="text-center relative md:mt-5">
                                <button data-modal-target="payment-modal" data-modal-toggle="payment-modal" type="button" class="mx-auto text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                                    <i class="fas fa-user-plus fa-sm mr-1"></i>
                                    Make Payment
                                </button>
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

      <!-- Main modal -->
      <div id="payment-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" style="z-index: 9999;">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow w-full">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Make a Payment
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="payment-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <div class="max-w-md mx-auto">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                                <input type="text" name="f_name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                            </div>
                            <div class="col-span-2 sm:col-span-1">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                                <input type="text" name="l_name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 block w-full p-2.5" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Other Name</label>
                                <input type="text" name="o_name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 block w-full p-2.5" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 block w-full p-2.5" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="adm num" class="block mb-2 text-sm font-medium text-gray-900">Admission Number</label>
                                <input type="text" name="adm_number" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 block w-full p-2.5" required="">
                            </div>
                            
                            <div class="col-span-2 sm:col-span-1">
                                <label for="phone num" class="block mb-2 text-sm font-medium text-gray-900">Amount to Pay</label>
                                <input type="number" name="amount" id="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-0 block w-full p-2.5" required="" placeholder="amount to pay in naira">
                            </div>
                            <div class="col-span-1">
                                <label for="class" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                                <select name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                    <option selected="">Select Category</option>
                                    <option value="school_fees">School Fees</option>
                                    <option value="bus_fees">Bus</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center relative md:mt-5">
                                <a href="<?=base_url('payment/2201')?>" class="mx-auto text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 mb-2">
                                    <i class="fas fa-user-plus fa-sm mr-1"></i>
                                   Make Payment
                                </a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const dataDoughnut = {
            labels: ["Boys", "Girls"],

            datasets: [{
                label: "Students",
                data: [205, 170],
                backgroundColor: [
                    "rgba(13, 148, 136, 0.6)",
                    "rgba(101, 163, 13, 0.6)",
                ],
                hoverOffset: 4,
            }, ],
        };

        const configDoughnut = {
            type: "doughnut",
            data: dataDoughnut,
            options: {},
        };

        var chartBar = new Chart(
            document.getElementById("chartDoughnut"),
            configDoughnut
        );
    </script>

</body>

</html>