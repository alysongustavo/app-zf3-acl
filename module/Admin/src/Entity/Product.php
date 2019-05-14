<?php
/**
 * Created by PhpStorm.
 * User: Alyson
 * Date: 13/05/2019
 * Time: 22:56
 */

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Hydrator\ClassMethods;


/**
 * Class Product
 * @package Admin\Entity
 * @ORM\Entity(repositoryClass="Admin\Repository\ProductRepository")
 * @ORM\Table(name="product")
 */
class Product
{

    private $id;

    private $name;

    private $category;

    private $price;

    private $quantity;

    private $photo;

    private $stregistro;

    /**
     * Product constructor.
     */
    public function __construct(array $data)
    {
        $hydrator = new ClassMethods();
        $hydrator->hydrate($data, $this);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
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
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
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

    public function toArray()
    {
        $hydrator = new ClassMethods();
        return $hydrator->extract($this);
    }


}