<!doctype html>

<html>
<head>
    @include('includes.head')
</head>

<body>

    <header>
        @include('includes.header2')

    </header>

    <Sidebar>
    
    </Sidebar>

    <main>
        @yield('main')
    </main>

    <main>
        @yield('content')
    </main>
    
    <footer>
        @include('includes.footer')
    </footer>


</body>
</html>
