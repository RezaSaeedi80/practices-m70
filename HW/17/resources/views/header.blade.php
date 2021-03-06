<nav
    class="
relative
w-full
flex flex-wrap
items-center
justify-between
py-4
bg-gray-100
text-gray-500
hover:text-gray-700
focus:text-gray-700
shadow-lg
navbar navbar-expand-lg navbar-light
">
    <div class="container-fluid w-full flex flex-wrap items-center justify-between px-6">
        <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
            <!-- Left links -->
            <ul class="navbar-nav flex gap-5 pl-0 list-style-none mr-auto">
                @foreach ($items as $key => $item)
                    <li class="nav-item pr-2">
                        <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0"
                            href="{{ $key }}">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
    </div>
</nav>
