<!-- Nel tuo partial app-header.blade.php -->
<div class="container">
    <!-- LOGO -->
    <div>
        <img src="{{ asset('images/dc-logo.png') }}" alt="Logo Dc Comix">
    </div>

    <!-- Menu -->
    <div class="menu-container">
        <ul>
            <li>
                <a href="#">characters</a>
            </li>
            <li>
                <a href="#">comics</a>
            </li>
            <li>
                <a href="#">movies</a>
            </li>
            <li>
                <a href="#">tv</a>
            </li>
            <li>
                <a href="#">games</a>
            </li>
            <li>
                <a href="#">collectibles</a>
            </li>
            <li>
                <a href="#">videos</a>
            </li>
            <li>
                <a href="#">fans</a>
            </li>
            <li>
                <a href="#">news</a>
            </li>
            <li>
                <a href="#">shop</a>
            </li>
        </ul>
    </div>
</div>

<style scoped>
    .container {
        display: flex;
        margin: 0 auto;
        width: 80vw;
        justify-content: space-between;
        align-items: center;
    }

    img {
        width: 90px;
        height: 90px;
    }

    ul {
        list-style-type: none;
        display: flex;
        column-gap: 20px;
        height: 100px;
        margin: 0;
    }

    li {
        text-transform: uppercase;
        font-size: small;
        font-weight: bold;
        height: 100%;
        display: flex;
        align-items: center;
    }

    li:hover {
        border-bottom: 5px solid #0282F9;
    }

    li:hover a {
        color: #0282F9;
        padding-top: 5px;
    }

    a {
        text-decoration: none;
        color: black;
        margin: 0;
        padding: 0;
    }
</style>