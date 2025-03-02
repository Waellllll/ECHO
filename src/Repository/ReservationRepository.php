<?php

namespace App\Repository;

use App\Entity\Reservation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reservation>
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservation::class);
    }
    public function getReservationsPerWorkshop(): array
    {
        return $this->createQueryBuilder('r')
            ->select('w.title as workshopTitle, COUNT(r.id) as reservationCount')
            ->leftJoin('r.workshopTitle', 'w') // Ensure 'workshopTitle' is the correct property name
            ->groupBy('w.title')
            ->getQuery()
            ->getResult();
    }
    public function getReservationsByPaymentStatus(): array
    {
        return $this->createQueryBuilder('r')
            ->select('r.paymentStatus as status, COUNT(r.id) as count')
            ->groupBy('r.paymentStatus')
            ->getQuery()
            ->getResult();
    }


    //    /**
    //     * @return Reservation[] Returns an array of Reservation objects
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

    //    public function findOneBySomeField($value): ?Reservation
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
