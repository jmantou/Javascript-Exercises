<?php
   	
	/*
 	* Static Final class that computes values in
 	* problems of Compound Interest.
 	*
 	* @author Ioannis A. Mantoudis
 	* @version 1
 	* @gmantds@gmail.com 
 	*/
 
 	class CompoundInterest
 	{
 	/*
	 * Computes Future Value - (FV) with Compound Interest.
	 *
	 * @param pv - Present Value - The present amount of money
	 * @param rate - Rate as a decimal number
	 * @param nper - Number of Time Periods as a decimal
	 * @return The Future Value in this investment
	 */
		static function fv($pv, $rate, $nper)
		{
			return ($pv * pow((1 + $rate), $nper)); 			
		}
	
	/*
	 * Computes Present Value - (PV) with compound Interest.
	 *
	 * @param fv - Future Value of Investment
	 * @param rate - Rate as a decimal number
	 * @param nper - Number of Time Periods as a decimal
	 * @return The Present Value of this investment
	 */
		static function pv($fv, $rate, $nper)
		{
			return ($fv / pow((1 + $rate), $nper));
		}
	
	/*
	 * Computes the Interest - (I) with Compound Interest.
	 *
	 * @param pv - Present Value of this investment
	 * @param rate - Rate as a decimal number
	 * @param nper - Number of Time Periods as a decimal
	 * @return The Interest of this Investment
	 */
		static function interest($pv, $rate, $nper)
		{
			return ($pv * (pow((1 + $rate), $nper) - 1));
		}
	
	/**
	 * Computes the Number of Periods in the investment given the other values.
	 *
	 * @param fv - Future Value of Investment
	 * @param pv - Present Value of this investment
	 * @param rate - Rate as a decimal number
	 * @return The Number of Time Periods as a decimal number
	 */
		static function numberOfPeriods($fv, $pv, $rate)
		{
			return ((log10($fv / $pv)) / (log10(1 + $rate)));
		}
	
	/**
	 * Computes the Rate of the investment given the other values.
	 *
	 * @param fv - Future Value of Investment
	 * @param pv - Present Value - The current amount of money in this investment
	 * @param nper - Number of Time Periods as a decimal
	 * @return The Rate of investment as a decimal number
	 */
		static function rate($fv, $pv, $nper)
		{	
			return (pow((fv / pv), (1 / nper)) - 1);
		}
 	}
?>