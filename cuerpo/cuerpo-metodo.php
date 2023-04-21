<div class="bg-color-sky-light" data-auto-height="true">
<div class="content-lg container">
    <div class="row row-space-1">
        <div class="col-sm-12">
            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                        <center><img class="logo-img logo-img-main" src="img/php.png" alt="Asentus Logo">

                        <center><h3>Metodo $_GET</h3>
                                <p align="justify" style="color:#808080">
                                    En el método GET, los datos se envían como parámetros de URL que generalmente
                                    son cadenas de pares de nombre y valor separados por ampersands ( &). En general,
                                    una URL con datos GET se verá así: http://www.example.com/action.php? nombre = juan 
                                    y edad = 24 .Las partes en negrita en la URL son los parámetros GET y las partes
                                    en cursiva son el valor de esos parámetros. Se parameter=valuepuede incrustar más
                                    de uno en la URL concatenando con símbolos de unión ( &). Solo se pueden enviar 
                                    datos de texto simples a través del método GET.PHP proporciona la variable 
                                    superglobal $_GETpara acceder a toda la información enviada a través de la 
                                    URL o enviada a través de un formulario HTML utilizando el method="get".
                                    Dado que los datos enviados por el método GET se muestran en la URL, es
                                    posible marcar la página con valores de cadena de consulta específicos.
                                    El método GET no es adecuado para pasar información confidencial, como 
                                    el nombre de usuario y la contraseña, ya que estos son completamente 
                                    visibles en la cadena de consulta de URL y potencialmente almacenados en la
                                    memoria del navegador del cliente como una página visitada.Debido a que el
                                    método GET asigna datos a una variable de entorno del servidor, la longitud 
                                    de la URL es limitada. Por lo tanto, hay una limitación para el total de 
                                    datos que se enviarán.
                                    
                                    .</p> 
                                     <br><br>
                                    <center><h3>Sintaxis Metodo GET</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/get2.png" alt="Asentus Logo">



                                    <script> 
                                   function ventanaSecundaria (URL)
                                    { 
                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                    } 
                         </script>
                                <center>
                        <a href="javascript:ventanaSecundaria('paginas/get-uno.php')">
                        <br><button style="text-color:#808080">
                                    <h5>Ejercicio GET</h5>
                            </button>
                        </a>
                                   <br><br><br>
                                        <center><h3>Metodo $_POST</h3>
                                <p align="justify" style="color:#808080">
                                Metodo POST en lenguaje PHP. La información de las transferencias método POST
                                a través de los encabezados HTTP. La información se codifica como se describe 
                                en el caso del método GET y poner en una cabecera llamada QUERY_STRING.Los datos
                                enviados por el método POST pasa por la cabecera HTTP lo que la seguridad depende 
                                de protocolo HTTP. Mediante el uso de HTTP seguro que usted puede asegurarse de 
                                que su información está segura.  El PHP provee $ _POST matriz asociativa y accede 
                                a toda la información enviada por el método POST. Pruebe siguiente ejemplo poniendo
                                 el código fuente en test.php guion.
                                    
                                    .</p> 
                                     <br><br>
                                    <center><h3>Sintaxis Metodo POST</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/post2.png" alt="Asentus Logo">




                                    <script> 
                                   function ventanaSecundaria (URL)
                                    { 
                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                    } 
                         </script>
                                <center>
                        <a href="javascript:ventanaSecundaria('paginas/post-uno.php')">
                        <br><button style="text-color:#808080">
                                    <h5>Ejercicio POST</h5>
                            </button>
                        </a>

                         
                </div>
            <br>
        </div>
    </div>      
</div>
</div>