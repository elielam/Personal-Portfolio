<?php

namespace App\Repository;

use App\Entity\MeanOfPayment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MeanOfPayment|null find($id, $lockMode = null, $lockVersion = null)
 * @method MeanOfPayment|null findOneBy(array $criteria, array $orderBy = null)
 * @method MeanOfPayment[]    findAll()
 * @method MeanOfPayment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeanOfPaymentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MeanOfPayment::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('m')
            ->where('m.something = :value')->setParameter('value', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
