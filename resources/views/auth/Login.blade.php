<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sibombo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:image" content="{{asset('static/images/Logo.png')}}" />
	<!-- Favicon -->
	<link rel="icon" type="img/png" sizes="32x32" href="{{asset('static/images/Logo.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('static/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('static/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('static/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('static/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('static/css/main.css')}}">

</head>
<body>
<?php  
      if (isset($_COOKIE['emailPos'])) {
        $emailSession = base64_decode($_COOKIE['emailPos']);
      } else {
        $emailSession = "";
      }

      if (isset($_COOKIE['passPos'])) {
        $passSession = base64_decode($_COOKIE['passPos']);
      } else {
        $passSession = "";
      }
  	?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('login') }}" method="post">
                @csrf
					<span class="login100-form-title p-b-43">
                    <b>Selamat Datang di SIBOMBO</b>
                    <b>Login Your Account</b>
					</span>

                    <label for="name">Email</label>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" id="email" value="<?= $emailSession; ?>" placeholder="Masukkan Email, Contoh : abc@gmail.com">
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>
					
					<label for="name">Password</label>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password" value="<?= $passSession; ?>" placeholder="Masukkan passsword">
						<span class="focus-input100"></span>
						<span class="label-input100"></span>
					</div>

                    	
					<div style="float: right;">
						<a href="" style="color: #007bff" onclick="clearInputs()">
							<small><b>Clear</b></small>
                            <script>
                            function clearInputs() {
                                document.getElementById('email').value = '';
                                document.getElementById('password').value = '';
                            }
                            </script>
						</a>
					</div><br>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="submit">
							Login
						</button>
					</div>

                    

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2" >
                        Belum Punya Akun? <a href="{{ route('index') }}" target="_blank" >Daftar Disini</a>
						</span>
                        
					</div>
				</form>

				<div class="login100-more" id="background-container">
                <img src="{{asset('static/images/Logo.png')}}" alt="Logo" class="logo">
                <p style="text-align: center; color: white; font-size: 16px; margin-top: 800px;"><Strong>Bengkel Bob Motor</Strong></p>
                <p style="text-align: center; color: white; font-size: 16px; margin-top: 1px;"><i>“Sparepart Terbaik dan Layanan Berkualitas untuk Kepuasan Anda”</i></p>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
            var backgroundContainer = document.getElementById('background-container');
            var images = ['{{asset('static/images/bg1.jpg')}}', '{{asset('static/images/bg2.jpg')}}', '{{asset('static/images/bg3.jpg')}}'];
            var currentIndex = 0;

            function preloadImage(url) {
                return new Promise((resolve, reject) => {
                    var img = new Image();
                    img.onload = function() {
                        resolve(img);
                    };
                    img.onerror = function() {
                        reject(new Error('Failed to load image'));
                    };
                    img.src = url;
                });
            }

            async function changeBackground() {
                try {
                    // Preload gambar selanjutnya
                    var nextImage = await preloadImage(images[(currentIndex + 1) % images.length]);

                    // Mengatur efek fade out
                    backgroundContainer.style.transition = 'opacity 0.5s';
                    backgroundContainer.style.opacity = '0';

                    // Menunggu sebelum mengganti gambar
                    await new Promise(resolve => setTimeout(resolve, 500));

                    // Mengatur gambar latar belakang baru
                    backgroundContainer.style.backgroundImage = 'url(' + nextImage.src + ')';

                    // Mengatur efek fade in
                    backgroundContainer.style.opacity = '1';
                } catch (error) {
                    console.error(error);
                }

                // Memperbarui indeks gambar
                currentIndex = (currentIndex + 1) % images.length;
            }

            // Memulai dengan memuat gambar pertama
            preloadImage(images[currentIndex]).then(() => {
                // Ganti latar belakang setiap 5 detik
                setInterval(changeBackground, 5000);
            });
        });
                </script>
				</div>
			</div>
		</div>
	</div>
	

@if(session('success'))
    <div id="registrationSuccessPopup" class="popup">
        <p>{{ session('success') }}</p>
        <button id="closeButton">Tutup</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('registrationSuccessPopup').style.display = 'block';

            document.getElementById('closeButton').addEventListener('click', function() {
                document.getElementById('registrationSuccessPopup').style.display = 'none';
            });
        });
    </script>
@endif


	
	
	<script src="{{asset('static/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('static/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('static/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('static/js/main.js')}}"></script>

</body>
</html>