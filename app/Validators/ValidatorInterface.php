<?php
/**
 * Validator interface
 *
 * @package ValidatorInterface
 */
namespace App\Validators;

/**
 * Validator Interface
 *
 * @package ValidatorInterface
 *
 * @since 1.0.1
 */
interface ValidatorInterface
{
    /**
     * Function getRules
     *
     * @return array
     */
    public function getRules();

    /**
     * Function passes
     *
     * @return boolean
     */
    public function passes();
}
