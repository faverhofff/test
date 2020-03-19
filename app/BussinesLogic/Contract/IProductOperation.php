<?php

namespace App\BussinesLogic\Contract;

/**
 * Interface IProductOperation
 * @package App\BussinesLogic\Contract
 * @version March 14, 2020, 1:40 am UTC
*/

interface IProductOperation {

    public function perform(&$value);
    
}
