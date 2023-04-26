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
    @include('includes.header')
    </Sidebar>

    <main>
        @yield('main')
    </main>

    <main>
        @yield('content')
    </main>
    
    <footer>
        
    </footer>


</body>
</html>
