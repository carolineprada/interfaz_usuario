<?php

class Conexion
{

    /**
     * Conexión a la base datos
     *
     * @return PDO
     */
    public static function conectar()
    {
        try
        {

            $cn = new PDO("mysql:host=localhost; dbname=prueba", "root", "");

            /**return $cn;**/
            echo "Conexión Exitosa";

        } 
        catch (PDOException $ex) 
        {
            /**die($ex->getMessage());**/
            echo "Error de Conexión";
        }
    }

}
