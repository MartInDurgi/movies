<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body>
    <div class="container">
        @include('components.navigation')

    
        <main>
            @yield('content')
        </main> 
        @include('components.footer')
    </div>
</body>
</html>