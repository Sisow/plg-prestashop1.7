<?php

class Cart extends CartCore
{
    public function getDeliveryOption($default_country = null, $dontAutoSelectOptions = false, $use_cache = false)
    {
        return parent::getDeliveryOption(null, true, false);
    }
}