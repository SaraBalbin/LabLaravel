<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the examn primary key (id)
     * $this->attributes['name'] - string - contains the examn name
     * $this->attributes['price'] - int - contains the examn price
     * $this->attributes['ayuno'] - string - contains 'Si' or 'No'
     * $this->attributes['created_at'] - timestamp - contains the examn creation date
     * $this->attributes['updated_at'] - timestamp - contains the examn update date
     */

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    public function getAyuno()
    {
        return $this->attributes['ayuno'];
    }

    public function setAyuno($price)
    {
        $this->attributes['ayuno'] = $price;
    }

    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes['created_at'] = $createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}