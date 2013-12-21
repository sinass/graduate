<?php

namespace Ensat\GraduateBundle\Controller;
use Ensat\GraduateBundle\Entity\FILIERE;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
    	$em = $this->getDoctrine()->getEntityManager();
		$filieres = $em->getRepository('EnsatGraduateBundle:filiere')->getAllFiliere();
		$ginf = $em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere("GINF");
		$gind = $em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere("GIND");
		$gsea = $em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere("GSEA");
		$gstr = $em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere("GSTR");
		$geeei = $em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere("GEEEI");
		
		return array('ginf' => $ginf,
					'gind' => $gind,
					'gstr' => $gstr,
					'gsea' => $gsea,
					'geeei' => $geeei
					);

        
    }
	
}
