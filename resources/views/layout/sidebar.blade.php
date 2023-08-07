<!DOCTYPE html>
<html lang="en">
@include('components.head')

<body>

    @include('components.navigation')


    <main>
        <div class="row">
            <div class="col col-2">
                <div class="list-group list-group-flush border-bottom scrollarea col-sm">
                    @include('components.sidebar')
                </div>
            </div>
            <div class="col col-8">
                @yield('content')
            </div>
        </div>


    </main>
    @include('components.footer')

</body>

</html>
