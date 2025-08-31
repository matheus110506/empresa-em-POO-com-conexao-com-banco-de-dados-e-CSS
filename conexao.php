<?php
class Conexao {
    private static $instancia;

    public static function getConexao() {
        if (!isset(self::$instancia)) {
            try {
                self::$instancia = new PDO("mysql:host=127.0.0.1;port=3306;dbname=empresa", "root", "");
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Erro de conexão: " . $e->getMessage();
            }
        }
        return self::$instancia;
    }
}
?>