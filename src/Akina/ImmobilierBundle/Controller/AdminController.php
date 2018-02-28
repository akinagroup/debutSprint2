<?php

namespace Akina\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Akina\ImmobilierBundle\Entity\Image;
use Akina\ImmobilierBundle\Form\ImageType;
use Akina\ImmobilierBundle\Entity\Contrat;
use Akina\ImmobilierBundle\Form\ContratType;
use Akina\ImmobilierBundle\Entity\Paiement;
use Akina\ImmobilierBundle\Form\PaiementType;
use Akina\ImmobilierBundle\Entity\Biens;
use Akina\ImmobilierBundle\Form\BiensType;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction(Request $request)
    {
        $em1 = $this->getDoctrine()->getManager();

        $Type = $em1->getRepository('AkinaImmobilierBundle:TypeBien')->findAll();
        $em2 = $this->getDoctrine()->getManager();

        $Localite = $em2->getRepository('AkinaImmobilierBundle:Localite')->findAll();

        $em = $this->getDoctrine()->getManager();

        $listeReservations = $em->getRepository('AkinaImmobilierBundle:Biens')->findAll();

        return $this->render('AkinaImmobilierBundle:Admin:list.html.twig', array('reservations' => $listeReservations, 'Type' => $Type, 'Localite' => $Localite,
            // ...
        ));
    }

    /**
     * @Route("/disponibilite")
     */
    public function disponibiliteAction($id)
    {
        // echo $id;
        $user = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Biens')
        ->find($id);
        $etat = $user->getEtat();
        if ($etat == 0) {
            $user->setEtat(1);
        } else {
            $user->setEtat(0);
        }
        $em = $this
        ->getDoctrine()
        ->getManager();

        $em->flush($user);

        return $this->redirectToRoute('Res');
    }

    public function valideAction($id)
    {
        // echo $id;
        $user = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Reservation')
        ->find($id);
        $etat = $user->getEtat();
        if ($etat == 0) {
            $user->setEtat(1);
        } else {
            $user->setEtat(0);
        }
        $em = $this
        ->getDoctrine()
        ->getManager();

        $em->flush($user);

        return $this->render('AkinaImmobilierBundle:Admin:contrat.html.twig', array(
    ));
    }

    /**
     * @Route("/add")
     */
    public function addAction(Request $request)
    {
        $image = new Image();

        $formI = $this->get('form.factory')->create(ImageType::class, $image);

        if ($request->isMethod('POST') && $formI->handleRequest($request)->isValid()) {
            // Ajoutez cette ligne :

            // c'est elle qui déplace l'image là où on veut les stocker

            // $advert->getImage()->upload();

            // Le reste de la méthode reste inchangé

            $em = $this->getDoctrine()->getManager();

            $em->persist($image);

            $em->flush();

            // ...
        }
        $bien = new Biens();

        $formB = $this->get('form.factory')->create(BiensType::class, $bien);

        if ($request->isMethod('POST') && $formB->handleRequest($request)->isValid()) {
            // Ajoutez cette ligne :

            // c'est elle qui déplace l'image là où on veut les stocker

            // $advert->getImage()->upload();

            // Le reste de la méthode reste inchangé

            $em = $this->getDoctrine()->getManager();

            $em->persist($bien);

            $em->flush();

            // ...
        }

        return $this->render('AkinaImmobilierBundle:Admin:add.html.twig', array('formI' => $formI->createView(), 'formB' => $formB->createView(),
            // ...
        ));
    }

    public function listResAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $listeReservations = $em->getRepository('AkinaImmobilierBundle:Reservation')->findReservation();

        return $this->render('AkinaImmobilierBundle:Admin:listRes.html.twig', array('reservations' => $listeReservations,
            // ...
        ));
    }

    public function testeAction()
    {
        /**
         * @Route("/tes")
         */
        $em = $this->getDoctrine()->getManager();
        $bien = $em->getRepository('AkinaImmobilierBundle:Reservation');
        $biens = $bien->findBien(1);

        echo count($biens);
    }

    public function contratAction(Request $request, $id, $bien)
    {
        $user = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Reservation')
        ->findBien($bien);

        // $biens = $em ->getRepository('AkinaImmobilierBundle:Biens')->findBy(array('id'=>$user));
        $idterme = 1;
        $em = $this
        ->getDoctrine()
        ->getManager();
        $terme = $em->getRepository('AkinaImmobilierBundle:TermeContrat')->find($idterme);
        //echo $terme;
        $reserve = new Contrat();

        $form = $this->get('form.factory')->create(ContratType::class, $reserve);

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            foreach ($user as $users) {
                $etat = $users->getEtat();
                if ($etat == 0) {
                    $users->setEtat(1);
                }
                $em = $this
        ->getDoctrine()
        ->getManager();

                $em->flush($users);
            }

            $em = $this->getDoctrine()->getManager();
            $Reservations = $em->getRepository('AkinaImmobilierBundle:Reservation')->find($id);
            //  echo $Reservations;
            // Ajoutez cette ligne :

            // c'est elle qui déplace l'image là où on veut les stocker

            // $advert->getImage()->upload();

            // Le reste de la méthode reste inchangé

            $date = date('Y-m-d');
            $reserve->setdateDeDebut($date);
            $reserve->setReservation($Reservations);
            $reserve->setTerme($terme);

            $em->persist($reserve);
            $em->flush();

            $paiement = new Paiement();
            $mensualite = $reserve->getMensualite();
            // $caution = $reserve ->getCaution();
            //$montant = $mensualite + $caution;
            $formp = $this->get('form.factory')->create(PaiementType::class, $paiement);
            $em = $this->getDoctrine()->getManager();
            $date = date('Y-m-d');

            $date1 = date('Y-m');
            $paiement->setdateDePaiement($date);
            $paiement->setContrat($reserve);
            $paiement->setMontantPayer($mensualite);
            $paiement->setDuree($date1, 'a', ($date1 + 1));

            $em->persist($paiement);

            $em->flush();

            return $this->redirectToRoute('paiement');

            // ...
        }

        $em = $this->getDoctrine()->getManager();

        $Reservation = $em->getRepository('AkinaImmobilierBundle:Reservation')->findBy(array('id' => $id));
        //  echo $Reservations;

        return $this->render('AkinaImmobilierBundle:Admin:contrat.html.twig', array('form' => $form->createView(), 'reservation' => $Reservation, 'terme' => $terme,
        ));
    }

    public function paiementAction()
    {
        $em = $this
        ->getDoctrine()
        ->getManager();

        $listeReservations = $em->getRepository('AkinaImmobilierBundle:Paiement')->findAll();
        echo count($listeReservations);

        return $this->render('AkinaImmobilierBundle:Admin:paiement.html.twig', array('reservations' => $listeReservations,
             // ...
         ));
    }

    public function DetailAction($id)
    {
        $detailreservation = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Reservation')
        ->findBy(array('id' => $id));

        return $this->render('AkinaImmobilierBundle:Admin:Detail.html.twig', array('detail' => $detailreservation,
        ));
    }

    public function detailBienAction($id)
    {
        $detailreservation = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AkinaImmobilierBundle:Image')
        ->findBy(array('id' => $id));

        return $this->render('AkinaImmobilierBundle:Admin:detailBien.html.twig', array('detail' => $detailreservation,
        ));
    }
}
