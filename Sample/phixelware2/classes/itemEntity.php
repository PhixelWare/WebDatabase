<?php

	/**
	 * @author Karim
	 * php setter and getter class OOP for web transaction system
	 * @copyright PHIXELWARE INC.
	 * @version 1.0
	 * @date 11/27/2014
	 *	
	 */
	class Item{
		
		private $transactRecord;
		private $transactionNumber;
		private $paintColor;
		private $volume;
		private $price;
		private $quantity;
		private $totalCost;
		private $date;
		private $branch;
		private $cashier;
		private $state;
		private $comment;
		
		
		public function __construct(){}
		public function __construct($transactRecord,$transactionNumber,$paintColor,
				$volume,$price,$quantity,$totalCost,$date,$branch,$cashier,
				$state,$comment){
			$this->setTransactionRecord($transactRecord);
			$this->setTransactionNumber($transactionNumber);
			$this->setPaintColor($paintColor);
			$this->setVolume($volume);
			$this->setPrice($price);
			$this->setQuantity($quantity);
			$this->setTotalCost($totalCost);
			$this->setDate($date);
			$this->setBranch($branch);
			$this->setCashier($cashier);
			$this->setState($state);
			$this->setComment($comment);
		}
		
		public function setTransactionRecord($transactRecord){
			$this->transactRecord = $transactRecord;
		}
		
		public function getTransactionRecord(){
			return $this->transactRecord;
		}
		
		public function setTransactionNumber($transactionNumber){
			$this->transactionNumber = $transactionNumber;
		}
		
		public function getTransactionNumber(){
			return $this->transactionNumber;
		}
		
		public function setPaintColor($paintColor){
			$this->paintColor = $paintColor;
		}
		
		public function getPaintColor(){
			return $this->paintColor;
		}
		
		public function setVolume($volume){
			$this->volume = $volume;
		}
		
		public function getVolume(){
			return $this->volume;
		}
		
		public function setPrice($price){
			$this->price = $price;
		}
		
		public function getPrice(){
			return $this->price;
		}
		
		public function setQuantity($quantity){
			$this->quantity = $quantity;
		}
		
		public function getQuantity(){
			return $this->quantity;
		}
		
		public function setTotalCost($totalCost){
			$this->totalCost = $totalCost;
		}
		
		public function getTotalCost(){
			return $this->totalCost;
		}
		
		public function setDate($date){
			$this->date = $date;
		}
		
		public function getDate(){
			return $this->date;
		}
		
		public function setBranch($branch){
			$this->branch = $branch;
		}
		
		public function getBranch(){
			return $this->branch;
		}
		
		public function setCashier($cashier){
			$this->cashier = $cashier;
		}
		
		public function getCashier(){
			return $this->cashier;
		}
		
		public function setState($state){
			$this->state = $state;
		}
		
		public function getState(){
			return $this->state;
		}
		
		public function setComment($comment){
			$this->comment = $comment;
		}
		
		public function getComment(){
			return $this->comment;
		}
	}
	
?>