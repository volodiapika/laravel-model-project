<?php
/**
 * Validator
 *
 * @package Validator
 */
namespace App\Validators;

/**
 * Validator
 *
 * @package Validator
 *
 * @since 1.0.1
 */
abstract class Validator implements ValidatorInterface
{
    /**
     * The protected data
     *
     * @var array $data
     */
    protected $data;

    /**
     * The public errors
     *
     * @var array $errors
     */
    public $errors;

    /**
     * Construct validator
     *
     * @param array $input
     *
     * @return void
     */
    public function __construct(array $input = null)
    {
        $this->data = $input;
    }

    /**
     * Function getRules
     *
     * @return array
     */
    public function getRules()
    {
        return [];
    }

    /**
     * Function passes
     *
     * @return boolean
     */
    public function passes()
    {
        $validation = \Validator::make($this->data, $this->getRules());
        if ($validation->passes()) {
            return true;
        }
        $this->errors = $validation->messages();
        return false;
    }
}
