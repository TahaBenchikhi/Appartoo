<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/bonobo" ,  name="bonobo")
     */
    public function indexAction()
    {
        $Membership = $this->container->get('security.authorization_checker');

        if ($Membership->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $em = $this->getDoctrine()->getManager();
            $me = $this->get('security.token_storage')->getToken()->getUser();
            $query = $this->getDoctrine()->getRepository("AppBundle:User")->createQueryBuilder('u');
            $query->where('u.id != :iduser')->setParameter('iduser', $this->get('security.token_storage')->getToken()->getUser()->getId());
            $allusers = $query->getQuery()->getResult();
            $myfriends = $me->getFriendsList();
            $notfriends = array_diff($allusers, $myfriends);

            return $this->render('AppBundle:Default:index.html.twig', [
                "user" => $this->get('security.token_storage')->getToken()->getUser(),
                "myfriends" => $myfriends,
                "notmyfriends" => $notfriends
            ]);
        } else {
            return $this->redirect('/login');
        }

    }

    /**
     * @Route("/addfriend" ,  name="addfriend")
     */
    public function addfriendAction(Request $request)
    {

        $id = $request->request->get('data');
        $em = $this->getDoctrine()->getManager();
        $me = $this->get('security.token_storage')->getToken()->getUser();
        $user2 = $this->getDoctrine()->getRepository("AppBundle:User")->find($id);
        $me->addFriend($user2);
        $em->persist($me);
        $em->flush();
        return new Response('OK');
    }

    /**
     * @Route("/removefriend" ,  name="removefriend")
     */
    public function removefriendAction(Request $request)
    {

        $id = $request->request->get('data');
        $em = $this->getDoctrine()->getManager();
        $me = $this->get('security.token_storage')->getToken()->getUser();
        $user2 = $this->getDoctrine()->getRepository("AppBundle:User")->find($id);
        $me->removeFriend($user2);
        $em->persist($me);
        $em->flush();
        return new Response('OK');
    }

    /**
     * @Route("/" ,  name="redirectlogout")
     */
    public function redirectlogoutAction()
    {
        return $this->redirect('/login');
    }


    /**
     * @Route("/profile" ,  name="profil")
     */
    public function profilAction()
    {
        $Membership = $this->container->get('security.authorization_checker');

        if ($Membership->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            return $this->render('AppBundle:Default:profil.html.twig', [
                "user" => $this->get('security.token_storage')->getToken()->getUser(),
            ]);
        } else {
            return $this->redirect('/login');
        }

    }

    /**
     * @Route("/changerprofil" ,  name="changerprofil")
     */
    public function changerprofilAction(Request $request)
    {

        $data = $request->request->get('data');
        $em = $this->getDoctrine()->getManager();
        $meinsession = $this->get('security.token_storage')->getToken()->getUser();
        $meindatabase = $this->getDoctrine()->getRepository("AppBundle:User")->find($meinsession->getId());
        $meindatabase->setNom($data['nom']);
        $meindatabase->setPrenom($data['prenom']);
        $meindatabase->setAge($data['age']);
        $meindatabase->setRace($data['race']);
        $meindatabase->setFamille($data['famille']);
        $meindatabase->setNourriture($data['nourriture']);

        $em->persist($meindatabase);
        $em->flush();
        return new Response('OK');
    }
}



