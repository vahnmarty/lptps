<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laptop Recommendation </title>

    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}"></script>
      <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css?')}}{{ mt_rand() }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/multi.css') }}">

</head>
    <body>
        <div class="main-container">
           <div class="container bg-light">
               <div class="row justify-content-center">

                    <div class="col">
                        
                        <h3 class="my-5 text-center">Here are your recommended Laptops:</h3>

                        <hr>

                        @foreach($laptops as $laptop)
                        <div class="row mb-3">
                            <div class="col-lg-3">
                                <img src="https://zdnet4.cbsistatic.com/hub/i/2019/04/17/29a7dab0-9812-4413-ada8-03e758fb0051/chuwi-herobook-main.jpg" width="100%">
                            </div>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col">
                                        <h4><b>Chuwi HeroBook - $500.00</b></h4>
                                        <table class="table table-bordered table-sm">
                                            <tbody>
                                                <tr>
                                                    <td>Graphics</td>
                                                    <td>11.6″ screen (1366 x 768)</td>
                                                </tr>
                                                <tr>
                                                    <td>Performance</td>
                                                    <td>Pentium N3060 with 4 GB of RAM</td>
                                                </tr>
                                                <tr>
                                                    <td>Storage</td>
                                                    <td>16 GB eMMC</td>
                                                </tr>
                                                <tr>
                                                    <td>Battery life</td>
                                                    <td>Up to 11 hours</td>
                                                </tr>
                                                <tr>
                                                    <td>OS</td>
                                                    <td>ChromeOS</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

               </div>
           </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    

    </body>
</html>
