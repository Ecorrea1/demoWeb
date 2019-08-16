<?php 
        function guardian($variable) {
            
            $variable   = str_replace("Á","A",$variable);
            $variable   = str_replace("É","E",$variable);
            $variable   = str_replace("Í","I",$variable);
            $variable   = str_replace("Ó","O",$variable);
            $variable   = str_replace("Ú","U",$variable);            
            $variable   = str_replace("Ä","A",$variable);
            $variable   = str_replace("Ë","E",$variable);
            $variable   = str_replace("Ï","I",$variable);
            $variable   = str_replace("Ö","O",$variable);
            $variable   = str_replace("Ü","U",$variable);
            
            $variable   = str_replace("á","a",$variable);
            $variable   = str_replace("é","e",$variable);
            $variable   = str_replace("í","i",$variable);
            $variable   = str_replace("ó","o",$variable);
            $variable   = str_replace("ú","u",$variable);            
            $variable   = str_replace("ä","a",$variable);
            $variable   = str_replace("ë","e",$variable);
            $variable   = str_replace("ï","i",$variable);
            $variable   = str_replace("ö","o",$variable);
            $variable   = str_replace("ü","u",$variable);            
            
            $variable   = str_replace("N°","Nro",$variable);
            $variable   = str_replace("nº","Nro",$variable);            
            $variable   = str_replace("N&ordm;","Nro",$variable);
            $variable   = str_replace("n&ordm;","Nro",$variable);            
            
            $variable   = str_replace("Ñ","N",$variable);
            $variable   = str_replace("ñ","N",$variable);
            
            $variable   = str_replace("#"," ",$variable);
            $variable   = str_replace("'"," ",$variable);
            $variable   = str_replace("*"," ",$variable);
            $variable   = str_replace("{"," ",$variable);
            $variable   = str_replace("}"," ",$variable);
            $variable   = str_replace("^"," ",$variable);
            $variable   = str_replace("<"," ",$variable);
            $variable   = str_replace(">"," ",$variable);            
            
            $variable=strip_tags($variable); // Retira las etiquetas HTML y PHP de un string ej: <br> = vacio
            $variable=mysql_real_escape_string($variable);//Escapa caracteres especiales en una cadena para ser usado en una sentencia SQL
            $variable=htmlentities($variable, ENT_QUOTES);//Todos los caracteres que tienen equivalente HTML son convertidos a esas entidades. ej:<br> = &lt;br&gt;             
            $variable=trim($variable);
            
            //$variable = strtoupper($variable);//pasar a mayuscula
            
            //$variable = strtolower($variable);//pasar a minusculas
                       
            //$variable = ucwords(strtolower($variable));//pasar a mayusculas solo la primera letra de cada palabra
            
            return $variable;         
        }
        
        function conexion(){               
            
            $servidor   = "localhost";//***nombre del servidor
            $bd         = "trepar";//***nombre bd
            $usuario    = "root";//***usuario bd
            $clave      = "";//***clave bd            
            /*
            $servidor="localhost";//***nombre del servidor
            $usuario="root";//***usuario bd
            $clave="";//***clave bd 
            $bd="axioma";//***nombre bd
            */  
            
        	if (!($cnx_bd=mysql_connect($servidor,$usuario,$clave))){
        		//echo "ErrorSql > Conectando a la base de datos.";
        		exit();
        	}        	
            
            if (!(mysql_select_db($bd,$cnx_bd))){ // consulta si existe la bd seleccionada	
        		//echo "ErrorSql > Seleccionando la base de datos.";
        		exit();
        	}
            
            //mysql_query ("SET NAMES 'utf8'");
            return $cnx_bd;           
                
            //$cnx_bd=conexion();  // conecta a la bd
            
            //mysql_close($cnx_bd); //cierra la conexion              
           
       }    
?>
