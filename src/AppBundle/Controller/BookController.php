<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BookController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        $books = [
            [
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'datePublished' => new \DateTime(),
                'category' => 'Programming'
            ],
            [
                'title' => 'Pro PHP Refatoring',
                'author' => 'Iacopo Romei',
                'datePublished' => new \DateTime(),
                'category' => 'Programming'
            ],
        ];

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array('books' => $books)); 
    }

}
