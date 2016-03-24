<?php
namespace Acme;

use Core;

class Validator
{
    public static function validate($data)
    {
        /** @var \Concrete\Core\Error\Error $vale */
        $vale = Core::make('helper/validation/error');
        /** @var \Concrete\Core\Utility\Service\Validation\Strings $vals */
        $vals = Core::make('helper/validation/strings');
        
        if (!$vals->notempty($data['name'])) {
            $vale->add(t('You must enter the name.'));
        }
        if (!$vals->notempty($data['email']) || !$vals->email($data['email'])) {
            $vale->add(t('You must enter the valid email.'));
        }
        
        return $vale;
    }
}