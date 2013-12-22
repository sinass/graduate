<?php

namespace Ensat\GraduateBundle\Controller;
use Ensat\GraduateBundle\Entity\FILIERE;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/home")
     * @Template()
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getEntityManager();
		$filieres = $em->getRepository('EnsatGraduateBundle:filiere')->getAllFiliere();
		$ginf = $em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere("GINF");
		$gind = $em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere("GIND");
		$gsea = $em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere("GSEA");
		$gstr = $em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere("GSTR");
		$geeei = $em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere("GEEEI");
		
		$session = $this->getRequest()->getSession();
		$session->set("ginf",$ginf);
		$session->set("gind",$gind);
		$session->set("gstr",$gstr);
		$session->set("gsea",$gsea);
		$session->set("geeei",$geeei);
		
		return $this->redirect($this->generateUrl('filiere'));
					

        
    }
	
}
