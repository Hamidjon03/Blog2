<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="review" role="menu"
            data-accordion="false">

            <li class="nav-item">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon  fas fa-home"></i>
                    <p>
                        Home
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.main.index') }}" class="nav-link">
                    <i class="nav-icon  fas fa-user-cog"></i>
                    <p>
                        Admin Panel
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon far fa-heart"></i>
                    <p>
                        Liked posts
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon far fa-comment"></i>
                    <p>
                        Commnets
                    </p>
                </a>
            </li>

        </ul>
    </div>
</aside>


