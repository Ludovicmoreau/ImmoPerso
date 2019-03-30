<?php

namespace App\Repository;

use App\Entity\House;
use Doctrine\ORM\EntityRepository;

/**
 * @method House|null find($id, $lockMode = null, $lockVersion = null)
 * @method House|null findOneBy(array $criteria, array $orderBy = null)
 * @method House[]    findAll()
 * @method House[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ApartmentRepository extends EntityRepository
{

//    /**
//     * @return MovementDescription[] Returns an array of MovementDescription objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MovementDescription
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}