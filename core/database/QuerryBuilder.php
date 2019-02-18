<?php

class QuerryBuilder {

  protected $pdo;

  public function __construct($pdo) {
    $this->pdo = $pdo;
  }

  public function selectAll($table) {
    $statement = $this->pdo->prepare("Select * from {$table}");
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insert($table, $params) {

    $sql = sprintf(

      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($params)),
      ':' . implode(', :', array_keys($params))

    );

      try {

        $statement = $this->pdo->prepare($sql);
        $statement->execute($params);

      } catch (Exception $e) {

        die('whoops something went wrong');

      }

  }
}
