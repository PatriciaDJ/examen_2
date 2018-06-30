<html>
    <head>
         <title>Examen</title>
        
    </head>
    <body>
        <form ACTION= 'subir.php' METHOD = "POST"
              
            ENCTYPE= 'multipart/form-data'>
             
            <!--CAJAS DE TEXTO!-->
			<LABEL>id_viajero: </LABEL>
			<INPUT TYPE="TEXT" NAME="id_viajero"/> 
            <br>
			<LABEL>nombre_viajero: </LABEL>
			<INPUT TYPE="TEXT" NAME="nombre_viajero"/> 
             <br>
			<LABEL>fecha_viaje: </LABEL>
			<INPUT TYPE="TEXT" NAME="fecha_viaje"/> 
             <br>
			<LABEL>url_boleto_avion: </LABEL>
			
            
            <input TYPE= 'file' NAME='fileToUpload' ID= 'fileToUpload'/>
            <input TYPE= 'submit' value='ENVIAR' NAME= 'submit'/>
                 
        </form>
    </body>
</html>