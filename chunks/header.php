<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFTs GALLERY</title>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="../public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../public/favicon-16x16.png">
    <link rel="manifest" href="../public/site.webmanifest">
    <link rel="mask-icon" href="../public/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="../public/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="../public/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- TAILWINDCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONT -->
    <link rel="stylesheet" href="https://use.typekit.net/vls5jlu.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body class="w-full bg-blue-100">
    <!-- HEADER -->
    <header class="bg-cyan-50 shadow-md h-32 w-full flex flex-col justify-around">
        <a class="font-sans text-4xl font-bold text-blue-600 flex justify-center items-center" href="../index.php">NFT's World</a>

        <!-- NAV -->
        <div class="flex justify-center flex-row items-center ">
        <nav class="w-1/2 ">
                <ol class="flex justify-between flex-row items-center font-sans font-semibold text-lg text-blue-900 ">
                    <li class="hover:text-blue-300"><a href="#">News</a></li>
                    <li class="hover:text-blue-300"><a href="../nft.php?id=<?= rand(0, count($nfts) - 1)?>">Random NFT</a></li>
                    <li class="hover:text-blue-300"><a href="../about.php">About</a></li>
                </ol>
            </nav>
        </div>
    </header>