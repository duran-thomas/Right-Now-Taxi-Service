
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8"/>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="../css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="css/clientstyle.css" rel="stylesheet" type="text/css"  media="all" />
    <!--suppress JSUnresolvedLibraryURL -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../js/star-rating.js" type="text/javascript"></script>
 <body>
		<head><title>Rate Us</title></head>
    <script>
        jQuery(document).ready(function () {
            $("#input-21f").rating({
                starCaptions: function (val) {
                    if (val < 3) {
                        return val;
                    } else {
                        return 'high';
                    }
                },
                starCaptionClasses: function (val) {
                    if (val < 3) {
                        return 'label label-danger';
                    } else {
                        return 'label label-success';
                    }
                },
               hoverOnClear: false
            });
            var $inp = $('#rating-input');

            $inp.rating({
                min: 0,
                max: 5,
                step: 1,
                size: 'lg',
                showClear: false
            });

            $('#btn-rating-input').on('click', function () {
                $inp.rating('refresh', {
                    showClear: true,
                    disabled: !$inp.attr('disabled')
                });
            });


            $('.btn-danger').on('click', function () {
                $("#kartik").rating('destroy');
            });

            $('.btn-success').on('click', function () {
                $("#kartik").rating('create');
            });

            $inp.on('rating.change', function () {
                alert($('#rating-input').val());
            });


            $('.rb-rating').rating({
                'showCaption': true,
                'stars': '3',
                'min': '0',
                'max': '3',
                'step': '1',
                'size': 'xs',
                'starCaptions': {0: 'status:nix', 1: 'status:wackelt', 2: 'status:geht', 3: 'status:laeuft'}
            });
            $("#input-21c").rating({
                min: 0, max: 8, step: 0.5, size: "xl", stars: "8"
            });
        });
    </script>
</div>
		<!-----start-header----->
		<div class="header">
			<!---start-wrap---->
			<div class="wrap">
				<!---start-top-header---->
				<div class="top-header">
					<div class="top-header-left">
						<p>Right Now Taxi Service</p>
						<p>COMPANY</p>
					</div>
					<div class="top-header-right">
						<div class="top-header-contact-info">
							<p>GET FREE CONSULTATION:</p>
							<span>1 876 773 1774</span>
						</div>
						<div class="top-header-contact-account">
							<div class="sub-about-grid-social">
								<ul>
									<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
									<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
									<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
									<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
								</ul>
							</div>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="clear"> </div>
				</div>
				<!---End-top-header---->
				<!----start-main-header----->
				<div class="main-header">
					<div class="logo">
						<a href="index.html"><img src="images/logo1.png" title="logo" /></a>
					</div>
					<div class="top-nav">
						<ul>
							<li><a href="/clientpg2">Home</a></li>
							<li><a href="/aboutUs">About Us</a></li>
							<li><a href="/cabRequest">Request-A-Cab</a></li>
							<li><a href="/rateUs">Rate Us</a></li>
							<li class="active"><a href="/contactUs">Contact Us</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
				<!----End-main-header----->
			</div>
		</div>
		<div class="clear"> </div>
			<!---End-header--->
		<!---start-content----->
		<div class="content">
			<div class="wrap">
				<!---start-contact---->
				<div class="contact">
					<div class="contact-header">
							<h3>Rate Us</h3>
							<ul>							
								<div class="clear"> </div>
							</ul>
						</div>
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">		    	 	      				
				</div>				
				<div class="col span_2_of_3">
					<form>  	
                        <input id="input-21b" value="4" type="text" class="rating" data-min=0 data-max=5 data-step=0.2 data-size="lg"
                         required title="">
                    <div class="clearfix"></div>	
					    </form>
				    </div>
  				</div>
				<!---End-contact---->	
			</div>
		</div>
	<!---End-wrap---->
	</body>
</html>

