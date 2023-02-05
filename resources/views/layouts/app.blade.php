@include('layouts.header')

<body>
<div id="app">
    <main>
        <div id="app--header">
            @yield('app--header')
        </div>
        <div id="app--container">
            <div id="app-container-left">
                @yield('app-container-left')
            </div>
            <div id="app-container-center">
                @yield('app-container-center')
            </div>
            <div id="app-container-right">
                @yield('app-container-right')
            </div>
        </div>
        <div id="app--footer">
            @yield('app--footer')
        </div>
    </main>
</div>
</body>
</html>
