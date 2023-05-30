<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
        <a href={{ url('/') }} class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Input Template</div>
        </a>
    </li>

    <li class="menu-item">
        <a href="/users" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">User Templates</div>
        </a>
    </li>

    <li class="menu-item">
        <a href="/users-template" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Users</div>
        </a>
    </li>

    <li class="menu-item">
        <a href="/user-upload" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">User Upload</div>
        </a>
    </li>

    {{-- Logout --}}
    <li class="menu-item" style="cursor: pointer">
        <form action="{{ route('logout') }}" method="POST" class="menu-link">
            @csrf
            <i class="menu-icon tf-icons bx bx-log-out"></i>
            <button type="submit">Logout</button>
        </form>
    </li>
    {{-- Logout --}}
</ul>
