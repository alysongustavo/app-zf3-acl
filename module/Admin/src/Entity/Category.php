<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 13/05/2019
 * Time: 22:32
 */

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Hydrator\ClassMethods;

/**
 * Class Category
 * @package Admin\Entity
 * @ORM\Entity(repositoryClass="Admin\Repository\CategoryRepository")
 * @ORM\Table(name="category")
 *
 */
class Category
{

    /**
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", nullable=false, length=60)
     */
    private $name;

    /**
     * @var integer
     * @ORM\Column(name="stregistro", nullable=false)
     */
    private $stregistro;

    /**
     * Category constructor.
     * @param $name
     * @param $stregistro
     */
    public function __construct(array $data)
    {
      $hydrator = new ClassMethods();
      $hydrator->hydrate($data, $this);
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getStregistro()
    {
        return $this->stregistro;
    }

    /**
     * @param mixed $stregistro
     */
    public function setStregistro($stregistro)
    {
        $this->stregistro = $stregistro;
    }

    public function toArray(){
        $hydrator = new ClassMethods();
        return $hydrator->extract($this);
    }

}