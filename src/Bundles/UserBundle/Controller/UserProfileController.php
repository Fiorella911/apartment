<?php

namespace Bundles\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Bundles\UserBundle\Entity\User;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class UserProfileController extends Controller
{
    public function showProfileAction()
    {
        if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
        throw new AccessDeniedException();
        }
        $user = $this->get('security.context')->getToken()->getUser();
        
        return $this->render('BundlesUserBundle:UserProfile:userProfile.html.twig', ['user' => $user]);
    }
    
    
    
    
    public function editProfileAction()
    {
        if (false === $this->get('security.context')->isGranted('ROLE_USER')) {
        throw new AccessDeniedException();
        }
        
        $request = Request::createFromGlobals();
        $em = $this->getDoctrine()->getEntityManager();
        $user = $this->get('security.context')->getToken()->getUser();
      //  $userId = $user->getID();
      //  $userProfile = $em->getRepository('BundlesUserBundle:User') -> findOneBy(['id' => $userId]); 
        
        if (true === $request->get('submit')) {
        $saveUserProfile = new User;
   
        //$datetime = new \DateTime('now');
        

        $saveUserProfile->setUserName($request->get('userName')); 
        $saveUserProfile->setFirstName($request->get('userFirstName'));
        $saveUserProfile->setLastName($request->get('userLastName'));
        $saveUserProfile->setEmail($request->get('userEmail'));
        //$saveUserProfile->setPassword($request->get('password'));

              
        $em->persist($saveUserProfile);
       // $em->merge($saveUserProfile);
        $em->flush();
       }
        
        return $this->render('BundlesUserBundle:UserProfile:editProfile.html.twig', [ 'user' => $user]);
    }

    
    
}