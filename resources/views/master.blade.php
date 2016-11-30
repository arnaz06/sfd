<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Software Freedom Day</title>

    <!-- Bootstrap Core CSS -->

    {!! Html::style('vendor-workshop/bootstrap/css/bootstrap.min.css') !!}
    <!-- Bootstrap external -->
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    {{--sing anyar nggo chrome--}}
    {!! Html::style('css-workshop/chrome.bootstrap.min.css') !!}
    <!-- Custom Fonts -->
    {!! Html::style('vendor-workshop/font-awesome/css/font-awesome.min.css') !!}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    {!! Html::style('css-workshop/agency.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- style="color:#8D8D86" -->
    <style>
      #icon-color{
        color: black;
      }
      #rundown{
        background-color: #ecececff;
      }
      #detail{
        background-color: #f2f2f2ff;
      }
      #sponsor{
        background-color: #ecececff;
      }
      #footer{
        background-color: #f2f2f2ff;
      }
    </style>
</head>


@yield('home')
@yield('daftar')
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Made with &hearts; by Dinus Open Source Community</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="https://twitter.com/doscomedia"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/doscomedia/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.instagram.com/doscomedia/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li><a href="https://startbootstrap.com/">Thanks to Start Bootstrap</li>
                    <li><a href="http://www.freepik.com">Designed by Freepik</a></li>
                    <li><a href="http://protiumdesign.com">Protium Design</a></i>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery -->
{!! Html::script('vendor-workshop/jquery/jquery.min.js') !!}
<!-- Bootstrap Core JavaScript -->
{!! Html::script('vendor-workshop/bootstrap/js/bootstrap.min.js') !!}

<!-- Plugin JavaScript -->
{!! Html::script('http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js') !!}

<!-- Contact Form JavaScript -->
{!! Html::script('js-workshop/jqBootstrapValidation.js') !!}
{!! Html::script('js-workshop/contact_me.js') !!}

<!-- Theme JavaScript -->
{!! Html::script('js-workshop/agency.min.js') !!}

</body>

</html>
