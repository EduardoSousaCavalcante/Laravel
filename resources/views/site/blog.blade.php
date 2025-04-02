<h3>blog</h3>

<ul class="menu">
    <li class="menu-item">
        <a href="{{ route('site.index') }}" class="menu-link">Principal</a>
    </li>
    <li class="menu-item">
        <a href="{{ route('site.sobrenos') }}" class="menu-link">Sobre Nós</a>
    </li>
    <li class="menu-item">
        <a href="{{ route('site.contato') }}" class="menu-link">Contato</a>
    </li>
    <li class="menu-item">
        <a href="{{ route('site.servicos') }}" class="menu-link">Serviços</a>
    </li>
    <li class="menu-item">
        <a href="{{ route('site.blog') }}" class="menu-link">Blog</a>
    </li>
</ul>

<img src="{{ asset('img/kitty.jpg') }}" alt="Minha Imagem">

<style>
    .menu {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .menu-item {
        background-color: #f0f0f0;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .menu-link {
        display: block;
        padding: 10px 20px;
        text-decoration: none;
        color: #333;
        font-size: 16px;
        font-weight: bold;
        border-radius: 5px;
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    .menu-item:hover .menu-link {
        background-color: #007bff;
        color: #fff;
    }

    .menu-item:active .menu-link {
        background-color: #0056b3;
    }
</style>
