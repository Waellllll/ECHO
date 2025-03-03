<?php

namespace App\Repository;

use App\Entity\Elearning;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Elearning>
 */
class ElearningRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Elearning::class);
    }

    public function searchByFilters(?int $categoryId, ?string $searchTerm): array
    {
    $qb = $this->createQueryBuilder('e');

    if ($categoryId) {
        $qb->join('e.categories', 'c')
        ->andWhere('c.id = :categoryId')
        ->setParameter('categoryId', $categoryId);
    }

    if ($searchTerm) {
        $qb->andWhere('e.title LIKE :search OR e.description LIKE :search')
        ->setParameter('search', '%' . $searchTerm . '%');
    }

    return $qb->getQuery()->getResult();
    }


    //    /**
    //     * @return Elearning[] Returns an array of Elearning objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Elearning
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
