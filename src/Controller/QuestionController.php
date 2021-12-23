<?php
/**
 * Created by PhpStorm.
 * User: Avramets
 * Date: 22.12.2021
 * Time: 12:36
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController {

  /**
   * @Route("/")
   */
  public function homepage()
  {

    return new Response('Текст из класса контроллера QuestionController!');
  }

  /**
   * @Route("/questions/{slug}")
   */
  public function show($slug)
  {
    return new Response(sprintf(
      'Future page to show a question: %s ?',
      ucwords(str_replace('-', ' ', $slug))));
  }
}