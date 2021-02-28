<?php

/*
 * This file is the part of USCAEP Platform
 * 
 * (c) Wilfried YORO <wilfriedyoro68@gmail.com>
 * 
 * by Seeker225 AIJNWJ
*/

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    /**
     * @Route("/qui-sommes-nous", name="presentation")
     */
    public function about()
    {
        return $this->render('default/about.html.twig');
    }

    /**
     * @Route("/nos-cooperatives", name="liste_cooperatives")
     */
    public function cooperative()
    {
        return $this->render('default/coop.html.twig');
    }

    /**
     * @Route("/nom-de-la-cooperative", name="coop_detail")
     */
    public function detailCooperative()
    {
        return $this->render('default/coop_detail.html.twig');
    }

    /**
     * @Route("/nom-de-l-activite", name="activite_detail")
     */
    public function activite()
    {
        return $this->render('default/activite.html.twig');
    }

    /**
     * @Route("/nom-du-produit", name="produit_detail")
     */
    public function produit()
    {
        return $this->render('default/produit.html.twig');
    }

    /**
     * @Route("/nos-contacts", name="contact")
     */
    public function contact()
    {
        return $this->render('default/contact.html.twig');
    }

    /**
     * @Route("/espace-publicitaire", name="market")
     */
    public function market()
    {
        return $this->render('default/market.html.twig');
    }
}
