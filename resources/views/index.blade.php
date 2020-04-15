	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Arepa 305</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ url('css/linearicons.css') }}">
			<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
			<link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
			<link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
			<link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">				
			<link rel="stylesheet" href="{{ url('css/nice-select.css') }}">							
			<link rel="stylesheet" href="{{ url('css/animate.min.css') }}">
			<link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">	
			<link rel="stylesheet" href="{{ url('css/font.css') }}">			
			<link rel="stylesheet" href="{{ url('css/main.css') }}">
		</head>
		<body>	
			<header id="header">
				<div class="header-top">
					<div class="container">
				  		<div class="row justify-content-center">
						      <div id="logo">
						        <a href="#principal"><img src="../storage/app/{{$logo[0]->logo}}" alt="" title="" /></a>
						      </div>
				  		</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-center d-flex">			
				      <nav id="nav-menu-container">
				        <ul class="nav-menu letter">
				          <li><a href="#principal">Home</a></li>
				          <li><a href="#nosotros">Nosotros</a></li>
				          <li><a href="#menu">Menú</a></li>
				          <li><a href="#gallery">Galeria</a></li>
				          <!--<li class="menu-has-children"><a href="">Blog</a>
				            <ul>
				              <li><a href="blog-home.html">Blog Home</a></li>
				              <li><a href="blog-single.html">Blog Single</a></li>
				            </ul>
				          </li>	
				          <li class="menu-has-children"><a href="">Pages</a>
				            <ul>
				            	  <li><a href="elements.html">Elements</a></li>
						          <li class="menu-has-children"><a href="">Level 2 </a>
						            <ul>
						              <li><a href="#">Item One</a></li>
						              <li><a href="#">Item Two</a></li>
						            </ul>
						          </li>					                		
				            </ul>
				          </li>	-->				          					          		          
				          <li><a href="#ubicacion">Contacto</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->					      		  
					</div>
				</div>
			</header><!-- #header -->
			
			<!-- start banner Area -->
			<section id="principal" class="banner-area" style="background:url(../storage/app/{{$fondo[0]->fondo}}) center center/cover;">		
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-12 banner-content">
							<!--<h6 class="text-white">Wide Options of Choice</h6> -->
							<h1 class="text-white letter">{{$title[0]->title}}</h1>
							<h2 class="text-white letter">
								{{$descripcion[0]->descripcion}}
							</h2>
							<a href="#menu" class="primary-btn text-uppercase">Visita Nuestro Menú</a>
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section id="nosotros" class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 home-about-left">
							<h1>{{$nosotros[0]->title}}</h1>
							<p class="justify">
								{{$nosotros[0]->descripcion1}}
							</p>
							<p>
								{{$nosotros[0]->descripcion2}} 
								<br>
								<img src="img/instagram.png" style="width: 35px; height: 35px"> <a href="https://www.instagram.com/arepa305/?hl=en" target="_blank">{{$nosotros[0]->red1}}</a>
								<img src="img/facebook.png" style="width: 28px; height: 28px"> <a href="https://www.facebook.com/pages/category/Restaurant/Arepa-305-574617986244740/" target="_blank" >{{$nosotros[0]->red2}}</a> 
							</p>
							<a href="#gallery" class="primary-btn">Galeria de Platos</a>
						</div>
						<div class="col-lg-6 home-about-right">
							<img class="img-fluid" src="../storage/app/{{$nosotros[0]->foto1}}" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->			

			<!-- Start menu-area Area -->
            <section id="menu" class="menu-area section-gap">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">{{$menu[0]->title}}</h1>
								<!--<p>Who are in extremely love with eco friendly system.</p>-->
							</div>
						</div>
					</div>	

                    <ul class="filter-wrap filters col-lg-12 no-padding">
                        <li class="active" data-filter="*">Todo</li>
                        <li data-filter=".arepas">{{$menu[0]->name1}}</li>
                        <li data-filter=".desayunos">{{$menu[0]->name2}}</li>
                        <li data-filter=".cachapas">{{$menu[0]->name3}}</li>
                        <li data-filter=".hamburguesas">{{$menu[0]->name4}}</li>
                        <li data-filter=".hot">{{$menu[0]->name5}}</li>
                        <li data-filter=".empanadas">{{$menu[0]->name6}}</li>
                        <li data-filter=".pepitos">{{$menu[0]->name7}}</li>
                        <li data-filter=".parrillas">{{$menu[0]->name8}}</li>
                        <li data-filter=".patacones">{{$menu[0]->name9}}</li>
                        <li data-filter=".bebidas">{{$menu[0]->name10}}</li>

                    </ul>
                    
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-md-6 all arepas">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{$menu[0]->name1}}</h4>
										<!--<h4 class="price">$49</h4>-->
									</div>			
									<p class="justify">
										{{$menu[0]->descripcion1}}
									</p>									
								</div>
                            </div>                         
                            <div class="col-md-6 all cachapas">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{$menu[0]->name2}}</h4>
										<!--<h4 class="price">$49</h4>-->
									</div>			
									<p class="justify">
										{{$menu[0]->descripcion2}}
									</p>									
								</div>
                            </div>
                            <div class="col-md-6 all desayunos">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{$menu[0]->name3}}</h4>
										<!--<h4 class="price">$49</h4>-->
									</div>			
									<p class="justify">
										{{$menu[0]->descripcion3}}
									</p>									
								</div>
                            </div>
                            <div class="col-md-6 all hamburguesas">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{$menu[0]->name4}}</h4>
										<!--<h4 class="price">$49</h4>-->
									</div>
									<p class="justify">
										{{$menu[0]->descripcion4}}
									</p>									
								</div>
                            </div>
                            <div class="col-md-6 all hot">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{$menu[0]->name5}}</h4>
										<!--<h4 class="price">$49</h4>-->
									</div>
									<p class="justify">
										{{$menu[0]->descripcion5}}
									</p>									
								</div>
                            </div>
                            <div class="col-md-6 all empanadas">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{$menu[0]->name6}}</h4>
										<!--<h4 class="price">$49</h4>-->
									</div>
									<p class="justify">
										{{$menu[0]->descripcion6}}
									</p>									
								</div>
                            </div>  
                            <div class="col-md-6 all pepitos">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{$menu[0]->name7}}</h4>
										<!--<h4 class="price">$49</h4>-->
									</div>
									<p class="justify">
										{{$menu[0]->descripcion7}}
									</p>									
								</div>
                            </div> 
                            <div class="col-md-6 all parrillas">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{$menu[0]->name8}}</h4>
										<!--<h4 class="price">$49</h4>-->
									</div>
									<p class="justify">
										{{$menu[0]->descripcion8}}
									</p>									
								</div>
                            </div> 
                            <div class="col-md-6 all patacones">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{$menu[0]->name9}}</h4>
										<!--<h4 class="price">$49</h4>-->
									</div>
									<p class="justify">
										 {{$menu[0]->descripcion9}}
									</p>									
								</div>
                            </div> 
                            <div class="col-md-6 all bebidas">
								<div class="single-menu">
									<div class="title-wrap d-flex justify-content-between">
										<h4>{{$menu[0]->name10}}</h4>
										<!--<h4 class="price">$49</h4>-->
									</div>
									<p class="justify">
										 {{$menu[0]->descripcion10}}
									</p>									
								</div>
                            </div> 

                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End menu-area Area -->			

			<!-- Start reservation Area -->
			<section id="ubicacion" class="reservation-area section-gap relative" style="background:url(../storage/app/{{$ubicacion[0]->fondo}}) center center/cover;">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-12 reservation-left">
							<h1 class="text-white">{{$ubicacion[0]->title}}</h1>
							<!--<p class="text-white pt-20">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.
							</p>-->
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.598087110864!2d-80.43023828523224!3d25.518447324854662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9dd6e808f2ae9%3A0x39672fe24715f7cb!2sArepa+305!5e0!3m2!1ses!2sve!4v1538939275265" width="100%" height="490" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<!--
						<div class="col-lg-6 reservation-right">
							<form class="form-wrap text-center" action="#">
								<input type="text" class="form-control" name="name" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
								<input type="email" class="form-control" name="email" placeholder="Correo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								<input type="text" class="form-control" name="phone" placeholder="Teléfono" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" >		
								<input type="text" class="form-control date-picker" name="date" placeholder="Fecha de Nacimiento" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Select Date & time'" >
								<textarea class="form-control" id="message" rows="2" name="message" placeholder="Mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensaje'"></textarea>						
								<!--<div class="form-select" id="service-select">
									<select>
										<option data-display="">Select Event</option>
										<option value="1">Event One</option>
										<option value="2">Event Two</option>
										<option value="3">Event Three</option>
										<option value="4">Event Four</option>
									</select>
								</div>	-->								
								<!--<button class="primary-btn text-uppercase mt-20">Enviar Comentario</button>
							</form>
						</div> -->
					</div>
				</div>	
			</section>
			<!-- End reservation Area -->
			
			<!-- Start gallery-area Area -->
            <section id="gallery" class="gallery-area section-gap">
                <div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Galeria de Platos Venezolanos</h1>
								<!--<p>Who are in extremely love with eco friendly system.</p>-->
							</div>
						</div>
					</div>	
                    
                    <ul class="filter-wrap filters col-lg-12 no-padding">
                        <li class="active" data-filter="*">Todo</li>
                        <li data-filter=".arepas">{{$menu[0]->name1}}</li>
                        <li data-filter=".desayunos">{{$menu[0]->name2}}</li>
                        <li data-filter=".cachapas">{{$menu[0]->name3}}</li>
                        <li data-filter=".hamburguesas">{{$menu[0]->name4}}</li>
                        <li data-filter=".hot">{{$menu[0]->name5}}</li>
                        <li data-filter=".empanadas">{{$menu[0]->name6}}</li>
                        <li data-filter=".pepitos">{{$menu[0]->name7}}</li>
                        <li data-filter=".parrillas">{{$menu[0]->name8}}</li>
                        <li data-filter=".patacones">{{$menu[0]->name9}}</li>
                        <li data-filter=".bebidas">{{$menu[0]->name10}}</li>
                    </ul>
                    
                    
                    <div class="filters-content">
                        <div class="row grid">
                        	<!-- Arepas -->
                        	<div class="col-lg-4 col-md-6 col-sm-6 all arepas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->arepa1}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all arepas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->arepa2}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all arepas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->arepa3}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all arepas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->arepa4}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all arepas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->arepa5}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all arepas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->arepa6}}" alt="">
                            	</div>	                          
                            </div> 
                            <!-- Cachapas -->
                            <div class="col-lg-4 col-md-6 col-sm-6 all cachapas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->cachapa1}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all cachapas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->cachapa2}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all cachapas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->cachapa3}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all cachapas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->cachapa4}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all cachapas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->cachapa5}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all cachapas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->cachapa6}}" alt="">
                            	</div>	                          
                            </div> 
                            <!-- Desayunos -->
                            <div class="col-lg-4 col-md-6 col-sm-6 all desayunos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->desayuno1}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all desayunos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->desayuno2}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all desayunos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->desayuno3}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all desayunos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->desayuno4}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all desayunos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->desayuno5}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all desayunos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->desayuno6}}" alt="">
                            	</div>	                          
                            </div> 
                            <!-- Hamburguesas -->
                            <div class="col-lg-4 col-md-6 col-sm-6 all hamburguesas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hamburguesa1}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all hamburguesas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hamburguesa2}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all hamburguesas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hamburguesa3}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all hamburguesas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hamburguesa4}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all hamburguesas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hamburguesa5}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all hamburguesas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hamburguesa6}}" alt="">
                            	</div>	                          
                            </div> 
                            <!-- Hot Dogs -->
                            <div class="col-lg-4 col-md-6 col-sm-6 all hot">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hotd1}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all hot">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hotd2}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all hot">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hotd3}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all hot">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hotd4}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all hot">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hotd5}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all hot">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->hotd6}}" alt="">
                            	</div>	                          
                            </div> 
                            <!-- Empanadas -->
                            <div class="col-lg-4 col-md-6 col-sm-6 all empanadas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->empanada1}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all empanadas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->empanada2}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all empanadas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->empanada3}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all empanadas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->empanada4}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all empanadas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->empanada5}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all empanadas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->empanada6}}" alt="">
                            	</div>	                          
                            </div>
                            <!-- Pepitos -->
                            <div class="col-lg-4 col-md-6 col-sm-6 all pepitos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->pepito1}}" alt="">
                            	</div>	                          
                            </div> 
                            <div class="col-lg-4 col-md-6 col-sm-6 all pepitos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->pepito2}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all pepitos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->pepito3}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all pepitos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->pepito4}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all pepitos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->pepito5}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all pepitos">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->pepito6}}" alt="">
                            	</div>	                          
                            </div>
                            <!-- Parrillas -->
                            <div class="col-lg-4 col-md-6 col-sm-6 all parrillas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->parrilla1}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all parrillas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->parrilla2}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all parrillas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->parrilla3}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all parrillas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->parrilla4}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all parrillas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->parrilla5}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all parrillas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->parrilla6}}" alt="">
                            	</div>	                          
                            </div>
                            <!-- Patacones -->
                            <div class="col-lg-4 col-md-6 col-sm-6 all patacones">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->patacon1}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all patacones">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->patacon2}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all patacones">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->patacon3}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all patacones">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->patacon4}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all patacones">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->patacon5}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all patacones">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->patacon6}}" alt="">
                            	</div>	                          
                            </div>
                            <!-- Bebidas -->
                            <div class="col-lg-4 col-md-6 col-sm-6 all bebidas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->bebida1}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all bebidas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->bebida2}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all bebidas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->bebida3}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all bebidas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->bebida4}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all bebidas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->bebida5}}" alt="">
                            	</div>	                          
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 all bebidas">
                            	<div class="single-gallery">
                            		<img class="img-fluid" src="../storage/app/{{$galeria[0]->bebida6}}" alt="">
                            	</div>	                          
                            </div>                           
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End gallery-area Area -->			

			<!-- Start review Area -->
			<section class="review-area section-gap">
				<div class="container">
					<div class="row">
						<div class="active-review-carusel">
							<div class="single-review">
								<img src="img/user.png" alt="">
								<h4>Hulda Sutton</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>								
								</div>	
								<p>
									“Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
								</p>
							</div>
							<div class="single-review">
								<img src="img/user.png" alt="">
								<h4>Hulda Sutton</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>								
								</div>	
								<p>
									“Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
								</p>
							</div>	
							<div class="single-review">
								<img src="img/user.png" alt="">
								<h4>Hulda Sutton</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>								
								</div>	
								<p>
									“Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
								</p>
							</div>
							<div class="single-review">
								<img src="img/user.png" alt="">
								<h4>Hulda Sutton</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>								
								</div>	
								<p>
									“Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.”
								</p>
							</div>														
						</div>
					</div>
				</div>	
			</section>
			<!-- End review Area -->					

			<!-- Start blog Area -->
			<!--<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest From Our Blog</h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b1.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Cooking Perfect Fried Rice
							in minutes</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b2.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Secret of making Heart 
							Shaped eggs</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b3.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>How to check steak if 
							it is tender or not</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b4.jpg" alt="">								
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="blog-single.html"><h4>Seaseme and black seed
							Flavored Bun Rocks</h4></a>
							<p>
								inappropriate behavior ipsum dolor sit amet, consectetur.
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div>									
						</div>							
					</div>
				</div>	
			</section> -->
			<!-- End blog Area -->							

			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="footer-widget-wrap">
					<div class="container">
						<div class="row section-gap">
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Horario</h4>
									<ul class="hr-list">
										<li class="d-flex justify-content-between">
											<span>Lunes - Viernes</span> <span>{{$ubicacion[0]->horario1}}</span>
										</li>
										<li class="d-flex justify-content-between">
											<span>Sabados</span> <span>{{$ubicacion[0]->horario2}}</span>
										</li>
										<li class="d-flex justify-content-between">
											<span>Domingos</span> <span>{{$ubicacion[0]->horario3}}</span>
										</li>																				
									</ul>
								</div>
							</div>
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Dirección</h4>
									<p>
										{{$ubicacion[0]->address}}
									</p>
								</div>
							</div>	
							<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Contactanos</h4>
									<p class="number">
										{{$ubicacion[0]->phone}}
									</p>
									<p>
										{{$ubicacion[0]->email}}
									</p>
								</div>
							</div>					
							<!--<div class="col-lg-4  col-md-6 col-sm-6">
								<div class="single-footer-widget">
									<h4>Newsletter</h4>
									<p>You can trust us. we only send promo offers, not a single spam.</p>
									<div class="d-flex flex-row" id="mc_embed_signup">


										  <form class="navbar-form" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
										    <div class="input-group add-on align-items-center d-flex">
										      	<input class="form-control" name="EMAIL" placeholder="Your Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email address'" required="" type="email">
												<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
										      <div class="input-group-btn">
										        <button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
										      </div>
										    </div>
										      <div class="info mt-20"></div>
										  </form>
									</div>
								</div>
							</div>	-->					
						</div>					
					</div>					
				</div>
				<div class="footer-bottom-wrap">
					<div class="container">
						<div class="row footer-bottom d-flex justify-content-between align-items-center">
							<p class="col-lg-8 col-mdcol-sm-6 -6 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This page is developed for <a href="http://hitodesigns.online/home/" target="_blank">HitoDesigns</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							<ul class="col-lg-4 col-mdcol-sm-6 -6 social-icons text-right">
	                            <li><a href="https://www.facebook.com/pages/category/Restaurant/Arepa-305-574617986244740/" target="_blank"><i class="fa fa-facebook"></i></a></li>
	                            <li><a href="https://www.instagram.com/arepa305/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a></li>        
	                        </ul>
						</div>						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="{{ url('js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="{{ url('js/popper.min.js') }}"></script>
			<script src="{{ url('js/vendor/bootstrap.min.js') }}"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 			<script src="{{ url('js/jquery-ui.js') }}"></script>					
  			<script src="{{ url('js/easing.min.js') }}"></script>			
			<script src="{{ url('js/hoverIntent.js') }}"></script>
			<script src="{{ url('js/superfish.min.js') }}"></script>	
			<script src="{{ url('js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>						
			<script src="{{ url('js/jquery.nice-select.min.js') }}"></script>					
			<script src="{{ url('js/owl.carousel.min.js') }}"></script>			
            <script src="{{ url('js/isotope.pkgd.min.js') }}"></script>								
			<script src="{{ url('js/mail-script.js') }}"></script>	
			<script src="{{ url('js/main.js') }}"></script>	
		</body>
	</html>