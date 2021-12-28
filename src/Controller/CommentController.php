<?php
/**
 * Created by PhpStorm.
 * User: Avramets
 * Date: 28.12.2021
 * Time: 15:42
 */

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
  /**
   * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST")
   */
  public function commentVote($id, $direction, LoggerInterface $logger)
  {
    //todo use $id to query database
    //bellow immitation logic instead real logic with add counter to database
    if ($direction === 'up') {
        $logger->info('Voting UP!');
        $currentVoteCount = rand(7, 100);
    } else {
        $logger->info('Voting DOWN!');
        $currentVoteCount = rand(0,5);
    }
    //return new JsonResponse(['votes' => $currentVoteCount]);
    return $this->json(['votes' => $currentVoteCount]);
  }
}