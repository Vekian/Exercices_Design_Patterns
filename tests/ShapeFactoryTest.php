<?php declare(strict_types=1);

namespace Tests\Creational;

use App\Factory\Shapes\ShapeFactory;
use App\Factory\Shapes\ShapeUnknownException;
use App\Factory\Shapes\Entities\Circle;
use PHPUnit\Framework\TestCase;

final class ShapeFactoryTest extends TestCase {
	
	public function testThatFactoryIsWorking()
	{
		$circle = ShapeFactory::build('circle');
		$this->assertInstanceOf(Circle::class, $circle);
	}

	public function testThatShapeUnknownExceptionIsThrown()
	{
		$this->expectException(ShapeUnknownException::class);
		$star = ShapeFactory::build('star');
		$star->draw();
	}
}
