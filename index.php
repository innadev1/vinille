<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>Vinille Büro</title>
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

		<script type="text/javascript" src="js/index.js"></script>
		
		<script>
			$(document).ready(function(){
				$('#what-we-do div').click(function(){
					id = $(this).index()
					$('#performance .performance').css('display','none')
						$('#performance .performance:eq('+id+')').css('display','flex')
				})
				$("#what-we-do div").click(function(e) {
				  e.preventDefault();
				  $("#what-we-do div").removeClass('active');
				  $(this).addClass('active');
				})
			});
		</script>
		
    </head>
	
	<body>
		<?php include 'assets/header.php'; ?>
	
		<div id="main-body">
			
			<div id="about-company">
			
				<h2>
					We’re Vinille Buro, an independent creative <br>
					studio in Riga. We build beautiful brands and <br>
					digital experiences for clients across industries <br>
					and around the world.
				</h2>
				
				<div class="button pink flex">
					<a>About us</a>
				</div>
				
			</div>
			
			<div id="what-we-do" class="flex">
				
				<div class="what">
					<h4>
						what<br>
						we<br>
						do___
					</h4>
				</div>
				
				<div class="di active">
					<h2>Di</h2>
					<p>digital</p>
				</div>
				
				<div class="de">
					<h2>De</h2>
					<p>design</p>
				</div>
				
				<div class="pe">
					<h2>Pe</h2>
					<p>performance</p>
				</div>
				
				<div class="an">
					<h2>An</h2>
					<p>analytics</p>
				</div>
				
				<div class="li">
					<h2>li</h2>
					<p>indipendent idea</p>
				</div>
				
				<div class="as">
					<h2>As</h2>
					<p>advertisment<br> services</p>
				</div>
				
				<div class="mo">
					<h2>Mo</h2>
					<p>mobile</p>
				</div>
				
			</div>
			
			<div id="performance">
			
				<div class="performance flex p0">
				</div>
				<div class="performance flex p1">
					<div>
					
						<h3>Digital</h3>

					</div>
					<div>
					
						<p>
							Taste our quality & speed of code typing, all your <br>
							wishes will be completed here, developing home <br>
							pages and mobile applications is our delight. 
						</p>
					
					</div>
					<div>
					
						<p>
							- Website development<br>
							- Mobile application development<br>
							- Web interface development<br>
							- Product optimisation<br>
							- Digital engineering<br>
							- Digital analytics<br>
							- Website development<br>
							- Mobile application development<br>
							- Web interface development<br>
							- Product optimisation<br>
							- Digital engineering<br>
							- Digital analytics
						</p>
					
					</div>
				</div>
				<div class="performance flex p2">
					<div>
					
						<h3>Design</h3>

					</div>
					<div>
					
						<p>
							Feel our emotions in addition to the standard branding <br>
							package, we are passionate about 3D visualization, <br>
							product design and packaging, corporate image <br>
							development and excellence design.
						</p>
					
					</div>
					<div>
					
						<p>
							- Branding/rebranding<br>
							- 3D visualization/ WebGL / Motion Graphics<br>
							- Copyright<br>
							- POS<br>
							- Corporate branding
						</p>
					
					</div>
				</div>
				<div class="performance flex p3">
					<div>
					
						<h3>Performance</h3>

					</div>
					<div>
					
						<p>
							Feel our emotions in addition to the standard <br>
							branding package, we are passionate about 3D <br>
							visualization, product design and packaging, <br>
							corporate image development and excellence design.
						</p>
					
					</div>
				</div>
				<div class="performance flex p4">
					
					<div>
					
						<h3>Analytics</h3>

					</div>
					<div>
					
						<p>
							The AI brain of the agency, a modern way of <br>
							analytics, and data-mining solutions that give <br>
							compeatitiveness in your business profile  supported <br>
							by Google™
						</p>
					
					</div>
					<div>
					
						<p>
							- Google 360°<br>
							- Online intelligence system introduction<br>
							- Advertisment placement analyse<br>
							- Data managment and hosting system - development<br>
							- E-mail marketing <br>
							- and lead generation<br>
							- Video advertising<br>
							- Social media marketing
						</p>
					
					</div>
				</div>
				<div class="performance flex p5">
					<div>
					
						<h3>Independent<br>Idea</h3>

					</div>
					<div>
					
						<p>
							The heart of the agency, here are all communication <br>
							and content strategies & conducted all the <br>
							researches for the development of the successful <br>
							emotional branding identity.
						</p>
					
					</div>
				</div>
				<div class="performance flex p6">
					<div>
					
						<h3></h3>

					</div>
					<div>
					
						<p>
							
						</p>
					
					</div>
				</div>
				<div class="performance flex p7">
					<div>
					
						<h3>Mobile</h3>

					</div>
					<div>
					
						<p>
							The vision, that contains continum of options, make <br>
							connections everyday between audience and your <br>
							business, you can be more productive with us.
						</p>
					
					</div>
					<div>
					
						<p>
							- Mobile-strategy<br>
							- Mobile display advertising<br>
							- Mobile Programmatic<br>
							- Data managment and hosting system - development<br>
							- User involvement from Mobile Networks<br>
							- App Store & Google Play Optimization
						</p>
					
					</div>
				</div>
				
			</div>
			
			<div id="left" class="side-blocks flex">
			
				<div class="pic pic-1"></div>
				
				<div class="text">
				
					<h2>ORIBE</h2>
					
					<div class="border"></div>
					
					<h5>Package<br>design</h5>
					
					<div class="button grey flex">
						<a>See more</a>
					</div>
				</div>
			
			</div>
			
			<div id="right" class="side-blocks flex">
			
				<div class="pic pic-2"></div>
				
				<div class="text">
				
					<h2>WOOD WILLEN</h2>
					
					<div class="border"></div>
					
					<h5>Corporate<br>Branding</h5>
					
					<div class="button brown flex">
						<a>See more</a>
					</div>
				</div>
			
			</div>
			
			<div id="left" class="side-blocks flex">
			
				<div class="pic pic-3"></div>
				
				<div class="text">
				
					<h2>MERCURE</h2>
					
					<div class="border"></div>
					
					<h5>Branding</h5>
					
					<div class="button blue flex">
						<a>See more</a>
					</div>
				</div>
			
			</div>
			
			<div id="right" class="side-blocks flex">
			
				<div class="pic pic-4"></div>
				
				<div class="text">
				
					<h2>SAS</h2>
					
					<div class="border"></div>
					
					<h5>Mobile interface<br>application<br>development</h5>
					
					<div class="button blue flex">
						<a>See more</a>
					</div>
				</div>
			
			</div>
			
			<div id="left" class="side-blocks flex">
			
				<div class="pic pic-5"></div>
				
				<div class="text">
				
					<h2>PUMA</h2>
					
					<div class="border"></div>
					
					<h5>Web interface<br>development</h5>
					
					<div class="button red flex">
						<a>See more</a>
					</div>
				</div>
			
			</div>
			
		</div>
	
		<?php include 'assets/footer.php'; ?>
	</body>
	
</html>
