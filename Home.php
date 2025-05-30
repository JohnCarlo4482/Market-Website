<?php
abstract class Car { 
    abstract function getDetails(); 
    abstract function getImageFile(); 
    abstract function getBrand(); 
}

class Toyota extends Car {
    private $details = array("Reliable", "Affordable", "Hybrid Options", "Top Safety Ratings");
    private $image = "images/toyota.jpg";
    private $brand = "Toyota";
    private $price = "$20,000 - $35,000";

    public function getDetails() {
        return array_merge($this->details, ["Price: " . $this->price]);
    }

    public function getImageFile() {
        return $this->image;
    }

    public function getBrand() {
        return $this->brand;
    }
}

class Honda extends Car {
    private $details = array("Fuel Efficient", "Compact Models", "Affordable", "Durable Engines");
    private $image = "images/Honda.avif";
    private $brand = "Honda";
    private $price = "$18,000 - $32,000";

    public function getDetails() {
        return array_merge($this->details, ["Price: " . $this->price]);
    }

    public function getImageFile() {
        return $this->image;
    }

    public function getBrand() {
        return $this->brand;
    }
}

class BMW extends Car {
    private $details = array("Luxury", "High Performance", "Sporty Design", "Premium Features");
    private $image = "images/bmw.webp";
    private $brand = "BMW";
    private $price = "$40,000 - $80,000";

    public function getDetails() {
        return array_merge($this->details, ["Price: " . $this->price]);
    }

    public function getImageFile() {
        return $this->image;
    }

    public function getBrand() {
        return $this->brand;
    }
}

class Ford extends Car {
    private $details = array("American Brand", "Strong Build", "Versatile Trucks", "EcoBoost Engines");
    private $image = "images/Ford.webp";
    private $brand = "Ford";
    private $price = "$25,000 - $50,000";

    public function getDetails() {
        return array_merge($this->details, ["Price: " . $this->price]);
    }

    public function getImageFile() {
        return $this->image;
    }

    public function getBrand() {
        return $this->brand;
    }
}

class Tesla extends Car {
    private $details = array("Electric", "Autopilot", "Modern Design", "Sustainable Technology");
    private $image = "images/tesla.jpeg";
    private $brand = "Tesla";
    private $price = "$45,000 - $120,000";

    public function getDetails() {
        return array_merge($this->details, ["Price: " . $this->price]);
    }

    public function getImageFile() {
        return $this->image;
    }

    public function getBrand() {
        return $this->brand;
    }
}

$carList = [
    new Toyota(),
    new Honda(),
    new BMW(),
    new Ford(),
    new Tesla()
];
?>

