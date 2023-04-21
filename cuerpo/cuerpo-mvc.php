<div class="bg-color-sky-light" data-auto-height="true">
<div class="content-lg container">
    <div class="row row-space-1">
        <div class="col-sm-12">
            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                        <center><img class="logo-img logo-img-main" src="img/php.png" alt="Asentus Logo">
                        <center><h3>MVC</h3>
                                <p align="justify" style="color:#808080">
                                 
                                MVC (Modelo-Vista-Controlador) es un patrón en el diseño de software
                                comúnmente utilizado para implementar interfaces de usuario, datos y
                                lógica de control. Enfatiza una separación entre la lógica de negocios
                                y su visualización. Esta "separación de preocupaciones" proporciona una
                                mejor división del trabajo y una mejora de mantenimiento. Algunos otros
                                patrones de diseño se basan en MVC, como MVVM (Modelo-Vista-modelo de vista),
                                MVP (Modelo-Vista-Presentador) y MVW (Modelo-Vista-Whatever).

                                .<br><br>


                                Las tres partes del patrón de diseño de software MVC se pueden describir de la siguiente manera:
                                <br><br>

                                <br><br><strong>Modelo: Maneja datos y lógica de negocios.
                                <br><br>Vista: Se encarga del diseño y presentación.
                                <br><br>Controlador: Enruta comandos a los modelos y vistas.</strong>



                                <br><br><strong>Modelo </strong>
                                         El modelo define qué datos debe contener la aplicación. Si el estado de estos datos cambia, 
                                         el modelo generalmente notificará a la vista (para que la pantalla pueda cambiar según sea 
                                         necesario) y, a veces, el controlador (si se necesita una lógica diferente para controlar la
                                         vista actualizada).Volviendo a nuestra aplicación de lista de compras, el modelo especificará
                                         qué datos deben contener los artículos de la lista (artículo, precio, etc.) y qué artículos de
                                         la lista ya están presentes.

                                         <br><br><strong>Vista</strong>
                                         La vista define cómo se deben mostrar los datos de la aplicación.En nuestra aplicación de lista
                                         de compras, la vista definiría cómo se presenta la lista al usuario y recibiría los datos para 
                                         mostrar desde el modelo.

                                         <br><br><strong>Controlador</strong>
                                         El controlador contiene una lógica que actualiza el modelo y/o vista en respuesta a las entradas 
                                         de los usuarios de la aplicación.Entonces, por ejemplo, nuestra lista de compras podría tener 
                                         formularios de entrada y botones que nos permitan agregar o eliminar artículos. Estas acciones
                                         requieren que se actualice el modelo, por lo que la entrada se envía al controlador, que luego
                                         manipula el modelo según corresponda, que luego envía datos actualizados a la vista.
                                         Sin embargo, es posible que también se desee actualizar la vista para mostrar los datos en un 
                                         formato diferente, por ejemplo, cambiar el orden de los artículos de menor a mayor precio o en 
                                         orden alfabético. En este caso, el controlador podría manejar esto directamente sin necesidad 
                                         de #808080 actualizar el modelo.



                                         <br><br><strong>MVC en la web</strong>
                                         Como desarrollador web, este patrón probablemente será bastante familiar, incluso si nunca 
                                         lo has usado conscientemente antes. Su modelo de datos probablemente esté contenido en algún
                                         tipo de base de datos (ya sea una base de datos tradicional del lado del servidor como MySQL,
                                         o una solución del lado del cliente como IndexedDB). El código de control de su aplicación 
                                         probablemente esté escrito en HTML / JavaScript , y su interfaz de usuario probablemente esté
                                         escrita usando HTML / CSS / o lo que sea. Esto se parece mucho a MVC, pero MVC hace que estos
                                         componentes sigan un patrón más rígido.En los primeros días de la Web, la arquitectura MVC 
                                         se implementó principalmente en el lado del servidor, con el cliente solicitando actualizaciones
                                         a través de formularios o enlaces, y recibiendo vistas actualizadas para mostrar en el navegador. 
                                         Sin embargo, en estos días, mucha de la lógica se enviaba al cliente con la llegada de los almacenes
                                         de datos del lado del cliente, y XMLHttpRequest permitía actualizaciones parciales de la página según
                                         era necesario.Los frameworks de desarrollo web como AngularJS y Ember.js implementan una arquitectura MVC, aunque de maneras ligeramente diferentes.
  
                                </p>  
                                    <center><h3>MVC</h3>
                                    <center><img class="logo-img logo-img-main" src="img/mvc.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>CONEXION</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/conexion-mvc.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>INDEX</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/index-mcv.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>config.php</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/config.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>routers.php</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/routes.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>database.php</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/conexion-mvc.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>Vehiculos.php</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/controllers1.png" alt="Asentus Logo">
                                    <center><img class="logo-img logo-img-main" src="codigo/control2.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>Vista 1</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/vista-1.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>Vista 2</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/vista-2.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>Vista 3</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/vista-3.png" alt="Asentus Logo">
                                    <br><br>
                                    <center><h3>Modelo</h3>
                                    <center><img class="logo-img logo-img-main" src="codigo/modelo.png" alt="Asentus Logo">
                                    
            
                                
                                </div>
            <br>
        </div>
    </div>      
</div>
</div>