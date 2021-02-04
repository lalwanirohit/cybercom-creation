<?php

// class 
class BankAccount {
    /* 
    constant
    we can declare constant using const keyword
    it is not necessary but generally constant names are kept all capital. ( not compulsary )
    we can use const keyword inside class using self::<constant name>
    we can use constant outside tha function like , classname followed by scope resolution operator (::) and then constant name
    example : BankAccount::ACCOUNT_NUMBER; 
    */

    public const ACCOUNT_NUMBER = 312256761248;
    private const SAVING_ACCOUNT_NUMBER = 768594231589;

    //function to display constant values
    public function showConstant () {
        echo 'Account Number is : ' . self::ACCOUNT_NUMBER;
        echo '<br>Saving Account Number is : ' . self::SAVING_ACCOUNT_NUMBER;
    }
}

// object of class BankAccount
$rohit = new BankAccount;
$rohit->showConstant();

// we can use public constant outside the class with class name
echo '<br>' . BankAccount::ACCOUNT_NUMBER;

// it will generate error because we can not use private constant outside the class
// echo BankAccount::SAVING_ACCOUNT_NUMBER;

?>