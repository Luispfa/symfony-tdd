<?php

namespace AppBundle\Tests\Entity;

use PHPUnit\Framework\TestCase;
use AppBundle\Entity\Book;

class BookTest extends TestCase {

    public function testBook() {
        $mockCategory = $this->createMock('AppBundle\Entity\Category');

        $mockCategory
                ->expects($this->atLeastOnce())
                ->method('getName')
                ->willReturn('programming');

        $book = new Book('Clean code', 'Martin Fowler', new \DateTime(), $mockCategory);

        $this->assertEquals('Clean code', $book->getTitle());
        $this->assertEquals('Martin Fowler', $book->getAuthor());
        $this->asserttrue($book->getDatePublished() instanceof \DateTime);

        $this->assertEquals('programming', $book->getCategory()->getName());
    }

}
