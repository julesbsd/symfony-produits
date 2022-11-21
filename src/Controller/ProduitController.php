<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    // public $lesProduits = array(
//         1 => [
//             1 => [
//                 'id' => '1',
//                 'nom' => 'le premier',
//                 'prix' => '100',
//                 'description' => 'Ceci est le premier produit de la catégorie 1',
//                 'livraison' => '5',
//             ],
//             2 => [
//                 'id' => '2',
//                 'nom' => 'le deuxième',
//                 'prix' => '10',
//                 'description' => 'Ceci est le deuxième produit de la catégorie 1',
//                 'livraison' => '7',
//             ],
//             3 => [
//                 'id' => '3',
//                 'nom' => 'le troisième',
//                 'prix' => '15',
//                 'description' => 'Ceci est le troisième produit de la catégorie 1',
//                 'livraison' => '10',
//             ],
//             4 => [
//                 'id' => '4',
//                 'nom' => 'le quatrième',
//                 'prix' => '15',
//                 'description' => 'Ceci est le quatrième produit de la catégorie 1',
//                 'livraison' => '20',
//             ],
//         ],
//         2 => [
//             5 => [
//                 'id' => '5',
//                 'nom' => 'le cinquième',
//                 'prix' => '1',
//                 'description' => 'Ceci est le cinquième produit de la catégorie 2',
//                 'livraison' => '5',
//             ],
//             6 => [
//                 'id' => '6',
//                 'nom' => 'le sixième',
//                 'prix' => '10',
//                 'description' => 'Ceci est le sixième produit de la catégorie 2',
//                 'livraison' => '7',
//             ],
//             7 => [
//                 'id' => '7',
//                 'nom' => 'le septième',
//                 'prix' => '15',
//                 'description' => 'Ceci est le septième produit de la catégorie 2',
//                 'livraison' => '10',
//             ],
//             8 => [
//                 'id' => '8',
//                 'nom' => 'le huitième',
//                 'prix' => '15',
//                 'description' => 'Ceci est le huitième produit de la catégorie 2',
//                 'livraison' => '20',
//             ],
//         ],
//         3 => [
//             9 => [
//                 'id' => '9',
//                 'nom' => 'le neuvième',
//                 'prix' => '1',
//                 'description' => 'Ceci est le neuvième produit de la catégorie 3',
//                 'livraison' => '5',
//             ],
//             10 => [
//                 'id' => '10',
//                 'nom' => 'le dixième',
//                 'prix' => '10',
//                 'description' => 'Ceci est le dixième produit de la catégorie 3',
//                 'livraison' => '7',
//             ],
//             11 => [
//                 'id' => '11',
//                 'nom' => 'le onzième',
//                 'prix' => '15',
//                 'description' => 'Ceci est le onzième produit de la catégorie 3',
//                 'livraison' => '10',
//             ],
//             12 => [
//                 'id' => '12',
//                 'nom' => 'le douzième',
//                 'prix' => '15',
//                 'description' => 'Ceci est le douzième produit de la catégorie 3',
//                 'livraison' => '20',
//             ],
//         ],
// );

//     #[Route('/categorie/{num}', name: 'categorie')]
//     public function categorie(int $num): Response
//     {
//         // envoi du numéro de la catégorie ainsi que les produits de cette catégorie
//         return $this->render('categorie/index.html.twig', [
//             'num' => $num,
//             'produits' => $this->lesProduits[$num],

//         ]);
//     }


//     #[Route('/produit/{categorie}/{id}', name: 'produit')]
//     public function produit(int $categorie, int $id): Response
//     {
//         // envoi à la page du porduit des information sur le produit grâce à son id et son id de catégorie
//         return $this->render('produit/index.html.twig', [
//             'produit' => $this->lesProduits[$categorie][$id],
//             'categories' => [
//                 'categorie 1',
//                 'categorie 2', 
//                 'categorie 3',
//             ]
//         ]);
//     }
}