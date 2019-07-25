<?php

class Person {

	private $personId;
	private $personEmail;

	public function __construct (string $newPersonID,  string $newPersonEmail) {
		$this->setPersonId($newPersonID);
		$this->setPersonEmail($newPersonEmail);
			echo "New Person";
	}

	public function getPersonId() : string {
		return $this->personId;
	}
	public function setPersonId(string $newPersonId) :void {
		$this->personId = $newPersonId;
	}
	public function getPersonEmail() :string {
		return $this-> $personEmail;
	}
	public function setPersonEmail(string $newPersonEmail)  :void {
		$this->personEmail = $newPersonEmail;
	}
	public function concat(): string {
		return $this->person . (string)$this->person;
	}

	}


​
class Snowboard {
	private $price;
	private $cost;

	// constructor method
	public function __construct(float $newPrice, float $newCost) {
		$this->setPrice($newPrice);
		$this->setCost($newCost);
	}

	//getters
	public function getPrice(): float {
		return ($this->price);
	}

	public function getCost(): float {
		return ($this->cost);
	}

	//setters
	public function setPrice(float $newPrice): void {
		$this->price = $newPrice;
	}

	public function setCost(float $newCost): void {
		$this->cost = $newCost;
	}

	// profit method
	public function profit(): float {
		return ($this->price - $this->cost);
	}

}
​
$customBoard = new Snowboard(1000, 400);
echo $customBoard->getPrice() . "-" . $customBoard->getCost() . "=" . $customBoard->profit();
​
$customBoard->profit();


class Doll {
	private $bar;
	private $baz;

	public function __construct(string $newBar, int $newBaz) {
		$this->setBar($newBaz);
		$this->setBaz($newBar);
		echo "I am Groot";
	}

	public function getBar(): string {
		return $this->bar;
	}

	public function setBar(string $newBar): void {
		$this->bar = $newBar;
	}

	public function getBaz(): int {
		return $this->baz;
	}

	public function setBaz($newBaz): void {
		$this->baz = $newBaz;
	}

	public function concat(): string {
		return $this->bar . (string)$this->baz;
	}
}

$doll = new Doll("string", 123345);
var_dump($doll);
echo $doll->concat();
