<?php

namespace App\Repository\Newsletters;

use App\Entity\Newsletters\newslaters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method newslaters|null find($id, $lockMode = null, $lockVersion = null)
 * @method newslaters|null findOneBy(array $criteria, array $orderBy = null)
 * @method newslaters[]    findAll()
 * @method newslaters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class newslatersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, newslaters::class);
    }

    // /**
    //  * @return newslaters[] Returns an array of newslaters objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?newslaters
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
