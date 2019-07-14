<?php
/**
 * Created by PhpStorm.
 * User: Alannguyen
 * Date: 7/13/2019
 * Time: 2:49 PM
 */

namespace Designer\CustomContact\Block;

use Magento\Contact\Block\ContactForm as ContactForm;

class CustomContactForm extends ContactForm {

    public function getFormAction()
    {
        return $this->getUrl('custom_contact/index/post', ['_secure' => true]);
    }

}