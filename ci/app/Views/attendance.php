<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
</head>
<body>
    <h1>Number of Students Present: <?=$pStudents?></h1>
    <!-- <h1>Number of Students JS1 Present: <?=$pStudents?></h1> -->
    <h1>Number of Students Absent: <?=$tStudents - $pStudents?></h1>    
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
</body>
</html>