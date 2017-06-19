@include('header')
<div class="login newsection">
    <div class="container"> 
        <div class="row vc_custom_1468490078711">
            <div class="col-sm-8 col-md-8 col-md-offset-2 col-sm-offset-2">
                <div class="page-title-checkout"><h3>REGÍSTRATE </h3></div>
                <div class="form-checkout">
                    <form method="post" action="{{ url('/auth/registerProcess') }}">
	                    <input type="hidden" name="url" value="user/register" />
	                    <input type="hidden" name="" value="" />
	                    <input type="hidden" name="signature" value=""  />
	                    <input type="hidden" name="api_key" value="" />
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <input type="hidden" name="role" value="1">
                        <div class="row">
                            <div class="col-sm-6"> 
                                <div class="form-group">
                                    <h5 class="text-ellipsis underline">Sr. / Sra. / Srta.</h5>
                                    <select class="form-control" name="genero_description">
                                        <option value="Sr.">Sr.</option>
                                        <option value="Sra.">Sra.</option>
                                        <option value="Srta.">Srta.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
	                            <div class="form-group">
	                                <h5 class="text-ellipsis underline">DNI</h5>
	                                <input type="text" class="form-control" placeholder="DNI" name="dni" maxlength="8" value="" >
                                    <span class="error"></span>
	                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <h5 class="text-ellipsis underline">Nombres</h5>
                                    <input type="text" class="form-control" placeholder="Nombres" name="firstname" value="" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <h5 class="text-ellipsis underline">Apellidos</h5>
                                    <input type="text" class="form-control" placeholder="Apellidos" name="lastname" value="" >
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                            	<div class="form-group">
                                    <h5 class="text-ellipsis underline">Celular</h5>
                                    <input type="text" class="form-control" placeholder="Celular" name="phone_number" value=""  maxlength="9">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <h5 class="text-ellipsis underline">Email</h5>
                                    <input type="text" class="form-control" placeholder="Email" name="email" value="" >
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <h5 class="text-ellipsis underline">Contraseña</h5>
                                    <input type="password" class="form-control" placeholder="Contraseña" name="password" value="" >
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <h5 class="text-ellipsis underline">Repetir Contraseña</h5>
                                    <input type="password" class="form-control" placeholder="Repetir Contraseña" name="repassword" value="" >
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <h5 class="text-ellipsis underline"><span class="error"></span></h5>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn-primary btn pull-right" type="submit">REGISTRATE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div> 
@include('footer')