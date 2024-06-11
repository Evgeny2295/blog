<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.main.index')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-check"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.users.index')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-check"></i>
                    <p>
                        Пользователи
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.categories.index')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-check"></i>
                    <p>
                        Категории
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tags.index')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-check"></i>
                    <p>
                        Теги
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.posts.index')}}" class="nav-link">
                    <i class="nav-icon fa-solid fa-check"></i>
                    <p>
                        Посты
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
</aside>
