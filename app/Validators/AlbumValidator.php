<?php
/**
 * Album validator
 *
 * @package AlbumValidator
 */
namespace App\Validators;

/**
 * Album validator
 *
 * @package AlbumValidator
 *
 * @since 1.0.1
 */
class AlbumValidator extends Validator implements AlbumValidatorInterface
{
    /**
     * Function getRules
     *
     * @return array
     */
    public function getRules()
    {
        return ['name' => 'required|max:255|min:2'];
    }
}
