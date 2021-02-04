<?php

// created a class
class BankAccount {
    // private properties which can not be accessed outside the class
    private $passbook = array(); 
    private $balance = 7000;

    // public function / method which can be used outside the class
    public function withdrawMoney ($amount) {
        if($this->balance < $amount) {
            echo 'sorry, you don\'t have that much money'; 
        }
        else {
            $this->balance -= $amount;
            echo $msg = 'withdraw of rupees ' . $amount . ' on' . date('l d/m/y') . 'is done successfully. thank you <br> now the remaining balance is : ' . $this->balance . '<br><br>';
            array_push($this->passbook, $msg);
        }
    }

    // another public method function
    public function depositeMoney ($amount , $name) {
        $this->balance += $amount;
        echo $msg = $amount . ' rupees deposited in your bank account on ' . date('l d/m/y') . 'by' . $name . '<br> updated balance is : ' . $this->balance . '<br><br>';
        array_push($this->passbook, $msg);
    }

    // public method
    public function printPassbook() {
        echo '<br>YOUR PASSBOOK ENTERIES <br><br>';
        $i=1;
        foreach($this->passbook as $entry)
        {
            echo '<br>'. $i .'. ' . $entry;
            $i++;
        }
    }
}

// created object of class
$rohit = new BankAccount;

// used public method of class using object
$rohit->withdrawMoney(3500);

// used public method of class using object
$rohit->depositeMoney(2530 , 'prakashbhai lalwani');

// used public method of class using object
$rohit->printPassbook();

?>