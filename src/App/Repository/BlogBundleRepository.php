<?php

namespace App\Repository;

use App\Entity\BlogBundle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BlogBundle|null find($id, $lockMode = null, $lockVersion = null)
 * @method BlogBundle|null findOneBy(array $criteria, array $orderBy = null)
 * @method BlogBundle[]    findAll()
 * @method BlogBundle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogBundleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BlogBundle::class);
    }

    // /**
    //  * @return BlogBundle[] Returns an array of BlogBundle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BlogBundle
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
