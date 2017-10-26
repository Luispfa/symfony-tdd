<?php

namespace AppBundle\Tests\Entity;

use PHPUnit\Framework\TestCase;
use AppBundle\Entity\Category;

class CategoryTest extends TestCase {

    public function testCategoryEntity() {
        $book = new Category('programming');

        $this->assertEquals('programming', $book->getName());
    }

}
