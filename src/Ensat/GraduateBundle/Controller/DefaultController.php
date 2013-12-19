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
		/*$results = array();
		foreach($filieres as $filiere){
			array_push($results,$filiere,$em->getRepository('EnsatGraduateBundle:filiere')->getPromotionByFiliere($filiere));
		}
		 * 
		 */
        return array('results' => $filieres);
    }
	
}
