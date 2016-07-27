
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title> Medical Advice</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/theme-cobalt.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/bootstrap-editable.css" rel="stylesheet">
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    </head>
    <body>
    	<div class="loader" >
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
				
		<div class="nav-container">
			<nav class="simple-bar top-bar">
				<div class="container">
				
				
					<div class="row nav-menu">
						<div class="col-md-3 col-sm-3 columns">
							<img src="/img/logo-light.png" class="logo logo-light" alt="Logo">
							<img src="/img/logo-dark.png" class="logo logo-dark" alt="Logo">
						</div>
					
						<div class="col-md-9 col-sm-9 columns text-right">
							<ul class="menu">
								<li><a href="/">Home</a></li>
                                                                {% if session.islogged == false %} 
								<li><a href="/login">Login</a></li>
                                                                <li><a href="/signup">Sign Up</a></li>
                                                                 {% else %} 
                                                                <li><a href="/logout">Logout</a></li>
                                                                <li><a href="/myAccount">My account</a></li>

                                                            <button class="btn-link btn-default dropdown-toggle" type="button" data-toggle="dropdown">Questions
                                                            <span class="caret"></span></button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="/questionList">QuestionList</a></li>
                                                                <li><a href="/addQuestion">Add Question</a></li>
                                                            </ul>

                                                                
                                                                 {% endif %} 
                                                                <!--START OF DROPDOWN LINKS
								<li class="has-dropdown"><a href="#">Dropdown</a>
									<ul class="subnav">
										<li><a href="#">Example</a></li>
										<li><a href="#">Example</a></li>
										<li><a href="#">Example</a></li>
										<li><a href="#">Example</a></li>
									</ul>
								</li>
								<li class="has-dropdown"><a href="#">Half Width</a>
									<div class="subnav subnav-halfwidth">
										<div class="col-sm-6">
											<h6 class="alt-font">Subnav Title</h6>
											<ul class="subnav">
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
											</ul>	
										</div>
										
										<div class="col-sm-6">
											<h6 class="alt-font">Subnav Title</h6>
											<ul class="subnav">
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
											</ul>	
										</div>
									</div>
								</li>
								<li class="has-dropdown"><a href="#">Fullwidth</a>
									<div class="subnav subnav-fullwidth">
										<div class="col-md-3">
											<h6 class="alt-font">Subnav Title</h6>
											<ul class="subnav">
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
											</ul>	
										</div>
										
										<div class="col-md-3">
											<h6 class="alt-font">Subnav Title</h6>
											<ul class="subnav">
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
											</ul>	
										</div>
										
										<div class="col-md-3">
											<h6 class="alt-font">Subnav Title</h6>
											<ul class="subnav">
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
											</ul>	
										</div>
										
										<div class="col-md-3">
											<h6 class="alt-font">Subnav Title</h6>
											<ul class="subnav">
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
												<li><a href="#">Example</a></li>
											</ul>	
										</div>
									</div>
								</li>
                                                                END OF DROPDOWN LINKS--> 
								
							</ul>
		
							<ul class="social-icons text-right">
								<li>
									<a href="#">
										<i class="icon social_twitter text-twitter"></i>
									</a>
								</li>
							
								<li>
									<a href="#">
										<i class="icon social_facebook text-facebook"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
					
				</div>
			</nav>
		
			
		
			
		
		</div>
		
		<div class="main-container">