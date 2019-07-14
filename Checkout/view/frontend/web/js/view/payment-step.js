define([
    'ko',
    'uiComponent',
    'underscore',
    'Magento_Checkout/js/model/step-navigator'
], function(ko, Component, _, stepNavigator){
    'use strict';

   return Component.extend({

       defaults: {
           template: 'Designer_Checkout/payment-step'
       },

       isVisible: ko.observable(true),

       initialize: function() {

            this._super();

            stepNavigator.registerStep(
                'payment-step',
                null,
                'Payment Chosen',
                this.isVisible,
                _.bind(this.navigate, this),
                5
            );

            return this;
        },

        navigate: function() {
            this.isVisible(true)
        },

        navigateToNextStep: function() {
            stepNavigator.next();
        }

   });
})