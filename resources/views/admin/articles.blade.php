<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="author" content="Saide">
<link rel="apple-touch-icon" href="https://s-aide.com/assets/img/dee.png">
    <link rel="shortcut icon" href="https://s-aide.com/assets/img/dee.png">

    <!-- Title Page-->
    <title>{{Lang::get('saide.Edit-Password')}}</title>

    <!-- Fontfaces CSS-->
   <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

  
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
    <style type="text/css">
  
  label{
        color: #00205b;
  }
  hr.rounded {
  border-top: 4px solid #bbb;
  border-radius: 5px;
}
</style>
 <script type="text/javascript">    

function getval(sel)
{
    $language=sel.value;
    location.href =("lang/"+$language);
}
</script>
</head>

<body>
     <div class="page-wrapper">
    
        <!-- PAGE CONTAINER-->
        <div class="page-container">
                 @extends('backoffice.menu.nascoheader')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
   <div class="col-lg-2"></div>
                            <div class="col-lg-8">

                                <div class="card">
                                    <div class="card-header">{{Lang::get('saide.Edit-Password')}}</div>
                                      <div class="card-body card-block">
                                   <form method="post" action="/nasco/updatepassword">
									@csrf
                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">{{Lang::get('saide.currentpassword')}}:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                   <input class="form-control" placeholder="{{Lang::get('saide.currentpassword')}}" type="Password" name="password" value="">
                                                    
                                                </div>
                                            </div>

                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">{{Lang::get('saide.newpassword')}}:</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                 <input placeholder="{{Lang::get('saide.newpassword')}}" class="form-control" type="Password" name="newpassword" value="">
                                                    
                                                </div>
                                            </div>

                                    <center>      <button style="background: linear-gradient(225deg, #f8c406 10%, #fd6805 90%) ;color: white;" value="{{Lang::get('auth.update')}}" value="{{Lang::get('saide.update')}}" type="submit" class="btn btn-light btn-md">{{Lang::get('saide.edit')}}</button></center>
									</form>
                                    @if(isset($titles))
@foreach($titles as $t)


{{ $t->name }}

@endforeach
@endif
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>© Copyright SAİDE. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

      <!-- Jquery JS-->
 <script src="{{env("APP_URL").'vendor/jquery-3.2.1.min.js'}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{env("APP_URL").'vendor/bootstrap-4.1/popper.min.js'}}"></script>
    <script src="{{env("APP_URL").'vendor/bootstrap-4.1/bootstrap.min.js'}}"></script>
   
    <script src="{{env("APP_URL").'vendor/slick/slick.min.js'}}">
    </script>
    <script src="{{env("APP_URL").'vendor/wow/wow.min.js'}}"></script>
    <script src="{{env("APP_URL").'vendor/animsition/animsition.min.js'}}"></script>
    <script src="{{env("APP_URL").'vendor/bootstrap-progressbar/bootstrap-progressbar.min.js'}}">
    </script>
    <script src="{{env("APP_URL").'vendor/counter-up/jquery.waypoints.min.js'}}"></script>
    <script src="{{env("APP_URL").'vendor/counter-up/jquery.counterup.min.js'}}">
    </script>
    <script src="{{env("APP_URL").'vendor/circle-progress/circle-progress.min.js'}}"></script>
    <script src="{{env("APP_URL").'vendor/perfect-scrollbar/perfect-scrollbar.js'}}"></script>
    <script src="{{env("APP_URL").'vendor/chartjs/Chart.bundle.min.js'}}"></script>
    <script src="{{env("APP_URL").'vendor/select2/select2.min.js'}}">
    </script>

    <!-- Main JS-->
    <script src="{{env("APP_URL").'js/main.js'}}"></script>

</body>

</html>
<!-- end document-->




