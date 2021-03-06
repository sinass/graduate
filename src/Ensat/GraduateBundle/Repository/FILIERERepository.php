<?php

namespace Ensat\GraduateBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * FILIERERepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FILIERERepository extends EntityRepository
{
	public function getAllFiliere(){
		$qb = $this->createQueryBuilder('p')
				   ->groupBy('p.designation');
	   	$query = $qb->getQuery();
		return $query->getResult();
	}
	public function getPromotionByFiliere($filiere){
		$qb = $this->createQueryBuilder('p')
				   ->where('p.designation = :nom')
				   ->setParameter('nom',$filiere)
				   ->orderBy('p.promotion','DESC')
				   ;
	   	$query = $qb->getQuery();
		return $query->getResult();
	}
}
