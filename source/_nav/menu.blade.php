<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="Home | {{ $page->siteName }}" href="/index"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/index') ? 'active text-blue-600' : '' }}">
        Home
    </a>
    <a title="Blog | {{ $page->siteName }}" href="/blog"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
        Blog
    </a>

    <a title="About | {{ $page->siteName }}" href="/about"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
        About
    </a>

    <a title=" My About | {{ $page->siteName }}" href="/myabout"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/myabout') ? 'active text-blue-600' : '' }}">
        Myself
    </a>
    
    <a title=" Contact | {{ $page->siteName }}" href="/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
        Contact
    </a>
</nav>
