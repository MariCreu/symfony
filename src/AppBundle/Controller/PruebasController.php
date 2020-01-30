<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Curso;

class PruebasController extends Controller
{
   
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('pruebas/index.html.twig', array(
            'texto' => "Te lo envio desde la accion del controlador"
        ));
    }
    public function createAction(){
        
        $curso= new Curso();
        $curso->setTitulo("Curso symfony 3");
        $curso->setDescripcion("Curso completo");
        $curso->setPrecio(80);
        
        $em=$this->getDoctrine()->getManager();
        $em->persist($curso);
        $flush=$em->flush();
        
        if($flush!=null){
            echo "el curso no se ha grabado bien";
        }else{
            echo "El curso se ha creado correctamente";
        }
        die();
    }
    
    public function readAction(){
        $em=$this->getDoctrine()->getManager();
        $cursos=$em->getRepository('AppBundle:Curso');
        $cursos =$cursos->findAll();
        
        foreach($cursos as $curso){
            echo $curso->getTitulo()."<br/>";
            echo $curso->getDescripcion()."<br/>";
            echo $curso->getPrecio()."<br/>";
        }
        
        die();
    }
    public function updateAction($id,$titulo,$descripcion,$precio){
        $em=$this->getDoctrine()->getManager();
        $cursos=$em->getRepository('AppBundle:Curso');
        
        $curso=$cursos->find($id);
        $curso->setTitulo($titulo);
        $curso->setDescripcion($descripcion);
        $curso->setPrecio($precio);
        
        $em->persist($curso);
        $flush=$em->flush();
        
        if($flush!=null){
            echo "el curso no se ha actualizado bien";
        }else{
            echo "El curso se ha actualizado  correctamente";
        }
        die();
        
    }
}
