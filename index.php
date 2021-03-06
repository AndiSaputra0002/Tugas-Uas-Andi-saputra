<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
	<title>Jasa Joki Rank Mobile lejends</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
	   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<input type="checkbox" id="check">
<!--header area start-->
<header>	
<label for="check">
	<i class="fas fa-bars" id="sidebar_btn"></i>
</label>
<div class="left_area">	
<h3>ANARCIS<span>JOKI</span></h3>
</div>
<div class="right_area">
<div class="logout_btn">
	<i class="material-icons  medium">account_circle</i>
</div>

</div>
</header>
<!--header area start-->
<!--sidebar start-->
<div class="sidebar">
<center>
<img src="gambar/abdi.jpg" class="profile_image" alt="">
<br>
<span style="font-family: sans-serif;font-size: 20px;
color:red">Andi Saputra</span>
</center>	
<a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
<a href="indexx.php"><i class="fas fa-cogs"></i><span>Cari harga</span></a>
<a href="Data_penjoki.php"><i class="fas fa-table"></i><span>Data penjoki</span></a>
<a href="#"><i class="fas fa-th"></i><span>Laporan Keuangan</span></a>
<a href="#"><i class="fas fa-info-circle"></i><span>Tentang</span></a>
<a href="#"><i class="fas fa-sliders-h"></i><span>Blog</span></a>
</div>
<!--sidebar start-->

<div class="content">
	<div class="row">
		<div class="col m12">
			<h3>Dashboard</h3>
		</div>
	</div>
				  <div class="row">
			    <div class="col s12 m5">
			      <div class="card">
			        <div class="card-image">
			          <img src="gambar/joki.jpg">
                    </div>
			        <div class="card-content" style="color:black">
			          <p>Joki Rank ML 100% Aman</p>
			        </div>
			        <div class="card-action">
			          <a href="#" class="btn pink lighten-2">Details</a>
			        </div>
			      </div>
			    </div>
                 <div class="col s12 m5">
                  <div class="card">
                    <div class="card-image">
                      <img src="gambar/dm.jpg">
                    </div>
                    <div class="card-content" style="color:black">
                      <p>TOP UP DIAMOND MURAH 100% Aman</p>
                    </div>
                    <div class="card-action">
                      <a href="#" class="btn pink lighten-2">Details</a>
                    </div>
                  </div>
                </div>
			  <div class="row">
		<div class="col m12">
				<h3>Statistik</h3>
			</div>
		</div>
			  <div class="row">
			  	<div class="col m12">
			  			<div class="owl-carousel owl-theme">
						    <div class="item boxclass">
						    	<span>
						    		<strong>Data Pemesanan Joki</strong>
						    	</span>
						    	<canvas id="myChart" width="400" height="300">
						    	</canvas>
						    	<div class="actioncard">
						    		
				<button class="waves-effect waves-light btn btnkanan">DETAILS</button>
						    	</div>
							</div>
							  <div class="item boxclass">
						    	<span>
						    		<strong>Data penjualan Diamond</strong>
						    	</span>
						    	<canvas id="radarchart" width="400" height="300">
						    	</canvas>
						</div>	

			  	</div>
			  </div>
	
<!-- end content -->
</div>
<div class="kanan">
<div class="header"></div>
<div class="row">
<div class="column">
	
</div>






</div>
</div>
</body>
<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:1,
    center: true,
    items:2,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
	var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['jan', 'feb', 'mar', 'apr', 'mei', 'juni'],
        datasets: [{
            label: '# Per Orang',
            data: [9, 11, 12, 8, 12, 15],
            backgroundColor: [
                'rgba(138, 233, 214, 0,2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
// radarchart
	var ctx = document.getElementById('radarchart');
var rdr = new Chart(ctx, {
       type: 'radar',
    data: {
        labels: ['jan', 'feb', 'mar', 'apr', 'mei', 'juni'],
        datasets: [{
            label: '# x10 Diamond',
            data: [12, 19, 3, 5, 2, 3],
            data: [400, 420, 323, 430, 300,490],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

</script>
</html>

