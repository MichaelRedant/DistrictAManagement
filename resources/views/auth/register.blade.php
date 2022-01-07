<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Registreer admin pagina District A">
    <meta name="author" content="Michael Redant - Xinu">
    <link rel="icon" href="../images/favicon.ico">

    <title>District A - Registreer Gebruiker </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('backend/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('backend/css/skin_color.css')}}">	

</head>

<body class="hold-transition theme-primary bg-gradient-primary">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<h2 class="text-white">Starten bij de handelsvereniging</h2>
							<p class="text-white-50">Registreer je als gebruiker</p>							
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
							<form method="POST" action="{{ route('register') }}" >
                                @csrf
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
										</div>
										<input id="name" class="form-control pl-15 bg-transparent text-white plc-white" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Naam">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-email"></i></span>
										</div>
										<input id="email" class="form-control pl-15 bg-transparent text-white plc-white" type="email" name="email" :value="old('email')" required placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input id="password" class="form-control pl-15 bg-transparent text-white plc-white" type="password" name="password" required autocomplete="new-password" placeholder="Paswoord">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input id="password_confirmation" class="form-control pl-15 bg-transparent text-white plc-white" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Herhaal Paswoord">
									</div>
								</div>
                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
								  <div class="row">
									<div class="col-12">
									  <div class="checkbox text-white">
										<input type="checkbox" id="terms" name="terms" >
										<label for="terms">Ik aanvaard de <a href="{{route('terms.show')}}" class="text-warning"><b>Voorwaarden</b></a> en de <a href="{{route('policy.show')}}" class="text-warning"><b>Privacy Policy</b></a></label>
									  </div>
									</div>
                                @endif
									<!-- /.col -->
									<div class="col-12 text-center mt-3">
									  <button type="submit" class="btn btn-info btn-rounded margin-top-10">Verzend</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>													

							<div class="text-center">
								<p class="mt-15 mb-0 text-white">Heb je al een account?<a href="{{ route('login') }}" class="text-danger ml-5"> Log in</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{asset('backend/js/vendors.min.js')}}"></script>
    <script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}"></script>	
	
	
</body>
</html>
