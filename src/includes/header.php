<?php
$menu = [
    'home' => 'Home',
    'login' => 'Enter <i class="bi bi-door-open-fill"></i>'
];

$currentDir = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
?>

<header>
    <div class="width flex-wrapper padding">
        <div id="logo" class="flex-wrapper no-select">
            <img src="/images/logo.svg" alt="Logo" draggable="false">
            <h1>Species</h1>
        </div>
        <nav>
            <ul class="gap flex-wrapper">
                <?php foreach ($menu as $dir => $label):
                    $isActive = ($dir === 'home' && $currentDir === '') || ($currentDir === $dir) ? 'active' : '';
                    $href = ($dir === 'home') ? '/' : '/' . $dir . '/';
                ?>
                    <li class="<?= $isActive ?>">
                        <a href="<?= $href ?>"><?= $label ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>

<style>
    div.flex-wrapper {
        gap: 1em;
    }

    header div.flex-wrapper {
        flex-wrap: wrap;
    }

    #logo {
        img {
            width: 3em;
        }
    }
</style>
