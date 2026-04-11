<?php
$menu = [
    'home' => 'Home',
    'login' => 'Enter <i class="bi bi-door-open-fill"></i>'
];

$currentDir = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
?>


<div style="background-color: var(--fg-color);">

    <input type="checkbox" id="menu-toggle" />
    <header class="flex-wrapper padding width">
        <div class="header-top">
            <div id="logo" class="flex-wrapper no-select">
                <img src="/images/logo.svg" alt="Logo" draggable="false">
                <h1>Species</h1>
            </div>

            <label for="menu-toggle" class="menu-icon">
                <i class="bi bi-list icon-open"></i>
                <i class="bi bi-x icon-close"></i>
            </label>
        </div>

        <nav>
            <ul class="flex-wrapper">
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
    </header>
</div>

<!--  <div class="nav-buffer"></div> -->
