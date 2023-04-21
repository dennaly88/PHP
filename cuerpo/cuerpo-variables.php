<div class="bg-color-sky-light" data-auto-height="true">
<div class="content-lg container">
    <div class="row row-space-1">
        <div class="col-sm-12">
            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                        <center><img class="logo-img logo-img-main" src="img/php.png" alt="Asentus Logo">
                        <center><h3>Variables</h3>
                                <p align="justify" style="color:#808080">
                                     Una variable es un contenedor para almacenar un valor o dato. 
                                     En PHP, puedes crear variables para almacenar casi cualquier 
                                     tipo de valor, como números, cadenas de texto, arrays, objetos.
                                     En PHP las variables se representan con un signo de dólar seguido
                                     por el nombre de la variable. El nombre de la variable es sensible
                                     a minúsculas y mayúsculas.Los nombres de variables siguen las mismas
                                     reglas que otras etiquetas en PHP. Un nombre de variable válido tiene
                                     que empezar con una letra o un carácter de subrayado (underscore), 
                                     seguido de cualquier número de letras, números y caracteres de subrayado.
                                     De forma predeterminada, las variables siempre se asignan por valor. 
                                     Esto significa que cuando se asigna una expresión a una variable, 
                                     el valor completo de la expresión original se copia en la variable 
                                     de destino. Esto quiere decir que, por ejemplo, después de asignar 
                                     el valor de una variable a otra, los cambios que se efectúen a una 
                                     de esas variables no afectará a la otra .Cada variable consta del 
                                     símbolo del dólar($), seguido del nombre de la variable. Las variables
                                     se utilizan en los scripts de PHP para integrar datos externos en 
                                     páginas web. En este sentido se puede hablar de valores muy variados 
                                     que van desde números simples y cadenas de caracteres hasta textos 
                                     completos o estructuras de documentos HTML.Cada variable consta del 
                                     símbolo del dólar($), seguido del nombre de la variable. Las variables
                                     se utilizan en los scripts de PHP para integrar datos externos en páginas
                                     web. En este sentido se puede hablar de valores muy variados que van desde
                                      números simples y cadenas de caracteres hasta textos completos o estructuras
                                       de documentos HTML.  

<br><br>
                                     <u><strong>NOTA IMPORTANTE :</strong></u> El nombre de una variable puede contener 
                                     letras, números y el guión bajo ‘_’ , pero no puede comenzar con un número.<br><br>
                                    
                                
                                     <center><h3>Tipos de Variables</h3>

                                     <center><img class="logo-img logo-img-main" src="codigo/tipos.png" alt="Asentus Logo">

                    
                                    </p>  
                                    <center><h3>Ejemplos de nombres de variable válidos</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/variables-validas.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>Ejemplos de nombres de variables no válidos</h3>
                                    <br><br>
                                    <center><img class="logo-img logo-img-main" src="codigo/variables-novalidos.png" alt="Asentus Logo">
                                     <br><br>
                                     <center><img class="logo-img logo-img-main" src="img/php.png" alt="Asentus Logo">
                                    <h3>Constantes</h3>
                                <p align="justify" style="color:#808080">
                                         Una constante es un identificador (nombre) para un valor simple.
                                         Como el nombre sugiere, este valor no puede variar durante la ejecución
                                         del script (a excepción de las constantes mágicas, que en realidad no 
                                         son constantes). Por defecto, una constante distingue mayúsculas y 
                                         minúsculas. Por convención, los identificadores de constantes siempre
                                          se declaran en mayúsculas. .
                                        <br><br>
                                    <center><img class="logo-img logo-img-main" src="codigo/constantes.png" alt="Asentus Logo">
                                
                    
                                    </p>  


                         <script> 
                                   function ventanaSecundaria (URL)
                                    { 
                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                    } 
                         </script>
                                <center>


                                <br><br>
                                     <center><img class="logo-img logo-img-main" src="img/php.png" alt="Asentus Logo">
                                    <h3>Variables Super Globales</h3>
                                <p align="justify" style="color:#808080">
                                              Algunas variables predefinidas en PHP son "superglobales", lo 
                                              que significa que están disponibles en todos los ámbitos a lo
                                              largo del script. No es necesario emplear global $variable; 
                                              para acceder a ellas dentro de las funciones o métodos.Algunas 
                                              variables predefinidas en PHP son "superglobales", lo que significa
                                              que están disponibles en todos los ámbitos a lo largo del script. 
                                              No es necesario emplear global $variable; para acceder a ellas 
                                              dentro de las funciones o métodos.
                                             <br>
                                              <br><strong>Las variables superglobals son:
                                        <br>

                                        <br><strong>$GLOBALS
                                        <br>$_SERVER
                                        <br>$_GET
                                        <br>$_POST
                                        <br>$_FILES
                                        <br>$_COOKIE
                                        <br>$_SESSION
                                        <br>$_REQUEST
                                        <br>$_ENV</strong>

                                        <br><br>


                                        <center> <h3>$GLOBALS</h3>
                                        <center><img class="logo-img logo-img-main" src="codigo/global.png" alt="Asentus Logo">
                                        <script> 
                                            function ventanaSecundaria (URL)
                                                { 
                                                window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                                } 
                                        </script>
                                        <center><a href="javascript:ventanaSecundaria('paginas/global.php')">
                                        <br><button style="text-color:#808080">
                                        <h5>GLOBALS</h5>
                                        </button></a>
                                        <br><br>


                                        <center> <h3>$_SERVER</h3>
                                        <center><img class="logo-img logo-img-main" src="codigo/server.png" alt="Asentus Logo">
                                        <script> 
                                            function ventanaSecundaria (URL)
                                                { 
                                                window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                                } 
                                        </script>
                                        <center><a href="javascript:ventanaSecundaria('paginas/server.php')">
                                        <br><button style="text-color:#808080">
                                        <h5>SERVER</h5>
                                        </button></a>
                                        <br><br>


                                        <center> <h3>$_GET</h3>
                                        <center><img class="logo-img logo-img-main" src="codigo/get.png" alt="Asentus Logo">
                                        <script> 
                                            function ventanaSecundaria (URL)
                                                { 
                                                window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                                } 
                                        </script>
                                        <center><a href="javascript:ventanaSecundaria('paginas/server.php')">
                                        
                                        <br><br>

                                        <center> <h3>$_POST</h3>
                                        <center><img class="logo-img logo-img-main" src="codigo/post.png" alt="Asentus Logo">
                                        <script> 
                                            function ventanaSecundaria (URL)
                                                { 
                                                window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                                } 
                                        </script>
                                        <center><a href="javascript:ventanaSecundaria('paginas/server.php')">
                                        
                                        <br><br>






                                        <center> <h3>$_FILES</h3>
                                        <center><img class="logo-img logo-img-main" src="codigo/file.png" alt="Asentus Logo">
                                       
                                        <br><br>


                                        <center> <h3>$_COOKIE</h3>
                                        <center><img class="logo-img logo-img-main" src="codigo/cookie.png" alt="Asentus Logo">
                                       
                                        <br><br>

                                        <center> <h3>$_SESSION</h3>
                                        <center><img class="logo-img logo-img-main" src="codigo/session.png" alt="Asentus Logo">
                                       
                                        <br><br>

                                        <center> <h3>$_REQUEST</h3>
                                        <center><img class="logo-img logo-img-main" src="codigo/request.png" alt="Asentus Logo">
                                       
                                        <br><br>
                                        <center> <h3>$_ENV</h3>
                                        <center><img class="logo-img logo-img-main" src="codigo/env.png" alt="Asentus Logo">
                                       
                                        <br><br>



                       </p>  
                </div>
            <br>
        </div>
    </div>      
</div>
</div>