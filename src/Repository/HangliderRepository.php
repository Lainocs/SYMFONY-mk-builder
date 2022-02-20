<?php

namespace App\Repository;

use App\Entity\Hanglider;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hanglider|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hanglider|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hanglider[]    findAll()
 * @method Hanglider[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HangliderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hanglider::class);
    }

    // /**
    //  * @return Hanglider[] Returns an array of Hanglider objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hanglider
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
