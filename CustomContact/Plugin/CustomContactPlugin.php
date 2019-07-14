<?php
/**
 * Created by PhpStorm.
 * User: Alannguyen
 * Date: 7/14/2019
 * Time: 12:26 PM
 */

namespace Designer\CustomContact\Plugin;
use Magento\Framework\App\RequestInterface as RequestInterface;

class CustomContactPlugin {

    private $anotherEmailSender = "nnthanh1996@gmail.com";
    private $contactsConfig;
    private $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    public function afterEmailRecipient(\Magento\Contact\Model\Config $subject, $result) {

        $requestData = $this->request->getParams();

        if($requestData["subject"] == 'Complain') {
            $result = $this->anotherEmailSender;
        }

        return $result;
    }

}