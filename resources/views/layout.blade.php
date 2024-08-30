<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap4.0.0.min.css')}}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div id="wrapper">
        <header class="bg-primary p-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center text-white">Let's Work with Laravel</h1>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="bg-primary text-white p-2 py-3 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span>Copyright © @php echo date('Y'); @endphp | <a href="https://github.com/GouravKumarPandit" class="text-white" target="_blank">GouravKumarPandit</a></span>
                        &nbsp;&nbsp; <a target="_blank" href=""><img src="{{asset('images/instagram.png')}}" style="width: 25px; height: 25px;" alt="Instagram"></a> &nbsp;&nbsp; 
                        <a target="_blank" href="https://www.linkedin.com/in/gourav-kumar-pandit-533334218/"><img src="{{asset('images/linkedin.png')}}" style="width: 25px; height: 25px;" alt="Linkedin"></a> &nbsp;&nbsp;                
                        <a target="_blank" href="https://github.com/GouravKumarPandit"><img src="{{asset('images/github.png')}}" style="width: 25px; height: 25px;" alt="Github"></a> &nbsp;&nbsp;
                        <a target="_blank" href="https://www.youtube.com/@laptopAurCode27"><img src="{{asset('images/youtube.png')}}" style="width: 25px; height: 25px;" alt="You Tube"></a> &nbsp;&nbsp;
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>