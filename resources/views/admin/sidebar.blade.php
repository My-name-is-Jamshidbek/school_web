<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item {{  request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <a href="{{route('admin.users.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Foydalanuvchilar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.posts.index') ? 'active' : '' }}">
                    <a href="{{route('admin.posts.index')}}">
                        <i class="fas fa-newspaper"></i>
                        <p>Yangiliklar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.photo.index') ? 'active' : '' }}">
                    <a href="{{route('admin.photo.index')}}">
                        <i class="fas fa-images"></i>
                        <p>Foto Galereya</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.certificate.index') ? 'active' : '' }}">
                    <a href="{{route('admin.certificate.index')}}">
                        <i class="fas fa-images"></i>
                        <p>Faxriy yorliqlar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.veteran.index') ? 'active' : '' }}">
                    <a href="{{route('admin.veteran.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Faxriylar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.teacher.index') ? 'active' : '' }}">
                    <a href="{{route('admin.teacher.index')}}">
                        <i class="fas fa-user"></i>
                        <p>O'qituvchilar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.olimpic.index') ? 'active' : '' }}">
                    <a href="{{route('admin.olimpic.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Olimpiadachilar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.active.index') ? 'active' : '' }}">
                    <a href="{{route('admin.active.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Faol o'quvchilar</p>
                    </a>
                </li>
                <li class="nav-item {{  request()->routeIs('admin.messages.index') ? 'active' : '' }}">
                    <a href="{{route('admin.messages.index')}}">
                        <i class="fas fa-user"></i>
                        <p>Xabarlar</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


