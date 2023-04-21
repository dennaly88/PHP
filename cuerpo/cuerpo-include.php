<div class="bg-color-sky-light" data-auto-height="true">
<div class="content-lg container">
    <div class="row row-space-1">
        <div class="col-sm-12">
            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                        <center><img class="logo-img logo-img-main" src="img/php.png" alt="Asentus Logo">
                        <center><h3>Include</h3>
                                <p align="justify" style="color:#808080">
                                            La sentencia include, o require, es extremadamente usada y resulta
                                            de mucha utilidad. Existen multitud de casos de uso pero generalmente
                                            se basa siempre en la posibilidad de reutilizar código que ya está 
                                            escrito en otro lugar.Por ejemplo, imagina el código de una página 
                                            web que conecta con una base de datos. Generalmente, el bloque de 
                                            conexión con la base de datos será siempre igual, por lo que es 
                                            una buena idea separarlo a un archivo independiente. Gracias a ello, 
                                            en vez de escribir el mismo código de conexión con la base de datos 
                                            una y otra vez en todas las páginas del sitio, podemos escribirlo 
                                            una única vez en un archivo, que luego incluiremos todas las veces 
                                            que haga falta, en todas las páginas que conecten con la base de datos.
                                            <br><br>
                              </p>  
                                <center><img class="logo-img logo-img-main" src="codigo/include.png" alt="Asentus Logo">
                         <script> 
                                   function ventanaSecundaria (URL)
                                    { 
                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                    } 
                         </script>
                                <center>
                        <a href="javascript:ventanaSecundaria('paginas/variables.php')">
                        <br>
                        </a>
                        <br><br>
                        <center><h3>Require</h3>
                           <br><br>
                               <p align="justify" style="color:#808080">
                                        Require es idéntico a include excepto que en caso de fallo producirá 
                                        un error fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene
                                        el script mientras que include sólo emitirá una advertencia (E_WARNING) 
                                        lo cual permite continuar el script.
                                                   <br><br>
                                        <center><img class="logo-img logo-img-main" src="codigo/require.png" alt="Asentus Logo">
                                </p>  
                            </div>
                        <br><br>
                        <center><h3>Include_Once</h3>
                        <br><br>
                        <p align="justify" style="color:#808080">
                                        La sentencia include_once incluye y evalúa el fichero especificado durante
                                        la ejecución del script. Es un comportamiento similar al de la sentencia include,
                                        siendo la única diferencia que si el código del fichero ya ha sido incluido, no se
                                        volverá a incluir. Como su nombre lo indica, será incluido sólo una vez.include_once
                                        puede ser usado en casos donde el mismo fichero podría ser incluido y evaluado más de
                                        una vez durante una ejecución particular de un script, así que en este caso, puede ayudar
                                        a evitar problemas como la redefinición de funciones, reasignación de valores de variables.
                                                   <br><br>
                                       
                                </p>  
                                <br><br>
                                <center><img class="logo-img logo-img-main" src="codigo/include_once.png" alt="Asentus Logo">
                                <br><br>


                                <center><h3>
                                Require_Once
                                </h3>
                        <br><br>
                        <p align="justify" style="color:#808080">
                               La función require_once() incluye y evalua el fichero especificado durante la ejecución del 
                               script. Se comporta de manera similar a require(), con la única diferencia que si el código
                               ha sido ya incluido, no se volverá a incluir. Consultar la documentación de la función 
                               require() para obtener más información.require_once() debería de usarse en casos en los que
                               un mismo fichero puede ser incluido y evaluado más de una vez durante la ejecución de un script
                               , y se quiere estar seguro que se incluye una sola vez para evitar problemas con redefiniciones
                                de funciones, valores de funciones, etc.
                                                   <br><br>
                                       
                                </p>  
                                <br><br>
                                <center><img class="logo-img logo-img-main" src="codigo/require_once.png" alt="Asentus Logo">
                                <br><br>







        </div>
    </div>      
</div>
</div>