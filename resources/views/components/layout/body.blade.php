<body class="font-figtree text-azure text-xs leading-[1.35] flex min-h-screen flex-col {{ Route::is('page.imprint') || Route::is('page.privacy') ? 'bg-content bg-center bg-no-repeat bg-cover' : ''}}">
{{ $slot }}
@vite('resources/js/app.js')
</body>
</html>
<!-- made with ❤ by wbg.ch & marceli.to -->
