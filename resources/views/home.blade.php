<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>URL Shortening Service</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
     
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Get Tiny URL</h1>
                        <h3>Create a shortened URL</h3>
                        <hr class="intro-divider">
                       	<div class="container">
				            <div class="content">
				                <form>
				                {!! csrf_field() !!}
				                    <div class="form-group col-lg-12">
				                        <label>Enter full URL</label>
				                        <input type="text" name="url_long" id="url_long" class="form-control" placeholder="Enter a url here">
				                    </div>
				                    <div class="form-group">
				                        <input type="button" name="" id="create_shorter" class="btn-primary" value="Create shorter URL" />
				                    </div>
			                       	<div class="form-group col-lg-12" style="display: none;" id="shortened_dv">
				                        <label>Shortened URL</label>
				                        <input type="text" name="shortened" id="shortened" class="form-control">
				                    </div>
				                </form>
				            </div>
    					</div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->
    <!-- Footer -->
    <footer>
        <div class="container">
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        $("#create_shorter").on('click',function(){
            alert('working');
            var url_long = $("#url_long").val(); 
            $.ajax({
                type: "POST",
                url: "/save_url",
                data: {url_long:url_long, "_token":"{{ csrf_token() }}"},
                success: function(data){
                	console.log(data);
                    alert(data);
                    $("#url_long").val("");
                    $("#shortened").val(data);
                    $("#shortened_dv").css("display", "inline");
                }

            });
        });
    </script>
</body>

</html>
