<?php

/**
 * Provides Rest Api for CMS
 * 
 * PHP version 5
 * 
 * @category   Module
 * @package    Api
 * @subpackage Controller
 * @author     Costrategix Team <team@costrategix.com>
 * @copyright  2015 CoS
 * @license    http://www.costrategix.com Proprietary 
 * @version    GIT: 1.7
 * @link       http://www.costrategix.com 
 * 
 */

namespace Api\Controller;

use Zend\View\Model\JsonModel;
use Api\Controller\AbstractCoreController as AbstractCoreController;
use Application\Model\Constant as Constant;

class LogoutController extends AbstractCoreController
{
    /**
     * check for user authentication
     *  
     * 
     * @return json Description
     */
    public function create()
    {
        $sessionGuid = $this->getValueFromHeader(Constant::USER_SESSION_GUID);
        $result = $this->getApiManagerService()->deleteUserSession($sessionGuid);
        return new JsonModel($result);
    }
 
    
}