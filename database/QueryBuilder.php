<?php

class QueryBuilder{

		protected $pdo;


		 public function __construct($pdo){

         $this->pdo = $pdo;

        
        }

		public function getAll($table){

		$sql = "SELECT * FROM $table ";

		$statement = $this->pdo->prepare($sql);

		$statement->execute();

		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	  }

	   public function getSingle($table,int $id){

	  	$sql = "SELECT * FROM $table WHERE id=:id";

	  	$statement = $this->pdo->prepare($sql);

	  	$statement->bindParam(':id', $id);

	  	$statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;

	  }

	  public function create($table,array $data){

	  	$keys = implode(',',array_keys($data));

	  	$tags = ":" . implode(', :',array_keys($data));

		$sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";

		$statement = $this->pdo->prepare($sql);

		$statement->execute($data);
	  }

	  public function delete($table, int $id){

        $sql = "DELETE FROM {$table} WHERE id=:id";

        $statement = $this->pdo->prepare($sql);

        $statement->bindParam(":id", $id);

        $statement->execute();

	  }
}