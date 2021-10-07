<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <link rel="stylesheet" href="/mycss/bootstrap.css">
    <!-- <link rel="stylesheet" href="/mystyle.css"> -->
    <!-- <script src="/myscript.js"></script> -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> <h3 class="alert alert-info">Web Site</h3></div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <!-- <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="/student">Talaba</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dekan">Dekan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kurator">Kurator</a>
                    </li>
                    
                </ul> -->
                <x-menyu/>
            </div>
            <div class="col-lg-8">
                <h3>
                    {{$name}}
                </h3>
                <ul class="nav flex-column">
                    @foreach($boys as $boy)
                       <li class="nav-item text-success w-900">{{$boy}}</li>
                    @endforeach
                </ul>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quis cupiditate non aspernatur ut, enim assumenda ullam 
                    blanditiis eius, vel autem quam dicta quidem sint commodi 
                    deserunt error doloribus iure architecto.
                </p>
                <span class="text-danger">
                    @if($age>6 && $age<18 )
                        Maktab O'quvchisi
                    @else
                        Maktab O'quvchisi Emas
                    @endif
                    </span>
            </div>
        </div>
    </div>
    <script>
        var childs = @json($boys);
        console.log(childs[3]);
    </script>
</body>
</html>