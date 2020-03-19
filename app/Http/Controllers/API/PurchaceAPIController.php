<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\PurchaceProductsAPIRequest;
use App\Http\Controllers\AppBaseController;
use App\Services\PurchaceService;
use Response;

/**
 * Class PurchaseAPIController
 * @package App\Http\Controllers\API
 */

class PurchaceAPIController extends AppBaseController
{
    /** @var PurchaseService */
    private $purchaseService;

    /**
     * PurchaseAPIController constructor.
     * @param PurchaseService $purchaseService
     */
    public function __construct(PurchaceService $purchaseService)
    {
        $this->purchaseService = $purchaseService;
    }

    /**
     * Buy products
     * @param PurchaceProductsAPIRequest $request
     */
    public function buy(PurchaceProductsAPIRequest $request)
    {
        /** 
         * $idClient must be the current usrer logged 
         * the real code:
         * $idClient = Auth::id()
         */
        $idClient = 1;
        /** in this case we set up to 1 */

        $this->purchaseService->markAsBuy($idClient, $request);
    }
        
}
