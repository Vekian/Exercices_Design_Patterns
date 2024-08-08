<?php 

namespace App\Builder;

use App\Builder\Interfaces\QueryBuilderInterface;

class MySQLQuery implements QueryBuilderInterface
{
    private string $query;
   public function select(string $table, array $values): QueryBuilderInterface
   {
        $this->query = "SELECT";
        for ($i = 0; $i < count($values); $i++){
            $this->query.= " " . $values[$i];
            if($i < count($values) - 1){
                $this->query.= ",";
            }
        }
        $this->query .= " FROM " . $table;
        return $this;
   }

   public function limit(int $offset, int $max): QueryBuilderInterface
   {
        $this->query .= " LIMIT " . $offset . ", " . $max;
        return $this;
   }

   public function where(string $key, string $value): QueryBuilderInterface
   {
        $this->query .= " WHERE " . $key . " = " . $value;
        return $this;
   }

   public function reset(): QueryBuilderInterface
   {
        $this->query = "";
        return $this;
   }

   public function get(): string
   {
        return $this->query;
   }
}