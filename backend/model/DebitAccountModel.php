<?php
    namespace backend\model;

    class DebitAccountModel extends AccountModel{

        /*
            Debit account balance should never be less than 0
            also each year passed the total balance should be incremented by the interest
        */
    }
?>