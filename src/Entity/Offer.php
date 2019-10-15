<?php

namespace App\Entity;

class Offer {
	private $offerId;
	private $name;
	private $imageUrl;
	private $cashback;

	public function getId() {
		return $this->offerId;
	}

	public function getName() {
		return $this->name;
	}

	public function getImageUrl() {
		return $this->imageUrl;
	}

	public function getCashback() {
		return $this->cashback;
	}

	public function setId($offerId) {
		$this->offerId = $offerId;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function setImageUrl($imageUrl) {
		$this->imageUrl = $imageUrl;
	}

	public function setCashback($cashback) {
		$this->cashback = $cashback;
	}
}

?>