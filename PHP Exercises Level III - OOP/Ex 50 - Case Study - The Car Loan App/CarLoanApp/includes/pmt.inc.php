<?php
	
	class Pmt
	{
		public $pv;
		public $numberOfPayments;
		public $annualRate;
	
		function __construct($pv, $numberOfPayments, $annualRate)
		{
			$this->pv = $pv;
			$this->numberOfPayments = $numberOfPayments;
			$this->annualRate = $annualRate;
		}
	
		public function computePMT()
		{
			return (($this->pv * $this->annualRate) / (1 - (1 / pow(1 + $this->annualRate,$this->numberOfPayments))));
			// The above formula has been checked for correctness with example from OIK_MATH Book - I Mantoudis
		}
				
	}
	
	
?>