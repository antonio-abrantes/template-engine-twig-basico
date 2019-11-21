<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig_Environment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    /**
     * @Route("/post/1", name="posts.show")
     */
    public function show(Twig_Environment $twig)
    {
        //Antigo usa a variavel $twig
//        $content = $twig->render('post/show.html.twig');
//        return new Response($content);

            return $this->render('post/show.html.twig', [
                'dados' => 'Dados vindos do metodo!'
            ]);
    }


    /**
     * @Route("/", name="posts.index")
     */
    public function index(Twig_Environment $twig){

        $content = $twig->render('post/index.html.twig', [
            'curso' => 'Curso de Twig',
            'user' => 'Antonio Abrantes',
            'post' => [
                'titulo' => 'Meu post 1',
                'conteudo' => 'dados vindos do post',
                'data' => '20/10/2019'
            ],
            'posts' => [
              0 => [
                  'titulo' => 'Meu post 1',
                  'conteudo' => 'Outro post',
                  'data' => '15/10/2019',
                  'tipo' => 'artigo'
              ],
              1 => [
                  'titulo' => 'Meu post 2',
                  'conteudo' => 'Mais um post',
                  'data' => '17/10/2019',
                  'tipo' => 'video'
              ],
              2 => [
                  'titulo' => 'Meu post 3',
                  'conteudo' => 'Dados vindos do post',
                  'data' => '20/10/2019',
                  'tipo' => 'artigo'
              ]
            ],
            'numeros' => [2, 3, 4, 100, 5, 6],
            'mobile' => false
        ]);

        return new Response($content);
    }
}
