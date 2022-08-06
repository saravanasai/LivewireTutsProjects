<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('tittle')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Livewire Tuts</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link {{ Request::segment(1) == 'counter' ? 'active text-white' : '' }}" aria-current="page"
                        href="{{ route('counter.index') }}">Counter</a>
                    <a class="nav-link {{ Request::segment(1) == 'calculater' ? 'active text-white' : '' }}" aria-current="page"
                    href="{{ route('calculater.index') }}">Calculater</a>
                    <a class="nav-link {{ Request::segment(1) == 'todo-application' ? 'active text-white' : '' }}" aria-current="page"
                    href="{{ route('todo.index') }}">Todos</a>
                    <a class="nav-link {{ Request::segment(1) == 'dependent-dropdown' ? 'active text-white' : '' }}" aria-current="page"
                    href="{{ route('dependent-dropdown.index') }}">Dependent Dropdown</a>
                    <a class="nav-link {{ Request::segment(1) == 'employee' ? 'active text-white' : '' }}" aria-current="page"
                    href="{{ route('employee.index') }}">Employee Grid</a>

                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @livewireScripts
    @yield('scripts')
</body>

</html>
