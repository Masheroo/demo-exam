<header>
    <div class="logo-container">
        <a class="logo" href="/"><h1>KuruKuru</h1></a>
        <h2 class="slogan">Кто носит фирму адидас - тот круче Путина в 100 раз</h2>
    </div>
    <div class="links">
        <a href="/">О нас</a>
        <a href="/catalog">Каталог</a>

        @guest
        <a href="/register">Регистрация</a>
        <a href="/auth">Вход</a>
        @endguest

        @auth
        <a href="/logout">Выйти</a>
        @endauth
    </div>
</header>