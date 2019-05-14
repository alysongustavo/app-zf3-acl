<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 13/05/2019
 * Time: 22:42
 */

namespace Admin\Entity\Fixture;


use Admin\Entity\Category;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCategory extends AbstractFixture implements OrderedFixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {

        $data = [
          'name' => 'Informatica',
          'stregistro' => 1
        ];

        $category = new Category([]);
        $category->setName('Informatica');
        $category->setStregistro(1);
        $manager->persist($category);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 2;
    }
}