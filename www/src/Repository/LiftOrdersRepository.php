<?php

namespace App\Repository;

use App\Entity\LiftOrders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LiftOrders|null find($id, $lockMode = null, $lockVersion = null)
 * @method LiftOrders|null findOneBy(array $criteria, array $orderBy = null)
 * @method LiftOrders[]    findAll()
 * @method LiftOrders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LiftOrdersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LiftOrders::class);
    }

    // /**
    //  * @return LiftOrders[] Returns an array of LiftOrders objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LiftOrders
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
