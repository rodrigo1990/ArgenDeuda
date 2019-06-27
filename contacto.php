<?php include("inc/head.php") ?>
</head>
<?php include("inc/header.php") ?>

	<div class="container-fluid img-section-cont">	
		<div class="row img-section margin-to-header padding-bottom">
			<div>

			<img src="img/img-seccion-contacto.jpg" alt="">
			</div>
		</div>
	</div>
<section id="contacto">



	<div class="container ">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  ">
			<h2 class="text-center">COMPLETÁ TUS DATOS</h2>
			<p class="text-center"> <b>PARA MÁS INFORMACIÓN SOBRE TU CUENTA ARGENPAGOS</b></p>
			<form action="">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for="nombre">Nombre y Apellido</label>
						<input autocomplete="off" type="text" class="form-control" name="nombre" id="nombre" placeholder="Ej: Juan Rodriguez">
						<div class="error" id="nombre-error">Ingrese un nombre</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for="dni">DNI(sin puntos)</label>
						<input autocomplete="off" type="text" class="form-control" name="dni" id="dni" placeholder="Ej: 33952768">
						<div class="error" id="dni-error">Ingrese un documento valido</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for="contacto">¿Cómo desea ser contactado?</label>
                        <select name="contacto" id="contacto-input" class="form-control">
                            <option value="0">Escoja un medio</option>
                            <option value="SMS">SMS</option>
                            <option value="LLamada">LLamada</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Mail">Mail</option>
                        </select>
						<!--  <input autocomplete="off" type="text" class="form-control" name="contacto" id="contacto-input" placeholder="Ej: Mail">-->
						<div class="error" id="contacto-error">Ingrese una fuente de contacto</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for="email">Mail</label>
						<input autocomplete="off" type="text" class="form-control" name="email" id="email" placeholder="Ej:juanr@gmail.com">
						<div class="error" id="email-error">Ingrese un email valido</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
						<label for="cod_area">Codigo de area</label>
						<select placeholder="Ej:11" name="cod_area" id="cod_area" class="form-control">
                             <option>Código de area</option>
								 <option>11</option>
                <option>220</option>
                <option>221</option>
                <option>223</option>
                <option>230</option>
                <option>236</option>
                <option>237</option>
                <option>249</option>
                <option>260</option>
                <option>261</option>
                <option>263</option>
                <option>264</option>
                <option>266</option>
                <option>280</option>
                <option>291</option>
                <option>294</option>
                <option>297</option>
                <option>298</option>
                <option>299</option>
                <option>336</option>
                <option>341</option>
                <option>342</option>
                <option>343</option>
                <option>345</option>
                <option>348</option>
                <option>351</option>
                <option>353</option>
                <option>358</option>
                <option>362</option>
                <option>364</option>
                <option>370</option>
                <option>376</option>
                <option>379</option>
                <option>380</option>
                <option>381</option>
                <option>383</option>
                <option>385</option>
                <option>387</option>
                <option>388</option>
                <option>2202</option>
                <option>2221</option>
                <option>2223</option>
                <option>2224</option>
                <option>2225</option>
                <option>2226</option>
                <option>2227</option>
                <option>2229</option>
                <option>2241</option>
                <option>2242</option>
                <option>2243</option>
                <option>2244</option>
                <option>2245</option>
                <option>2246</option>
                <option>2252</option>
                <option>2254</option>
                <option>2255</option>
                <option>2257</option>
                <option>2261</option>
                <option>2262</option>
                <option>2264</option>
                <option>2265</option>
                <option>2266</option>
                <option>2267</option>
                <option>2268</option>
                <option>2271</option>
                <option>2272</option>
                <option>2273</option>
                <option>2274</option>
                <option>2281</option>
                <option>2283</option>
                <option>2284</option>
                <option>2285</option>
                <option>2286</option>
                <option>2291</option>
                <option>2292</option>
                <option>2296</option>
                <option>2297</option>
                <option>2302</option>
                <option>2314</option>
                <option>2316</option>
                <option>2317</option>
                <option>2320</option>
                <option>2323</option>
                <option>2324</option>
                <option>2325</option>
                <option>2326</option>
                <option>2331</option>
                <option>2333</option>
                <option>2334</option>
                <option>2335</option>
                <option>2336</option>
                <option>2337</option>
                <option>2338</option>
                <option>2342</option>
                <option>2343</option>
                <option>2344</option>
                <option>2345</option>
                <option>2346</option>
                <option>2352</option>
                <option>2353</option>
                <option>2354</option>
                <option>2355</option>
                <option>2356</option>
                <option>2357</option>
                <option>2358</option>
                <option>2392</option>
                <option>2393</option>
                <option>2394</option>
                <option>2395</option>
                <option>2396</option>
                <option>2473</option>
                <option>2474</option>
                <option>2475</option>
                <option>2477</option>
                <option>2478</option>
                <option>2622</option>
                <option>2624</option>
                <option>2625</option>
                <option>2626</option>
                <option>2646</option>
                <option>2647</option>
                <option>2648</option>
                <option>2651</option>
                <option>2652</option>
                <option>2655</option>
                <option>2656</option>
                <option>2657</option>
                <option>2658</option>
                <option>2901</option>
                <option>2902</option>
                <option>2903</option>
                <option>2920</option>
                <option>2921</option>
                <option>2922</option>
                <option>2923</option>
                <option>2924</option>
                <option>2925</option>
                <option>2926</option>
                <option>2927</option>
                <option>2928</option>
                <option>2929</option>
                <option>2931</option>
                <option>2932</option>
                <option>2933</option>
                <option>2934</option>
                <option>2935</option>
                <option>2936</option>
                <option>2940</option>
                <option>2942</option>
                <option>2945</option>
                <option>2946</option>
                <option>2948</option>
                <option>2952</option>
                <option>2953</option>
                <option>2954</option>
                <option>2962</option>
                <option>2963</option>
                <option>2964</option>
                <option>2966</option>
                <option>2972</option>
                <option>2982</option>
                <option>2983</option>
                <option>3327</option>
                <option>3329</option>
                <option>3382</option>
                <option>3385</option>
                <option>3387</option>
                <option>3388</option>
                <option>3400</option>
                <option>3401</option>
                <option>3402</option>
                <option>3404</option>
                <option>3405</option>
                <option>3406</option>
                <option>3407</option>
                <option>3408</option>
                <option>3409</option>
                <option>3435</option>
                <option>3436</option>
                <option>3437</option>
                <option>3438</option>
                <option>3442</option>
                <option>3444</option>
                <option>3445</option>
                <option>3446</option>
                <option>3447</option>
                <option>3454</option>
                <option>3455</option>
                <option>3456</option>
                <option>3458</option>
                <option>3460</option>
                <option>3462</option>
                <option>3463</option>
                <option>3464</option>
                <option>3465</option>
                <option>3466</option>
                <option>3467</option>
                <option>3468</option>
                <option>3469</option>
                <option>3471</option>
                <option>3472</option>
                <option>3476</option>
                <option>3482</option>
                <option>3483</option>
                <option>3487</option>
                <option>3489</option>
                <option>3491</option>
                <option>3492</option>
                <option>3493</option>
                <option>3496</option>
                <option>3497</option>
                <option>3498</option>
                <option>3521</option>
                <option>3522</option>
                <option>3524</option>
                <option>3525</option>
                <option>3532</option>
                <option>3533</option>
                <option>3537</option>
                <option>3541</option>
                <option>3542</option>
                <option>3543</option>
                <option>3544</option>
                <option>3546</option>
                <option>3547</option>
                <option>3548</option>
                <option>3549</option>
                <option>3562</option>
                <option>3563</option>
                <option>3564</option>
                <option>3571</option>
                <option>3572</option>
                <option>3573</option>
                <option>3574</option>
                <option>3575</option>
                <option>3576</option>
                <option>3582</option>
                <option>3583</option>
                <option>3584</option>
                <option>3585</option>
                <option>3711</option>
                <option>3715</option>
                <option>3716</option>
                <option>3718</option>
                <option>3721</option>
                <option>3725</option>
                <option>3731</option>
                <option>3734</option>
                <option>3735</option>
                <option>3741</option>
                <option>3743</option>
                <option>3751</option>
                <option>3754</option>
                <option>3755</option>
                <option>3756</option>
                <option>3757</option>
                <option>3758</option>
                <option>3772</option>
                <option>3773</option>
                <option>3774</option>
                <option>3775</option>
                <option>3777</option>
                <option>3781</option>
                <option>3782</option>
                <option>3786</option>
                <option>3821</option>
                <option>3825</option>
                <option>3826</option>
                <option>3827</option>
                <option>3832</option>
                <option>3835</option>
                <option>3837</option>
                <option>3838</option>
                <option>3841</option>
                <option>3843</option>
                <option>3844</option>
                <option>3845</option>
                <option>3846</option>
                <option>3854</option>
                <option>3855</option>
                <option>3856</option>
                <option>3857</option>
                <option>3858</option>
                <option>3861</option>
                <option>3862</option>
                <option>3863</option>
                <option>3865</option>
                <option>3867</option>
                <option>3868</option>
                <option>3869</option>
                <option>3873</option>
                <option>3876</option>
                <option>3877</option>
                <option>3878</option>
                <option>3885</option>
                <option>3886</option>
                <option>3887</option>
                <option>3888</option>
                <option>3891</option>
                <option>3892</option>
                <option>3894</option>
						</select>

					</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<label for="celular">Teléfono celular</label>
					<input autocomplete="off" type="text" class="form-control" name="celular" autocomplete="off" id="celular" placeholder="Ej: 46583925">
					<div class="error" id="celular-error">Ingrese un numero valido</div>
				</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<label for="mensaje">Motivo de consulta</label>
						<textarea  cols="30" rows="10" name="mensaje" id="mensaje" class="form-control" placeholder= ""></textarea>
						<div class="error" id="mensaje-error">Ingrese un motivo de consulta</div>
					</div>
				</div>
				<div class="btn-cont">
				<a class="btn"  onClick="enviarMail();">ENVIAR</a>
			</div>
			</form>
			
		</div>
		

		


	</div>

</section>

 <div class="modal" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body" style="">
        <h1 style="color:#6EC39A">¡Hemos recibido tu mensaje !</h1>
        <h2>¡Muchas Gracias!</h2>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn" data-dismiss="modal" style="height: 62px;font-size: 3rem;margin-left:auto;margin-right: auto;display:block;">Ok!</a>
      </div>
    </div>
  </div>
</div>




<?php include("inc/contacto.php") ?>
<?php include("inc/footer.php") ?>
<?php include("inc/scripts.php")?>
<script>



	var emailValido=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  	var soloNumeros=/^[0-9]*$/;

	var nombreEstaValidado=false;
  	var dniEstaValidado=false;
  	var contactoEstaValidado=false;
  	var emailEstaValidado=false;
  	var codAreaEstaValidado=false;
  	var celularEstaValidado=false;
  	var mensajeEstaValidado=false;

	

     $("#nombre").keyup(function(){

        var nombre = $("#nombre").val();

        
	  	if(nombre.length==0){

	  		$("#nombre-error").fadeIn();
	  		nombreEstaValidado=false; 

	  	}else{
			$("#nombre-error").fadeOut(); 
			nombreEstaValidado=true; 		
	  	} 

    });

     $("#dni").keyup(function(){

        var dni = $("#dni").val();



        if(dni.length<7 || dni.length>8 || dni.search(soloNumeros)){

	  		$("#dni-error").fadeIn();
	  		dniEstaValidado=false; 

	  	}else{
			$("#dni-error").fadeOut(); 
			dniEstaValidado=true; 		
	  	} 

    });

     $("#contacto-input").change(function(){

        var contacto = $("#contacto-input option:selected").val();

        if(contacto==0){

  		$("#contacto-error").fadeIn();
  			contactoEstaValidado=false; 

	  	}else{
			$("#contacto-error").fadeOut(); 
			contactoEstaValidado=true; 	

	  	} 

    });

  	


  	



     $("#email").keyup(function(){

     	var email = $("#email").val();

        if(email.length==0||email.search(emailValido)){


	  		$("#email-error").fadeIn();
	  		emailEstaValidado=false;

	  	}else{
			$("#email-error").fadeOut();  	
			emailEstaValidado=true;	
	  	}

	    });



     $("#cod_area").change(function(){

        var celular = $("#celular").val();
        var codAreaLenght = $("#cod_area option:selected").val();

        var position = celular.indexOf("15");

        if(position==0){

                var newStr="";

                newStr = celular.replace("15","");

                $("#celular").val(newStr);
        }
       
        var maxChars = 10-codAreaLenght.length;
        if ($("#celular").val().length > maxChars) {
            $("#celular").val($("#celular").val().substr(0, maxChars));
            
            var celular=$("#celular").val();
        }

         if(celular.length!=maxChars||celular.search(soloNumeros)){

            $("#celular-error").fadeIn();
  		celularEstaValidado=false;

        }else{

            
            $("#celular-error").fadeOut();
			celularEstaValidado=true;

        }


    });

     $("#celular").keyup(function(){

        var celular = $("#celular").val();

        var codAreaLenght = $("#cod_area option:selected").val();

        var position = celular.indexOf("15");

        if(position==0){

                var newStr="";

                newStr = celular.replace("15","");

                $("#celular").val(newStr);
        }
       
        var maxChars = 10-codAreaLenght.length;


        if ($(this).val().length > maxChars) {

                $(this).val($(this).val().substr(0, maxChars));
                
                var celular=$(this).val();
        }

        if(celular.length!=maxChars||celular.search(soloNumeros)){

            $("#celular-error").fadeIn();
  		        celularEstaValidado=false;
                console.log(celularEstaValidado);

         }else{

            $("#celular-error").fadeOut();
			celularEstaValidado=true;
            console.log(celularEstaValidado);

        }

    });


  	
     $("#mensaje").keyup(function(){

     	var mensaje = $("#mensaje").val();

        if(mensaje.length==0){

  		$("#mensaje-error").fadeIn();
  		mensajeEstaValidado=false;

  	}else{

		$("#mensaje-error").fadeOut();
		mensajeEstaValidado=true;

  	}

    });
  	

  
	function enviarMail(){


        var nombre = $("#nombre").val();
var dni = $("#dni").val();
var contacto = $("#contacto-input").val();
var email = $("#email").val();
var celular = $("#celular").val();
var cod_area = $("#cod_area option:selected").val();
var mensaje = $("#mensaje").val();
 




	if(nombreEstaValidado==false){
		$("#nombre-error").fadeIn();
	  		nombreEstaValidado=false; 
	}
  	if (dniEstaValidado==false){
  		$("#dni-error").fadeIn();
	  		dniEstaValidado=false; 
  	}
  	if (contactoEstaValidado==false){
  		$("#contacto-error").fadeIn();
  			contactoEstaValidado=false;
  	}
  	if (emailEstaValidado==false){
  		$("#email-error").fadeIn();
	  		emailEstaValidado=false;
  	}
 
  	if (celularEstaValidado==false){
  		$("#celular-error").fadeIn();
  		celularEstaValidado=false;
  	}
  	if (mensajeEstaValidado==false){

  		$("#mensaje-error").fadeIn();
  		mensajeEstaValidado=false;
  	}




	  	if(nombreEstaValidado==true&&dniEstaValidado==true&&contactoEstaValidado==true&&emailEstaValidado==true&&celularEstaValidado==true&&mensajeEstaValidado==true){


				$( "body" ).prepend( '<div id="preloader"><div class="spinner-sm spinner-sm-1" id="status"> </div></div>' );

				$.ajax({
		    			data:{nombre:nombre,dni:dni,contacto:contacto,email:email,cod_area:cod_area,celular:celular,mensaje:mensaje},
		    			
		    			url:'ajax/enviarMail.php',
		    
		    			type:'POST',
		    
		    			success:function(response){
						 	$("#preloader").fadeOut();
		                 	$('#myModal').modal('show')
		    
		    			}
		    	});
	    }
	}
	
</script>

</body>
</html>