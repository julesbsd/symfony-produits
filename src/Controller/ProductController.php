<?php

namespace App\Controller;

use App\Entity\Produits;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{


    #[Route('/categorie/{id_categorie}', name: 'show_categorie')]
    public function show_categorie(ManagerRegistry $doctrine,  int $id_categorie): Response
    {
        $products = $doctrine->getRepository(Produits::class)->findBy(['id_categorie' => $id_categorie]);

        return $this->render('categorie/index.html.twig', [
            'products' => $products
        ]);
    }

    #[Route('/product/{id}', name: 'product_show')]
    public function show_product(ManagerRegistry $doctrine, int $id): Response
    {
        $product = $doctrine->getRepository(Produits::class)->find($id);
        if (!$product) {
            throw $this->createNotFoundException(
                "Aucun produit n'a été trouvé pour l'id" . $id
            );
        }
        return $this->render('product/index.html.twig', [
            'product' => $product
        ]);
    }

    #[Route('/produits', name: 'produits_show')]
    public function show_produits(ManagerRegistry $doctrine): Response
    {
        $produits =  $doctrine->getRepository(Produits::class)->findAll();
        if (!$produits) {
            throw $this->createNotFoundException(
                "Aucun produit n'a été trouvé."
            );
        }
        return $this->render('produits/index.html.twig', [
            'produits' => $produits
        ]);
    }
}
