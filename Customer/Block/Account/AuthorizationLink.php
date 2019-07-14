<?php
/**
 * Created by PhpStorm.
 * User: Alannguyen
 * Date: 6/9/2019
 * Time: 12:07 AM
 */

namespace Designer\Customer\Block\Account;

class AuthorizationLink extends \Magento\Customer\Block\Account\AuthorizationLink {

    public function getLabel()
    {
        return $this->isLoggedIn() ? __('See Ya!') : __('My Account');
    }

}