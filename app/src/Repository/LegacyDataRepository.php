<?php

namespace App\Repository;

use App\Entity\LegacyData;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class LegacyDataRepository.
 */
class LegacyDataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LegacyData::class);
    }
}
