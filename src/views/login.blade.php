@include('header')
<div class="login newsection">
    <div class="container"> 
        <div class="row vc_custom_1468490078711">
			<div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
			    <div class="page-title-checkout">
			        <h5>INGRESA A TU CUENTA</h5>
			    </div>
			    <div class="form-checkout">
			        <div class="row">
			            <div class="col-md-6">
			                <form method="post" action="{{ url('/auth/loginProcess') }}">
			                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				                <input type="hidden" name="url" value="CUSTOMER"/>
				                <div class="col-sm-12">
                                    <div class="form-group">
                                        <h5 class="text-ellipsis underline">Email</h5>
                                        <input type="text" class="form-control" placeholder="Email" name="email" value="" > 
                                        @if ($errors->has('email'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif 
                                        <span class="error"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <h5 class="text-ellipsis underline">Contraseña</h5>
                                        <input type="password" class="form-control" placeholder="Contraseña" name="password" >
                                        @if ($errors->has('password'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
                                    </div>
                                </div>
			                    <div class="row">
			                        <div class="col-md-12 col-sm-12 col-xs-12">
			                            <button class="btn-primary btn pull-right">INICIAR SESIÓN</button>
			                            <small class="login">
			                                <a href="//lindi.local/user/forgotPassword"> ¿Olvidaste tu contraseña? </a>
			                            </small>
			                        </div>
			                    </div>
			                    @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
			                </form>
			            </div>
			            <div class="col-md-6 margin-top-20 text-center">
			                <a href="//lindi.local/user/register"><button class="btn-primary btn checkout-button col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-6 col-xs-8">REGISTRATE AQUÍ</button></a><br>
			                <p class="medium checkout-button col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-10">Si aún no tienes cuenta </p>
			            </div>
		        	</div>
	    		</div>
			</div>
		</div>
	</div>  
</div> 
@include('footer')