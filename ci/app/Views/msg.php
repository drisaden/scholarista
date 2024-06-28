<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('Public/css/style.css') ?>">

</head>

<!-- 
<body>
    <h1>Message Title: <?= $title ?></h1>
    <p>Message body: <?= $body ?></p>
    <a href="#!" onclick="window.history.back()">Go Back</a>
    <a href="<?= base_url('/') ?>">Go Home</a>
</body> -->


<body class="bg-gray-900">
<section class="fixed  top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-6 z-50">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 w-full md:w-96">
      <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md md:max-w-2xl xl:p-0">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 style="color:<?= $color ?>"><?= $title ?></h1>
    <p><?= $body ?></p>

    <div class="flex justify-between items-center gap-4"><a href="#!" class="text-sm bg-blue-500 text-white hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-0 rounded-md p-2 " onclick="window.history.back()"><span><i class="fa fa-arrow-left mr-1"></i></span>Go Back</a>
    <a href="<?= base_url('/') ?>" class="text-sm bg-transparent text-blue-500 border border-blue-500 hover:bg-blue-500 hover:text-white focus:outline-none focus:ring-0 rounded-md p-2">Go Home</a></div>
     
        </div>
      </div>
  </div>
</section>

</body>

</html>