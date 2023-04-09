<?php
class DataBase {
  private static $connection = null;
  public static function Connect () {
    try {
      self::$connection = new PDO("mysql:host=localhost;port=3030;dbname=testesphp", "root", "");
      self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e) {
      throw new \PDOException($e->getMessage(), $e->getCode());
    }
    return self::$connection;
  }
}
?>