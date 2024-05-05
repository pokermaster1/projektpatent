<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pat-checkX</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="img/patCheckerX.png">

</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col items-center justify-center p-4">

        <div class="flex items-center justify-center mb-8">
            <img src="img/Logo_patCheckerX.gif" alt="Logo" class="h-20 md:h-24 mt-3 lg:h-32 mr-2">
        </div>

        <?php include ('includes/synonymchecker.php') ?>

        <hr class="my-8 w-full border-t border-gray-300">

        <?php include ('includes/patentchecker.php') ?>

    </div>
</body>


</html>