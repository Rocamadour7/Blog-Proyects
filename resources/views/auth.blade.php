<!DOCTYPE html>
<html lang="en">
<head>
    
    @include('partialsauth._head')

</head>
<body>
    
    @include('partials._nav')

    @include('partials._alerts')

    <div class="wrapper">
        <div class="header header-filter">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                            
                            @yield('content')

                        </div>
                    </div>
                </div>

                @include('partials._footer')
                
            </div>
        </div>
    </div>

    @include('partials._scripts')
</body>
</html>