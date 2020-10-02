<! DOCTYPE html >
< html  lang = " en " >
< cabeza >
    < meta  charset = " UTF-8 " >
    < meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
    < título > Documento </ título >
    < Enlace  rel = " hoja de estilo " href =" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css " integridad =" SHA384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP + VmmDGMN5t9UJ0Z " crossorigin =" anónimo " >
</ cabeza >
< cuerpo >
    < encabezado >
        < h1 > TABLAS </ h1 >
        < hr >
    </ encabezado >
    < principal >
        < div  class = " contenedor " >
            < div  class = " fila " >
                < div  class = " col-6 " >

                <? php
                    $ usuarios = matriz ( 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 );
                ?>

                < table  class = " table " >
                    < thead >
                        < tr >
                            < th  scope = " col " > #NUMERO </ th >
                        </ tr >
                    </ thead >
                    < tbody >

                        <? php  foreach ( $ usuarios  como  $ valor ): ?>
                        
                            < tr >
                                < th  scope = " row " > <? php  echo ( $ valor ) ?> </ th >
                            </ tr >
                        
                        
                        <? php  endforeach  ?>



                       
                    </ tbody >
                </ tabla >

                </ div >
            </ div >
        </ div >
    </ main >

< Guión  src = " https://code.jquery.com/jquery-3.5.1.slim.min.js " integridad =" SHA384-DfXdz2htPH0lsSSs5nCTpuj / zy4C + OGpamoFVy38MVBnE + IbbVYUew + OrCXaRkfj " crossorigin =" anónimo " > </ guión >
< Guión  src =" https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integridad =" sha384-9 / reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU + 6BZp6G7niu735Sk7lN " crossorigin =" anónimo " > </ script >
< Guión  src = " https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integridad =" SHA384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8 / KUEfYiJOMMV + rV " crossorigin =" anónimo " > </ escritura >   
</ cuerpo >
</ html >