<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response; //Utilise la librairie response
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjetController extends AbstractController
{
    /**
    * @Route("/imri")
    */
    public function name()
    {

        $recipes = [
            [
                'title' => 'Banana split',
                'steps' => [
                    'Eplucher une banane',
                    'Melanger avec du chocolat']
                ],
                [
                    'title' => 'Pâtes au nutella',
                    'steps' => [
                        'Faire chauffer de l\'eau',
                        'Mettre ses pâtes',
                        'Rajouter le pot de nutella'
                    ]
                ]
            ];

            $user = [
                'name' => 'Imri',
                'age' => 12
            ];
        return $this->render('dossier/index.html.twig',[
            'recipes' => $recipes,
            'allowed' => false,
            'user' => $user
        ]);
    }

    /**
     * @Route("/user")
     */
     public function user()
     {
         $users = [
             [
                 'firstname' => 'Pascal',
                 'lastname' => 'Legitimus',
                 'skills' => [
                     'HTML', 'CSS'
                 ]
            ],
            [
                'firstname' => 'Didier',
                'lastname' => 'Bourdon',
                'skills' => [
                    'JS', 'PHP'
                ]
           ],
           [
            'firstname' => 'Bernard',
            'lastname' => 'Campon',
            'skills' => [
                'SYMFONY', 'PHP'
            ]
       ]
        ];

        return $this->render('dossier/user.html.twig',[
            'users' => $users
        ]);
     }
   
}
