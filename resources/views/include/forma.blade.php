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
                <form method="POST" action="sendform">
                    @csrf
                    <input type="text" name="name" placeholder="Ismingiz" class="form-control mb-lg-2">
                    <input type="text" name="soname" placeholder="Familyangiz" class="form-control mb-lg-2">
                    <input type="email" name="email" placeholder="Elektron Pochta Manzil:" class="form-control mb-lg-2">
                    <input type="number" name="yoshingiz" placeholder="Yoshingiz" class="form-control mb-lg-2">
                    <button type="submit" class="btn btn-info mb-lg-2">Tasdiqlash</button>
                </form>
            </div>
        </div>
    </div>
   
</body>
</html>