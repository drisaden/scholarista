<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Add custom styles here if needed */
    </style>
</head>

<body class="bg-gray-100">

    <h1>Landing Page</h1>

    <div class="container mx-auto py-8 px-4">
        <div class="max-w-lg mx-auto">
            <!-- Header -->
            <header class="text-center mb-8">
                <h1 class="text-3xl font-semibold mb-2">Welcome, John Doe!</h1>
                <p class="text-gray-600">Parent of Jane Doe</p>
                <img src="school-logo.png" alt="School Logo" class="mx-auto mt-4 w-20">
            </header>

            <!-- Quick Links -->
            <div class="bg-white rounded-lg shadow p-4 mb-8">
                <h2 class="text-lg font-semibold mb-4">Quick Links</h2>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center space-x-2">
                            <span class="text-blue-500"><svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg></span>
                            <span>Announcements</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2">
                            <span class="text-blue-500"><svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                </svg></span>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2">
                            <span class="text-blue-500"><svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M12 14l9-5-9-5-9 5 9 5zM5 12l9 5 9-5" />
                                </svg></span>
                            <span>Attendance</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2">
                            <span class="text-blue-500"><svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M12 14l9-5-9-5-9 5 9 5zM5 12l9 5 9-5" />
                                </svg></span>
                            <span>Grades</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2">
                            <span class="text-blue-500"><svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                </svg></span>
                            <span>Homework/Assignments</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Important Information -->
            <div class="bg-white rounded-lg shadow p-4 mb-8">
                <h2 class="text-lg font-semibold mb-4">Important Information</h2>
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center space-x-2">
                            <span class="text-blue-500"><svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                </svg></span>
                            <span>School News</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2">
                            <span class="text-blue-500"><svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                </svg></span>
                            <span>Feedback</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Your Child's Progress -->
            <div class="bg-white rounded-lg shadow p-4 mb-8">
                <h2 class="text-lg font-semibold mb-4">Your Child's Progress</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p><strong>Attendance:</strong> 90% attended out of 100 days.</p>
                        <p><strong>Grades:</strong> Averages: Math - B, Science - A, English - A-</p>
                        <p><strong>Homework:</strong> 2 assignments due this week.</p>
                    </div>
                    <div>
                        <!-- Placeholder for student progress -->
                    </div>
                </div>
            </div>

            <!-- Stay Connected -->
            <div class="bg-white rounded-lg shadow p-4 mb-8">
                <h2 class="text-lg font-semibold mb-4">Stay Connected</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p><strong>Communication:</strong> Contact teachers for updates.</p>
                        <p><strong

>Resources:</strong> Check recommended reading materials.</p>
                    </div>
                    <div>
                        <!-- Placeholder for communication and resources -->
                    </div>
                </div>
            </div>

            <!-- Convenient Payments -->
            <div class="bg-white rounded-lg shadow p-4 mb-8">
                <h2 class="text-lg font-semibold mb-4">Convenient Payments</h2>
                <p>Pay school fees securely online.</p>
                <button class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md mt-4 hover:bg-blue-600">Pay Now</button>
            </div>

            <!-- Need Help? -->
            <div class="bg-white rounded-lg shadow p-4 mb-8">
                <h2 class="text-lg font-semibold mb-4">Need Help?</h2>
                <p><strong>Support:</strong> Find answers to FAQs and get assistance.</p>
            </div>

            <!-- Stay Connected -->
            <div class="text-center">
                <p>Connect with us on social media:</p>
                <!-- Social media icons -->
                <div class="flex justify-center mt-4">
                    <a href="#" class="mr-4"><img src="facebook-icon.png" alt="Facebook" class="h-8 w-8"></a>
                    <a href="#" class="mr-4"><img src="twitter-icon.png" alt="Twitter" class="h-8 w-8"></a>
                    <a href="#" class="mr-4"><img src="instagram-icon.png" alt="Instagram" class="h-8 w-8"></a>
                </div>
            </div>

            <!-- Footer -->
            <footer class="mt-8 text-center">
                <p><a href="#">Terms of Use</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact Us</a></p>
            </footer>
        </div>
    </div>

</body>

</html>

