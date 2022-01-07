<?php

namespace App\Repository;

use App\Entity\LoveMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LoveMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method LoveMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method LoveMessage[]    findAll()
 * @method LoveMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoveMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LoveMessage::class);
    }

    // /**
    //  * @return LoveMessage[] Returns an array of LoveMessage objects
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
    public function findOneBySomeField($value): ?LoveMessage
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
