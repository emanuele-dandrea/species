<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Species</title>
    <link rel="stylesheet" href="/public/css/main.css">
    <?php include './includes/meta.php'; ?>
</head>

<body>
    <div>
        <?php include './includes/header.php'; ?>
        <? include './includes/utils-bar.php' ?>
    </div>
    <div>
        <section class="width padding flex-wrapper" style="align-items: start; justify-content: start; gap: 5em;">
            <div>
                <h2>Our encyclopedia for more<br>equal <i>knowledge</i></h2>
                <? include './includes/search.php'?>
            </div>
            <div>
                <img src="./public/images/Cats-cradle.svg" alt="useless decoration" draggable="false" class="no-select" style="width: 15em;">
            </div>
        </section>
        <main class="width padding flex-wrapper">
            <section>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit suscipit delectus quidem quos mollitia assumenda cumque, aut fugit, expedita commodi eveniet natus porro ut possimus culpa nulla libero molestiae iure.</p>
            </section>
            <aside>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ab numquam cumque perferendis reprehenderit repudiandae. Quis asperiores incidunt sint. Corrupti voluptates ullam esse ab doloribus reprehenderit impedit quas sed consequatur.</p>
            </aside>
        </main>
    </div>

    <?php include './includes/footer.php'; ?>
</body>

</html>
<style>
    section div img {
        filter: brightness(0) saturate(100%) invert(100%) sepia(0%) saturate(1849%) hue-rotate(84deg) brightness(112%) contrast(62%);
    }

    @media (prefers-color-scheme: light) {
        section div img {
            filter: brightness(0) saturate(100%) invert(14%) sepia(7%) saturate(0%) hue-rotate(144deg) brightness(90%) contrast(96%);
        }
    }
</style>