<?
    // Config php
    include 'includes/config.php';
    include 'includes/data.php';

    // Get ID
    $id = $_GET['id'] ?? null;
    $nft = $nfts[$id] ?? null;

    if($nft === null)
    {
        header('location:404.php');
    }

    // Get author
    $author = $authors[$nft['author']];
?>

<!-- HEADER -->
<? include 'chunks/header.php' ?>

<!-- CONTAINER -->
<section class="">
    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

        <!-- HEAD OF ARTICLES -->
        <nav class="w-full z-30 top-0 px-6 py-1">
            <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">

                <!-- TEXT -->
                <p class="uppercase tracking-wide font-bold text-gray-800 text-xl " href="#">Learn more about this NFT 👇</p>

            </div>
        </nav>

        <!-- CONTENT -->
        <div class="w-full p-6 flex flex-row">

            <!-- IMAGE -->
            <img class="pr-20" src="<?= $nft['image'] ?>">

            <!-- TEXT AREA -->
            <div class="w-full flex flex-col justify-between">

                <!-- FIRST ROW -->
                <div class="w-full flex flex-col justify-between items-center">

                <!-- FIRST LINE -->
                    <div class="w-full flex justify-between items-center">

                        <!-- TITLE OF THE NFT -->
                        <p class="text-4xl"><?= $nft['title'] ?></p>

                        <!-- VALUE IN ETH -->
                        <div class="flex justify-between items-center">
                            <p class="text-2xl"><?= $nft['value'] ?></p>
                            <img class="h-10 w-10 fill-current text-gray-500 hover:text-black" src="./assets/images/eth-logo.svg">
                        </div>

                    </div>

                    <!-- SECOND LINE -->
                    <div class="w-full flex justify-between items-center">

                        <!-- AUTHOR -->
                        <a class="text-2xl text-gray-900 hover:text-black underline" href="author.php?id=<?= $nft['author'] ?>"><?= $author['title'] ?></a>

                        <!-- VALUE IN DOLLARS -->
                        <div class="text-1xl flex justify-between pr-10">
                            <p><?= round($nft['value'] * $ethToUsd) . ' $' ?></p>
                        </div>

                    </div>
                </div>

                <!-- SECOND ROW -->
                <div class="w-full flex justify-between items-end flex-row-reverse">

                    <!-- If its sold -->
                    <? if ( $nft['sold'] === true ) { ?>

                        <!-- Get owner -->
                        <?$owner = $owners[$nft['owner']] ?>

                        <!-- Button Already sold -->
                        <div class="rounded-md shadow">
                            <p href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-500 cursor-not-allowed md:py-4 md:text-lg md:px-10"> Already sold </p>
                        </div>

                        <!-- Name of who buy and when -->
                        <p>Buy by <a class="text-gray-900 hover:text-black underline" href="owner.php?id=<?= $nft['owner'] ?>"><?= $owner['name'] ?></a> the <?= date('d/m/Y', $nft['saleDate']) ?></p>
 
                    <!-- If its not sold -->
                    <? } elseif ( $nft['sold'] === false ) { ?>

                        <!-- Button Buy -->
                        <div class="rounded-md shadow">
                            <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10"> Buy this NFT </a>
                        </div>

                    <? } ?>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- FOOTER -->
<? include 'chunks/footer.php' ?>