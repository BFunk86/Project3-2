<?php

    /**
     * The Change class is used to calculate the largest amount of each denomination to give back to a customer.
     * Author: Brandon Young
     */
    class Change {

        // An array holding the different amount of currencies available
        private $currency = array(
            "$100 Bill" => 100, "$50 Bill" => 50, "$20 Bill" => 20, "$10 Bill" => 10,
            "$5 Bill" => 5, "$1 Bill" => 1, "Quarters" => .25, "Dimes" => .10, "Nickles" => .05, "Pennies" => .01);

        // The amount of money owed by the customer
        private $owed = 0;

        // The amount of money paid
        private $paid = 0;

        // Value that holds change amount to give back to customer
        private $change = 0;



        /**
         * Change constructor.
         * @param $owed: The total amount owed by the customer
         * @param $paid: The total amount paid by the customer
         */
        public function __construct($owed, $paid) {
            $this->owed = $owed;
            $this->paid = $paid;
        } // end __construct

        /**
         * The getCurrency method is used to return an array of different US Currencies
         * @return array: An array containing each US Currencies, from the penny to the 100 dollar bill
         */
        public function getCurrency() {
            return $this->currency;
        } // end getCurrency

        /**
         * The getOwed method returns the total amount of money owed by the customer
         * @return int: The total amount owed by the customer
         */
        public function getOwed() {
            return $this->owed;
        } // end getOwed

        /**
         * The setOwed method lets you set the total amount of money owed by the customer
         * @param int $owed: The total amount owed by the customer
         */
        public function setOwed(int $owed) {
            $this->owed = $owed;
        } // end setOwed

        /**
         * The getPaid method is used to return the amount paid by the customer
         * @return int: The amount paid by the customer
         */
        public function getPaid() {
            return $this->paid;
        } // end getPaid

        /**
         * The setPaid method is used to set the amount of money paid by the customer.
         * @param int $paid: The amount of money paid by the customer.
         */
        public function setPaid(int $paid) {
            $this->paid = $paid;
        } // end setPaid

        /**
         * The getChange amount calculates the change to give back to the customer.
         * PreCondition: The value of owed and paid must be set before using this method
         * Post Condition: The total amount of change is returned.
         * @param $owed: The total amount owed by the customer
         * @param $paid: The total amount paid by the customer
         * @return array: An array containing the output to display change
         */
        public function getChange() {
            $result = array();
            if($this->paid < $this->owed) {
                $result[] = "The amount paid must be greater than or equal too the amount owed";
            } else if ($this->paid < $this->owed) {
                $this->change = 0;
                $result[] = "There is no change to give back";
            } else {
                // Calculate the change
                $this->change = ($this->paid - $this->owed);
                // Add the result to the result array
                $result[] = "The price of the transaction was $" . round($this->owed, 2);
                $result[] = "The amount paid was $" . round($this->paid, 2);
                $result[] = "The change due is $" . round($this->change, 2);
                $result[] = "Return the following denomination as change:";
                // loop through the currency array and use the value to calculate the change that is due
                foreach($this->currency as $key => $value) {
                    // Check if change is greater than or equal to current currency
                    if($this->change >= $value) {
                        // Divide the current change amount by the value of the current currency
                        $amount = floor($this->change / $value);
                        // add the amount of currency and what it is to the result array
                        $result[] = "$amount " . $key;
                        // update the amount of change left
                        $this->change -= $value * $amount;
                    } // end if
                } // end foreach
            } // end if else
            return $result;
        } // end getChange function

    } // enc Change Class