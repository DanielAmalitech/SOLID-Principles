<?php

/**
 * Antelope
 */
class Antelope
{
    private $name;
    private $type;
    private $color;
    private $size;

    private $location;

    /**
     * getName
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * getType
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * getColor
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    
    /**
     * getSize
     *
     * @return void
     */
    public function getSize()
    {
        return $this->size;
    }

    // Setters (if needed)    
    /**
     * setName
     *
     * @param  mixed $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * setType
     *
     * @param  mixed $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * setColor
     *
     * @param  mixed $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

   public function setSize($size)
   {
    $this->size = $size;

   }
   public function setLocation($location)
   {

    $this->location = $location;
   }

}
