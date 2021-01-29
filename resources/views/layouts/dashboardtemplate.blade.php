<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    @yield('title')
</head>
<body class="w-100" style="overflow-x-hidden">
    <div class="d-flex flex-nowrap flex-row">
        <div class="spacer-sidebar"></div>
        <div class="flex-grow-1">
            <div class="w-100">
                <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
                    <div class="container-fluid d-flex justify-content-between">
                      <a class="navbar-brand" href="#">
                          <img src="{{asset('image/logo-sma.png')}}" style="width:125px;">
                      </a>
                      <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                      </button> 
                    </div>
                  </nav>
            </div>
            <div class="w-90 shadow-sm p-4 rounded mx-auto mt-5">
                @yield('konten')
            </div>
        </div>
    </div>
    <div class="sidebar px-3 vh-100">
        <div class="w-100 d-flex flex-column" style="margin-top:150px;">
            <a href="#" class="menu arialrounded-mt-bold my-2 d-block">
                DASHBOARD
            </a>
            <a href="#" class="menu arialrounded-mt-bold my-2 d-block">
                TABEL
            </a>
            <a href="#" class="sub-menu ms-3 my-2 d-block">
                tabel 1
            </a>
            <a href="#" class="sub-menu ms-3 my-2 d-block">
                tabel 2
            </a>
            <a href="#" class="sub-menu ms-3 my-2 d-block">
                tabel 3
            </a>
        </div>
    </div>
    <div class="footer py-2">
        Copyright SMA Muhammadiyah 1 Surabaya,2020.
    </div>
</body>
    <script>
        $( document ).ready(function() {
            $('.navbar-toggler').click(function(){
                    $(".sidebar").toggleClass("sidebar-x");
                    $(".spacer-sidebar").toggleClass("w-250px");
            });
        });
    </script>
</html>