<?php 

namespace App\Builder\Interfaces;

interface QueryBuilderInterface {
    public function select(string $table, array $values): self;
    public function limit(int $offset, int $max): self;
    public function where(string $key, string $value): self;
    public function reset():self;
    public function get():string;
}