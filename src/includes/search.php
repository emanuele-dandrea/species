<button class="search-bar" dir="rtl" id="openBtn">Search &nbsp;<i class="bi bi-search"></i></button>

<div class="search-wrapper hidden" id="search">
    <div class="width flex-wrapper search">
        <form method="get">
            <input type="search" placeholder="Search" name="search">
            <button class="close" id="closeBtn"><i class="bi bi-x-lg"></i></button>
        </form>
    </div>
</div>

<style>
    button.search-bar {
        cursor: pointer;
        color: var(--bg-color);
        background-color: var(--fg-color);
        padding: 0em 3em;
        border-radius: var(--border-radius);
        font-size: 1em;
        display: flex;
        justify-content: space-between;
        margin-top: 1em;
        border: 0.1em solid gray;
        transition: opacity ease-in-out 0.3s;
    }

    button.search-bar:hover {
        opacity: 0.9;
    }

    .search-wrapper {
        background-color: var(--bg-color);
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 100;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .search {
        background-color: red;
        justify-content: center;
        align-items: start;
        padding: 1em;
        height: 50vh;
        background-color: light-dark(lightcyan, darkgray);
        border: var(--border-radius);
        opacity: 0.9;
        border-radius: var(--border-radius);
    }

    .search .close {
        cursor: pointer;
        padding: 0.2em;
        margin-left: 1em;
        width: 2em;
        height: 2em;
        border-radius: var(--border-radius);
        background-color: var(--bg-color);
        border: none;
        transition: background ease-in-out 0.3s;
    }

    .search .close:hover {
        background-color: light-dark(darkgray, gray);
    }

    .search .close:active {
        outline-offset: 0.1em;
        outline: gray 0.1em solid;
    }

    .search input {
        border-radius: var(--border-radius);
        background-color: var(--fg-color);
        color: var(--bg-color);
        padding: 0.3em 1em;
        border: none;
        height: 2em;
    }

    .search input::placeholder {
        color: var(--bg-color);
    }

    .search input:focus {
        outline-offset: 0.1em;
        outline: 0.1em var(--accent-color) solid;
    }

    .hidden {
        display: none;
    }
</style>
<script src="/js/search.js"></script>
