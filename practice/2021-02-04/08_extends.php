<?php

class BankAccount {
    // public properties which can be accessed by child class
    public $passbook = array(); 
    public $balance = 7000;

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

    public function depositeMoney ($amount , $name) {
        $this->balance += $amount;
        echo $msg = $amount . ' rupees deposited in your bank account on ' . date('l d/m/y') . 'by' . $name . '<br> updated balance is : ' . $this->balance . '<br><br>';
        array_push($this->passbook, $msg);
    }

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

// SavingsAccount inherit BankAccount
class SavingsAccount extends BankAccount {
    public $interest = 0;
    public function quater_interest () {
        echo 'last balance was : '.$this->balance;
        $this->interest = $this->balance * 0.0096;
        echo '<br>3 month\'s interest is :'.$this->interest;
        $this->balance += ($this->balance * 0.0096);
        echo '<br>deposite interest to balance .... ';
        echo '<br>now the updates balance is :'.$this->balance;
    }
}

// create sub class' object
$rohit = new SavingsAccount();
$rohit->quater_interest();

?>