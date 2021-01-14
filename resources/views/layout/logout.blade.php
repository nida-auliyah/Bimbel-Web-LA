
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <style type="text/css">
		.no-touch .logout-icon-effect-1 .logout-icon:hover {
            color: #ffffff;
        }

        .no-touch .logout-icon-effect-1 .logout-icon.active {}

        .logout-icon-medium {
            width: 80px !important;
            height: 80px !important;
            margin: 25px 15px !important;
            background: #3E4246 !important;
        }

        .services_lists_boxes_icon_none i:hover, .services_lists_boxes_icon i:hover {
            background: #ffffff;
            -webkit-transition: background 0.2s, color 0.2s;
            -moz-transition: background 0.2s, color 0.2;
            transition: background 0.2s, color 0.2s;
        }

        .logout-icon-medium, .logout-icon {
            display: inline-block;
            cursor: pointer;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            text-align: center;
            position: relative;
            z-index: 1;
            background: #2B2E31;
            color: #ffffff;
        }

        .logout-icon-medium:after, .logout-icon:after {
            pointer-events: none;
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            content: '';
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
        }

        .logout-icon-medium:before {
            line-height: 80px !important;
        }

        .logout-icon-medium:before, .logout-icon:before {
            speak: none;
            line-height: 57px;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            display: block;
            -webkit-font-smoothing: antialiased;
        }

        .logout-icon-effect-1 .logout-icon {
            -webkit-transition: background 0.2s, color 0.2s;
            -moz-transition: background 0.2s, color 0.2;
            transition: background 0.2s, color 0.2s;
        }

        .logout-icon-effect-1 .logout-icon:after {
            top: -7px;
            left: -7px;
            padding: 7px;
            -webkit-transition: -webkit-transform 0.2s, opacity 0.2s;
            -webkit-transform: scale(.8);
            -moz-transition: -moz-transform 0.2s, opacity 0.2s;
            -moz-transform: scale(.8);
            -ms-transform: scale(.8);
            transition: transform 0.2s, opacity 0.2s;
            transform: scale(.8);
            opacity: 0;
        }

        .no-touch .logout-icon-effect-1 .logout-icon:hover:after {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
        }
        div.fixed {
        position: fixed;
        bottom: 20px;
        right: 0;
        width: 300px;
        }
	</style>
  </head>
  <body>     
    <section class="">
        <div class="container">
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
                <div class="servicebox text-center">
                    <div class="service-icon" style="padding-top: 40%; padding-left:80%">
                        <div class="dm-icon-effect-1 fixed" data-effect="slide-left">
                            <a href="/" class="" > 
                                <i class="active logout-icon fa fa-sign-out fa-2x" ></i> 
                            </a>
                        </div>                        
                    </div>
                    <!-- service-icon -->
                </div>
                <!-- servicebox -->                
            </div>
            <!-- large-4 --> 
            
        </div>  
        <!-- end container -->
        
    </section>


  </body>
</html>