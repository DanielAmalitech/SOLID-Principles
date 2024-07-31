<?php

require_once 'Antelope.php'; 
require_once 'AntelopeValidator.php'; // Adjust the path as per your file structure
require_once 'NameValidator.php';
require_once 'TypeValidator.php';
require_once 'ColorValidator.php';
require_once 'SizeValidator.php';
require_once 'LocationValidator.php';



class CreateAntelope
{
    public $data = [];

    public function create()
    {
        $this->data["name"] = "BoBo Beans";
        $this->data["type"] = "See";
        $this->data["color"] = "Blue";
        $this->data["size"] = 0;
        $this->data["location"] = "Accra";

        $antelopeValidator = new AntelopeValidator();
        $antelopeValidator->addRule(new ColorValidator());
        $antelopeValidator->addRule(new SizeValidator());
        $antelopeValidator->addRule(new NameValidator());
        $antelopeValidator->addRule(new LocationValidator());
        
        //call the validate method in the call
        $response = $antelopeValidator->validate($this->data);

        if ($response[0] === true && $response[1] === true && $response[2] === true&& $response[3] === true) {
            echo "Antelope created successfully \n";
            $antelope = new Antelope();
            $antelope->setName($this->data["name"]);
            $antelope->setType($this->data["type"]);
            $antelope->setColor($this->data["color"]);
            $antelope->setSize($this->data["size"]);
            $antelope->setLocation($this->data["location"]);

            return $antelope;
        }else{
            echo "Antelope validation failed \n";
            return $response;
        }

       
    }
}

$createAntelope = new CreateAntelope();
$createdAntelope = $createAntelope->create();

if ($createdAntelope !== "") {
    echo var_dump($createdAntelope);
} 
