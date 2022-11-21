<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title>Elixr | Rejuvenate Your Life</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- site favicon -->
	<link rel="icon" type="image/png" href="assets/images/logo/elixr-icon.png">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/all.min.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" href="assets/css/lightcase.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <style>
        :root {
            --dark-bg-color : #2C3E50;
            --dark-bg-gradient : linear-gradient(135deg, #2C3E50, #000 75%);
            --dark-bg-gradient-two : linear-gradient(135deg, #434343, #000 75%);
            --primary-color : #E3A80F;
            --text-black : #353535;
            --text-white : #f6f6f6;
            --primary-color-gradient : linear-gradient(135deg, #EDC111, #E3A80F);
        }
    </style>

</head>

<body>

    @yield('content')
    @extends('layout.footer')

	<!-- All Needed JS -->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<!-- <script src="assets/js/all.min.js"></script> -->
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/counterup.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>

	{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga = function () {
			ga.q.push(arguments)
		};
		ga.q = [];
		ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('set', 'anonymizeIp', true);
		ga('set', 'transport', 'beacon');
		ga('send', 'pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async></script>
	<script>
		var form = document.getElementById("my-form");
		var html_content =`
		<div class="modal-content">
            <div class="modal-header p-4" style="flex-direction: column; justify-content: center; display: none;">
              <h5 class="modal-title" id="exampleModalLabel">Email Sent Successfully!</h5>
              <p class="text-white">We have included you in our waiting list, get ready for an epic time, with Elixr.</p>
            </div>
            <div class="modal-body" style = "text-align: center;">
                <div class="row plan">
                    <div class="col-lg-12">
                        <div class="card" style="box-shadow: none; background: transparent;">
                            <div  id="subscribe-form-area" class="card-body">
                                <img src="{{asset("assets/images/Sending emails_Flatline.svg")}}" alt="">
								<h5 class="modal-title" style = "margin-bottom: .5rem; color: var(--primary-color);">Email Sent Successfully!</h5>
              					<p class="text-white">We have included you in our waiting list, get ready for an epic time, with Elixr.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		`;
		async function handleSubmit(event) {
		  event.preventDefault();;
		  var data = new FormData(event.target);
		  fetch(event.target.action, {
			method: form.method,
			body: data,
			headers: {
				'Accept': 'application/json'
			}
		  }).then(response => {
			if (response.ok) {
			  $("#joinWaitList").html(html_content);
			  setTimeout(5000,function(){
				$('#joinWaitListModal').modal('toggle');
			  })
			  form.reset()
			} else {
			  response.json().then(data => {
				if (Object.hasOwn(data, 'errors')) {
					alert(data["errors"].map(error => error["message"]).join(", "));
				} else {
					alert("Oops! There was a problem submitting your form");
				}
			  })
			}
		  }).catch(error => {
			alert("Oops! There was a problem submitting your form");
		  });
		}
		form.addEventListener("submit", handleSubmit)
	</script>
</body>
</html>