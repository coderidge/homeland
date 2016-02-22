<?php

namespace Registration\RegBundle\Controller;

use GuzzleHttp\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Registration\RegBundle\Entity\Registrations;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        
           $api_add = 'https://restcountries.eu/rest/v1/region/Europe';
        
           $client = new Client();
    
           $response = $client->get($api_add);
     
           $data = $response->getBody();
           
           $datafind = json_decode($data,true);
        
          //   var_dump($datafind);
        
        foreach($datafind as $data) { 
       
          $country_names[] = $data['name'];
              
        }
      
             
             

         $form = $this->createFormBuilder()
             ->setAction($this->generateUrl('registration-complete'))
             ->setMethod('POST')
            ->add('name', TextType::class)
            ->add('sex', ChoiceType::class, array(
            'choices' => array(
            'm' => 'Male',
             'f' => 'Female'
             )       
           ))
                 
            // attempt to add countries here, but gave indexed array drop down so passed in view instead    
            //->add('country', ChoiceType::class, array(
            // 'choices'  => array($country_names)
            // ))
                                        
            ->add('age', TextType::class)     
                      
            ->getForm();
         
   
        return $this->render('RegistrationRegBundle:Default/regform.html.twig', array(
            'form' => $form->createView(), 'countries' => $country_names
        ));
        
          
        
    }
   
   public function registration_completeAction(Request $request) 
   {
    
       $data = $request->request->all();
       $name = $data['form']['name'];
       $age = $data['form']['age'];
       $sex = $data['form']['sex'];
       $country = $request->get('country');
             
        /*
        $task = new Registrations();
        $task->setName($name);
        $task->setAge($age);
        $task->setSex($sex);
        $task->setCountry($country);
        $task->setDateCreated(new \DateTime('now'));   
       
          $em = $this->getDoctrine()->getManager();
          $em->persist($task);
          $em->flush();
          */
          return $this->render('RegistrationRegBundle:Default/success.html.twig',array('name' => $name));
       
   }
   
}

