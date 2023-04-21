<div class="bg-color-sky-light" data-auto-height="true">
<div class="content-lg container">
    <div class="row row-space-1">
        <div class="col-sm-12">
            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".6s">
                        <center><img class="logo-img logo-img-main" src="img/php.png" alt="Asentus Logo">
                        <center><h3>POO </h3>
                                <p align="justify" style="color:#808080">
                                        
                                        La programación orientada a objetos (Object Oriented Programming OOP) 
                                        es un modelo de lenguaje de programación organizado por objetos constituidos
                                        por datos y funciones, entre los cuales se pueden crear relaciones como herencia,
                                        cohesión, abstracción, polimorfismo o encapsulamiento. Esto permite que haya 
                                        una gran flexibilidad y se puedan crear objetos que pueden heredarse y 
                                        transmitirse sin necesidad de ser modificados continuamente.
                                        La programación orientada a objetos, comúnmente conocida como POO (o bien OOP, 
                                        por sus siglas en inglés), es una aproximación que te ayuda a desarrollar 
                                        aplicaciones complejas de una manera fácil de mantener y escalar a largo plazo.
                                        En el mundo de la POO, las entidades del mundo real como Person (Persona), Car
                                        (Automóvil) o Animal son tratadas como objetos. En la programación orientada a 
                                        objetos interactúas con tu aplicación a través del uso de objetos. Esto contrasta
                                        con la programación por procedimientos, en la que interactúas principalmente con 
                                        funciones y variables globales.En la POO existe el concepto de "clase" ("class" en
                                        inglés), que se usa para modelar o asignar una entidad del mundo real a una plantilla
                                        de datos (propiedades, o properties) y funcionalidad (métodos, o methods). Un "objeto"
                                        ("object" en inglés) es una instancia de una clase, y puedes crear múltiples instancias
                                        de la misma clase. Por ejemplo, existe una sola clase Person (Persona), pero muchos objetos
                                        de tipo persona pueden ser instancias de esta clase —dan, zainab, hector, etc.La clase define
                                        propiedades. Por ejemplo, para la clase Person podemos tener name (nombre), age (edad) y 
                                        phoneNumber (número telefónico). Entonces cada objeto de tipo persona tendrá sus propios
                                        valores para esas propiedades.También puedes definir métodos en la clase, que te 
                                        permiten manipular los valores de las propiedades de los objetos y llevar a cabo operaciones
                                        en ellos. Como ejemplo, puedes definir un método save (guardar) que almacene la 
                                        información del objeto en una base de datos.    
                                
                                
                                        <br><br>
                                     <u><strong>Clases y objetos</strong></u> 
                                      
                                     Una clase define los datos y la lógica de un objeto. La lógica se divide en 
                                     funciones (métodos) y variables (propiedades).Para definir una propiedad:

                                </p>  
                                <br><br>



                                   
                                    <img class="logo-img logo-img-main" src="codigo/clase.png" alt="Asentus Logo">
                                    <script> 
                                   function ventanaSecundaria (URL)
                                    { 
                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                    } 
                                  </script>
                                
                                .<br><br>



                                <u><strong>Interacciones entre objetos</strong></u> 
                                      
                                Supongamos ahora que queremos comparar y mostrar qué coche es más rápido dependiendo de su potencia. Añadimos un nuevo método a la clase Coche:

                                </p>  
                                <br><br>
                                    <img class="logo-img logo-img-main" src="codigo/Interacciones entre objetos.png" alt="Asentus Logo">
                                    <script> 
                                   function ventanaSecundaria (URL)
                                    { 
                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                    } 
                                  </script>
                                
                                .<br><br>
                                <u><strong> Public, protected y private</strong></u> 
                                      
                                     Anteriormente hemos definido todas las propiedades y métodos como public.
                                     Esto significa que pueden ser accedidos y alterados desde cualquier parte 
                                     fuera de la clase. En el ejemplo anterior hemos podido definir $miCoche->potencia 
                                     sin ningún problema, y podríamos aplicarle cualquier valor (un número, un string...).
                                     Cuando se define una propiedad como private, se indica que ésta no puede verse o modificarse
                                     a no ser que sea desde la propia clase. Si utilizamos $miCoche->potencia para verla o definirla, 
                                     nos dará error. Si queremos definirla, se utiliza un setter, un método public para definir 
                                     una propiedad private:
      
                                      </p>  
                                      <br><br>
                                          <img class="logo-img logo-img-main" src="codigo/Public, protected y private.png" alt="Asentus Logo">
                                          <script> 
                                         function ventanaSecundaria (URL)
                                          { 
                                          window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                          } 
                                        </script>














                                     <u><strong>Constructores</strong></u> 
                                      
                                     Como mencioné, al crear un nuevo objeto se pueden pasar una lista de argumentos. 
                                     Estos argumentos se pasan a un método especial dentro de la clase llamado 
                                     constructor que inicializa varias propiedades.Anteriormente en PHP se creaba 
                                     una constrcutor como en JAVA, creando un método con el mismo nombre de la clase
                                     con sus parámetros.Desde PHP5 se puede emplear el método __construct(). Para indicar
                                     que es un método especial va precedido de 2 barras bajas.Al usar un constructor u
                                     otro método será preciso acceder a las propiedades del objeto. En PHP se emplea $this
                                     para referirnos a la clase. Por ejemplo  usar en esta clase $this sería como usuario.
                                     Voy a emplear el método construct() asignando las propiedades del objeto.

                                 
                                <br>
                                   
                                    <center><img class="logo-img logo-img-main" src="codigo/constructores.png" alt="Asentus Logo">
                                    <script> 
                                   function ventanaSecundaria (URL)
                                    { 
                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                    } 
                                  </script>
                                <center>

                                <br><br>
                                     <u><strong>Destructores</strong></u> 
                                      
                                     En PHP se pueden crear métodos destructores. Se emplean como última referencia a un objeto o cuando
                                     el script llega a su  fin.

                                </p>  
                                <br>
                                   
                                    <center><img class="logo-img logo-img-main" src="codigo/destructores.png" alt="Asentus Logo">
                                    <script> 
                                   function ventanaSecundaria (URL)
                                    { 
                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                    } 
                                  </script>
                                















                                <br><br>
                                     <u><strong>Métodos</strong></u> 
                                      
                                     Para crear métodos en una clase es como crear una función pero, nunca usando las
                                     2 barras bajas ya que eso está reservado para funciones especiales como construct
                                     y destruct.Al crear un método una clase, se pueden acceder a sus propiedades con
                                     el objeto $this. Por ejemplo, devolver el nombre.La función get_nombre() accede a
                                     la propiedad nombre de la clase Usuario. De esta manera cuando se crea un objeto 
                                     con dicha clase, se podrá ver su nombre empleando el método get_nombre().

                                </p>  
                                <br>
                                   
                                    <img class="logo-img logo-img-main" src="codigo/metodos.png" alt="Asentus Logo">
                                    <script> 
                                   function ventanaSecundaria (URL)
                                    { 
                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                    } 
                                  </script>

<br><br>
                                     <u><strong>Métodos estáticos</strong></u> 
                                      
                                     Los métodos estáticos son funciones que no precisan un objeto instanciado para ser
                                     llamadas. Se llamaría directamente a la clase. Para que una función sea estática hay
                                     que usar static en la declaración de la función.A diferencia de un método normal, 
                                     un método estático no puede acceder a las propiedades de la clase/objeto.

                                </p>  
                                <br>
                                   
                                    <img class="logo-img logo-img-main" src="codigo/Métodos estáticos.png" alt="Asentus Logo">
                                    <script> 
                                   function ventanaSecundaria (URL)
                                    { 
                                    window.open(URL,"ventana8","width=500,height=500,scrollbars=NO") 
                                    } 
                                  </script>





                        


</p> 

                </div>
            <br>
        </div>
    </div>      
</div>
</div>