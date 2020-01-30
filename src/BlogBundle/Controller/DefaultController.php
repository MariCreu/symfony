<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $entry_repo=$em->getRepository('BlogBundle:Entry');
        $entries=$entry_repo->findAll();
        
        foreach ($entries as $entry){
            echo $entry->getTitle()."<br/>";
            echo $entry->getCategory()->getName()."<br/>";
            echo $entry->getUser()->getName()."<br/><hr/>";
            
            $tags = $entry->getEntryTag();
            foreach ($tags as $value ){
                echo $value->getTag()->getName().", ";
            }
        }
        die();
        
        return $this->render('BlogBundle:Default:index.html.twig');
    }
}
