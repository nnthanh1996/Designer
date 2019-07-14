var config = {
    'config': {
        'mixins': {
            'Magento_Checkout/js/view/shipping': {
                'Designer_Checkout/js/view/shipping-payment-mixin': true
            },
            'Magento_Checkout/js/view/payment': {
                'Designer_Checkout/js/view/shipping-payment-mixin': true
            }
        }
    }
}
