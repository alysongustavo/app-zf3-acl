<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 13/05/2019
 * Time: 22:37
 */

namespace Admin\Service;


use Admin\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;

class CategoryService
{

    private $entityManager;
    private $categoryRepository;

    public function __construct(EntityManagerInterface $entityManagerInterface)
    {
        $this->entityManager = $entityManagerInterface;
        $this->categoryRepository = $entityManagerInterface->getRepository(Category::class);
    }
}