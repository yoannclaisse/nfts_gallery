<?
    // Config php
    include 'includes/config.php';
    include 'includes/data.php';
?>

<!-- HEADER -->
<? include 'chunks/header.php' ?>

<!-- SECTION -->
<section class="flex flex-col justify-center items-center">

    <!-- CONTAINER -->
    <div class="w-3/4 flex flex-col justify-center items-center">

        <!-- H1 -->
        <h1 class="w-full h-16 flex justify-start items-center font-bold text-3xl">
                <!-- TEXT -->
                <p>See our new gallery 👇</p>
        </h1>

        <!-- CARD CONTAINER -->
        <div class="flex justify-between flex-wrap">

            <!-- FOREACH -->
            <? foreach ($nfts as $key => $nft) { ?>
                <? $author = $authors[$nft['author']]?>

                <!-- CARD -->
                <div class="shadow-md hover:shadow-lg w-1/4 h-72 border border-white rounded-md bg-blue-50 my-10 mx-1 hover:opacity-75">

                    <!-- LINK -->
                    <a href="nft.php?id=<?= $key ?>">

                        <!-- IMAGE -->
                        <div class="h-1/2 w-full">
                            <img class="image w-full h-full rounded-t object-cover" src="<?= $nft['image'] ?>">
                        </div>
                        <!-- TEXT AREA -->
                        <div class="h-1/2 w-full flex flex-col justify-center items-center rounded-b-md">

                            <!-- NAME OF THE NFT -->
                            <h3 class="w-full font-bold text-lg"><?= $nft['title'] ?></h3>

                            <!-- AUTHOR MONEY CONTAINER -->
                            <div class="text-center flex flex-col justify-center items-center w-full">
                                <!-- AUTHOR -->
                                <a class="font-sans font-medium text-sm text-blue-600 w-full hover:underline" href="author.php?id=<?= $nft['author'] ?>"><span class="text-black">By </span><?= $author['title'] ?></a>
                                <!-- MONNEY -->
                                <div class="flex justify-center items-center">
                                    <p class="font-semibold"><?= $nft['value'] ?></p>
                                    <img class="h-4 w-4 fill-current" src="./assets/images/eth-logo.svg">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <? } ?>
        </div>
    </div>
</section>

<!-- FOOTER -->
<? include 'chunks/footer.php' ?>