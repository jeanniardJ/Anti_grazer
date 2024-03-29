<?php

namespace App\Repository;

use App\Entity\ReportedUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReportedUser>
 *
 * @method ReportedUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReportedUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReportedUser[]    findAll()
 * @method ReportedUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReportedUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReportedUser::class);
    }

    //    /**
    //     * @return ReportedUser[] Returns an array of ReportedUser objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?ReportedUser
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
