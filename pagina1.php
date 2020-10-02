<! DOCTYPE html >
< html  lang = " en " >
< cabeza >
    < meta  charset = " UTF-8 " >
    < meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
    < título > ejercicio2 </ título >
    < Enlace  rel = " hoja de estilo " href =" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css " integridad =" SHA384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP + VmmDGMN5t9UJ0Z " crossorigin =" anónimo " >
</ cabeza >
< cuerpo >

    < encabezado >
    
        < nav  class = " navbar navbar-expand-lg navbar-dark bg-dark " >
            < Una  clase = " barra de navegación de la marca " href =" # " > SuperViernes </ a >
            < button  class = " navbar-toggler " type = " button " data-toggle = " collapse " data-target = " #navbarSupportedContent " aria-controls = " navbarSupportedContent " aria- extended = " false " aria-label = " Alternar navegación " >
                < span  class = " navbar-toggler-icon " > </ span >
            </ botón >

            < div  class = " collapse navbar-collapse " id = " navbarSupportedContent " >
                < ul  class = " navbar-nav mr-auto " >
                < li  class = " nav-item active " >
                    < Una  clase = " nav-link " href =" pagin1.php " > Inicio < lapso de  clase =" SR-only " > (actual) </ envergadura > </ a >
                </ li >
                < li  class = " nav-item " >
                    < Una  clase = " nav-link " href =" # " > Enlace </ a >
                </ li >
                </ ul >
                < form  class = " form-inline my-2 my-lg-0 " >
                < input  class = " form-control mr-sm-2 " type = " search " placeholder = " Search " aria-label = " Search " >
                < button  class = " btn btn-outline-success my-2 my-sm-0 " type = " submit " > Buscar </ button >
                </ formulario >
            </ div >
        </ nav >  
    </ encabezado >
    < principal >

        < div  class = " contenedor " >
            < div  class = " row justify-content-center " >
               < div  class = " col-4 " >


                < form  class = " mt-5 " action = " pagina1.php " method = " POST " >
                    < h4 > CALCULO DE LA COMPRA </ h4 >
                        < div  class = " fila " >
                            < div  class = " col " >
                                < input  type = " text " class = " form-control " placeholder = " Producto1 " name = " producto1 " >
                            </ div >
                            < div  class = " col " >
                                < input  type = " text " class = " form-control " placeholder = " Precio ($) " name = " precio1 " >
                            </ div >
                           
                        </ div >
                        < button  type = " submit " class = " btn btn-primary mt-5 " name = " botonCalcular " > Calcular </ button >
                </ formulario >

                <? php 
                

                    
                    if ( isset ( $ _POST [ "botonCalcular" ])) {

                       

                       $ precioProducto1 = $ _POST [ "precio1" ];
                       $ nombreProducto1 = $ _POST [ "producto1" ];


                       $ costoEnvio = 8000 ;


                       $ total = $ precioProducto1 + $ costoEnvio ;

                       echo ( "El total de la compra es de:" . $ total );
                    }
                
                ?>


               </ div > 
            </ div >
        
        </ div >
     

    </ main >
    < pie de página >
    </ pie de página >
    < Guión  src = " https://code.jquery.com/jquery-3.5.1.slim.min.js " integridad =" SHA384-DfXdz2htPH0lsSSs5nCTpuj / zy4C + OGpamoFVy38MVBnE + IbbVYUew + OrCXaRkfj " crossorigin =" anónimo " > </ guión >
< Guión  src =" https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integridad =" sha384-9 / reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU + 6BZp6G7niu735Sk7lN " crossorigin =" anónimo " > </ script >
< Guión  src = " https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integridad =" SHA384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8 / KUEfYiJOMMV + rV " crossorigin =" anónimo " > </ escritura >   
</ cuerpo >
</ html >