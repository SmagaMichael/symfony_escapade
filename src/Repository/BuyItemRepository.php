<?php

namespace App\Repository;

use App\Entity\BuyItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BuyItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method BuyItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method BuyItem[]    findAll()
 * @method BuyItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BuyItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BuyItem::class);
    }

    // /**
    //  * @return BuyItem[] Returns an array of BuyItem objects
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
    public function findOneBySomeField($value): ?BuyItem
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
