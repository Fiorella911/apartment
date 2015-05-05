<?php

namespace Apartment\ApartBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Apartment\ApartBundle\Entity\Towns;
use Apartment\ApartBundle\Entity\Countries;

class MainController extends Controller
{
    
    public function indexAction()
    {
        $em = $this->get('doctrine')->getManager();
        $town = $em->getRepository('ApartmentApartBundle:Towns') -> findAll();
        
        return $this->render('ApartmentApartBundle:Main:main.html.twig', ['town' => $town]);
    }
    
    
    public function searchShowAction($slug=null) //по id города
    {
     
        $request = Request::createFromGlobals();
        $result = new Towns;
        $em = $this->get('doctrine')->getManager();
         
        $town = $result->getNameEn($request->get('town'));
        $country = $result->getNameEn($request->get('country'));
//        $checkIn = $result->get($request->get('checkIn'));
//        $checkOut = $result->get($request->get('checkOut'));
//        $guests = $result->get($request->get('guests'));
        
           
        $towns = $em->getRepository('ApartmentApartBundle:Towns') -> findAll(['nameEn' => $town]);
        $countries = $em->getRepository('ApartmentApartBundle:Countries') -> findAll(['nameEn' => $country]);

        
        return $this->render('ApartmentApartBundle:Search:searchResults.html.twig', ['town'=> $towns, 'country'=> $countries]);
        
       
    }
    
      
    
    public function searchAction($slug=null)
    {   
       
        $request = Request::createFromGlobals();
        $result = new Towns;
        $em = $this->get('doctrine')->getManager();
       
        $town = $result->getNameEn($request->get('town'));
        $country = $result->getNameEn($request->get('country'));
//        $checkIn = $result->get($request->get('checkIn'));
//        $checkOut = $result->get($request->get('checkOut'));
//        $guests = $result->get($request->get('guests'));
       
        $towns = $em->getRepository('ApartmentApartBundle:Towns') -> findAll(['nameEn' => $town]);
        $countries = $em->getRepository('ApartmentApartBundle:Countries') -> findAll(['nameEn' => $country]);

       
       
       return $this->render('ApartmentApartBundle:Search:search.html.twig', ['towns' => $towns, 'countries' => $countries]);
    }
    
    
    
    
    
    
    
    
    public function allTownsAction()
    {
        $em = $this->get('doctrine')->getManager();
        $towns = $em->getRepository('ApartmentApartBundle:Towns') -> findAll();
             
        
        return $this->render('ApartmentApartBundle:Main:allTowns.html.twig', ['towns' => $towns]);
    }
    
    
    public function townAction()
    {
        $em = $this->get('doctrine')->getManager();
        $towns = $em->getRepository('ApartmentApartBundle:Towns') -> findAll();
             
        
        return $this->render('ApartmentApartBundle:Main:allTowns.html.twig', ['towns' => $towns]);
    }
}
