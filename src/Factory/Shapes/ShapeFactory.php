<?php 

namespace App\Factory\Shapes;
use App\Factory\Shapes\Entities\Circle;
use App\Factory\Shapes\Entities\Rectangle;
use App\Factory\Shapes\Entities\Triangle;
use App\Factory\Shapes\Interfaces\ShapeInterface;
use App\Factory\Shapes\ShapeUnknownException;

class ShapeFactory {
	public static $pathFactory = "App\\Factory\\Shapes\\Entities\\";
	public ShapeInterface $shape;

	public static function build(string $shape): ShapeInterface
	{
		$nameClass = ShapeFactory::$pathFactory . ucfirst(strtolower($shape));
		if (!class_exists($nameClass)){
			throw new ShapeUnknownException("Shape unknown", 404);
		}
		return new $nameClass();
	}
}