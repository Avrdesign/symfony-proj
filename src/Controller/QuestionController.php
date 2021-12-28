<?php
/**
 * Created by PhpStorm.
 * User: Avramets
 * Date: 22.12.2021
 * Time: 12:36
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
  /**
   * @Route("/", name="app_homepage")
   */
  public function homepage()
  {
    return $this->render('homepage/homepage.html.twig');
    //return new Response('Текст из класса контроллера QuestionController!');
  }

  /**
   * @Route("/questions/{slug}", name="app_question_show")
   */
  public function show($slug)
  {
    $answers = [
      'Make sure your cat is sitting purrrfectly still 🤣',
      'Honestly, I like furry shoes better than MY cat',
      'Maybe... try saying the spell backwards?',
    ];
  dump($slug, $this);
    return $this->render('question/show.html.twig',
      ['question' => ucwords(str_replace('-', ' ', $slug)),
        'answers' => $answers]);

   /* return new Response(sprintf(
      'Future page to show a question: %s ?',
      ucwords(str_replace('-', ' ', $slug))));*/
  }
}