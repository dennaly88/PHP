<div class="bg-color-sky-light" data-auto-height="true">
<div class="content-lg container">
    <div class="row row-space-1">
        <div class="col-sm-12">
            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                        <center><img class="logo-img logo-img-main" src="img/php.png" alt="Asentus Logo">
                        <center><h3>Ciclos</h3>
                                <p align="justify" style="color:#808080">
                                
                                Los bucles en PHP son útiles cuando desea ejecutar un fragmento de 
                                código repetidamente hasta que una condición se evalúe como falsa. 
                                Por lo tanto, el código se ejecuta repetidamente siempre que una 
                                condición se evalúe como verdadera y, tan pronto como la condición 
                                se evalúe como falsa, la secuencia de comandos continúa ejecutando 
                                el código después del bucle.
                                
                                
                                <h3>PHP soporta varias estructuras de control diferentes</h3>
                                <br><br>
                                     <u><strong>while:</strong></u> <br>
                                     <u><strong>do-while:</strong></u> <br>
                                     <u><strong>for:</strong></u> <br>
                                     <u><strong>foreach:</strong></u> <br>
                                </p>  
                                
                                
                                <br><br>
                                    <center><h3>Bucle While</h3>


                                    <p align="justify" style="color:#808080">
                                   
                                    El bucle while se usa cuando se desea ejecutar un fragmento 
                                    de código repetidamente hasta que la condición while se evalúa
                                     como falsa.Los bucles while son el tipo más sencillo de bucle en PHP. Se comportan igual que su contrapartida en C. La forma básica de una sentencia while es:
                                        <strong>
                                      <br>  while (expr) {
                                      <br>      sentencia}</strong>
                                      <br>  El significado de una sentencia while es simple. Le dice a PHP
                                            que ejecute las sentencias anidadas, tanto como la expresión 
                                            while se evalúe como true. El valor de la expresión es verificado
                                             cada vez al inicio del bucle, por lo que incluso si este valor 
                                             cambia durante la ejecución de las sentencias anidadas, la 
                                             ejecución no se detendrá hasta el final de la iteración 
                                             (cada vez que PHP ejecuta las sentencias contenidas en el bucle
                                              es una iteración). A veces, si la expresión while se evalúa 
                                              como false desde el principio, las sentencias anidadas no se 
                                              ejecutarán ni siquiera una vez.
                                     
                                     <br><br>
                                    
                                </p> 


                                    <center><img class="logo-img logo-img-main" src="codigo/while.png" alt="Asentus Logo">
                                        <script> 
                                                function ventanaSecundaria (URL)
                                                    { 
                                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                                    } 
                                        </script>
                                                <center>
                                        <a href="javascript:ventanaSecundaria('paginas/while.php')">
                                        <br><button style="text-color:#808080">
                                                    <h5>Bucle While</h5>
                                            </button>
                                        </a>

                                        <br><br>
                                    <center><h3>Bucle Do-While</h3>

                                    <p align="justify" style="color:#808080">
                                    El bucle do-while es muy similar al bucle while, con la única diferencia
                                     de que la condición while se verifica al final de la primera iteración. 
                                     Por lo tanto, podemos garantizar que el código de bucle se ejecute al 
                                     menos una vez, independientemente del resultado de la expresión while.
                                  
                                     <br> <strong>do
                                     <br>  {
                                     <br>  } while (expression);</strong>
                                    
                                    <br><br>
                                   
                               </p> 

                                    <center><img class="logo-img logo-img-main" src="codigo/do-while.png" alt="Asentus Logo">
                                        <script> 
                                                function ventanaSecundaria (URL)
                                                    { 
                                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                                    } 
                                        </script>
                                                <center>
                                        <a href="javascript:ventanaSecundaria('paginas/do-while.php')">
                                        <br><button style="text-color:#808080">
                                                    <h5>Bucle Do-While</h5>
                                            </button>
                                        </a>




                                        <br><br>
                                    <center><h3>Blucle For</h3>
                                    <p align="justify" style="color:#808080">
                                           Generalmente, el bucle for se usa para ejecutar un fragmento de código por un 
                                           número específico de veces. En otras palabras, si ya conoce la cantidad de veces
                                           que desea ejecutar un bloque de código, es el bucle for que es la mejor opción.
                                  
                                     <br> <strong>for (expr1; expr2; expr3)
                                     <br>  {
                                     <br>  } </strong>
                                    
                                    <br><br>
                                   
                               </p> 

                                    <center><img class="logo-img logo-img-main" src="codigo/for.png" alt="Asentus Logo">
                                        <script> 
                                                function ventanaSecundaria (URL)
                                                    { 
                                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                                    } 
                                        </script>
                                                <center>
                                        <a href="javascript:ventanaSecundaria('paginas/for.php')">
                                        <br><button style="text-color:#808080">
                                                    <h5>Blucle For</h5>
                                            </button>
                                        </a>

                                        <br><br>
                                    <center><h3>Blucle For Each</h3>
                                    <p align="justify" style="color:#808080">
                                    El bucle foreach se utiliza para iterar sobre variables de matriz. 
                                    Si tiene una variable de matriz y desea recorrer cada elemento de esa matriz, 
                                    el bucle foreach es la mejor opción.
                                  
                                     <br> <strong>foreach ($array as $value) {
                                     <br>  code to be executed;
                                     <br>  } </strong>
                                    
                                    <br><br>
                                   
                               </p> 

                               <center><img class="logo-img logo-img-main" src="codigo/foreach.png" alt="Asentus Logo">
                                        <script> 
                                                function ventanaSecundaria (URL)
                                                    { 
                                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                                    } 
                                        </script>
                                                <center>
                                        <a href="javascript:ventanaSecundaria('paginas/foreach.php')">
                                        <br><button style="text-color:#808080">
                                                    <h5>Blucle For Each</h5>
                                            </button>
                                        </a>








                </div>
            <br>
        </div>
    </div>      
</div>
</div>