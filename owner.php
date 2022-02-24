<?
    // Config php
    include 'includes/config.php';
    include 'includes/data.php';

    // Get ID
    $id = $_GET['id'] ?? null;
    $owner = $owners[$id] ?? null;

    if($owner === null)
    {
        header('location:404.php');
    }

    // Get socials
    $socials = $owner['socials']
?>

<!-- HEADER -->
<? include 'chunks/header.php' ?>

<!-- OWNER INFOS -->
<div class="container mx-auto h-96 bg-gray-900 flex items-center justify-evenly flex-col my-12">

    <!-- NAME -->
    <h1 class="text-6xl pt-1 text-gray-50"><?= $owner['name'] ?></h1>

    <!-- DATE OF REGISTRATION -->
    <p class="pt-1 text-gray-100">Joined since : <?= date('d/m/Y', $owner['registrationDate']) ?></p>

    <!-- SOCIALS MEDIAS -->
    <div class="flex w-96 items-center justify-evenly flex-row">
        <? foreach ($socials as $key => $social) { ?>
            <p class="pt-1 text-gray-100 capitalize underline"><a href="<?= $social ?>"><?= $key ?></a></p>
        <? } ?>
    </div>

</div>

<!-- FOOTER -->
<? include 'chunks/footer.php' ?>