<?php
/**
 * Photo validator
 *
 * @package PhotoValidator
 */
namespace App\Validators;

/**
 * Photo validator
 *
 * @package PhotoValidator
 *
 * @since 1.0.1
 */
class PhotoValidator extends Validator implements PhotoValidatorInterface
{
    /**
     * Function getRules
     *
     * @return array
     */
    public function getRules()
    {
        return [
            'id' => 'integer',
            'url' => 'required|max:1000',
            'name' => 'required|max:255|min:2',
        ];
    }
}
