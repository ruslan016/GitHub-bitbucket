<?php
/**
 * Pop PHP Framework (http://www.popphp.org/)
 *
 * @link       https://github.com/popphp/popphp-framework
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2020 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 */

/**
 * @namespace
 */
namespace Pop\Validator;

/**
 * Length between validator class
 *
 * @category   Pop
 * @package    Pop\Validator
 * @author     Nick Sagona, III <dev@nolainteractive.com>
 * @copyright  Copyright (c) 2009-2020 NOLA Interactive, LLC. (http://www.nolainteractive.com)
 * @license    http://www.popphp.org/license     New BSD License
 * @version    3.1.2
 */
class LengthBetween extends AbstractValidator
{

    /**
     * Method to evaluate the validator
     *
     * @param  mixed $input
     * @throws Exception
     * @return boolean
     */
    public function evaluate($input = null)
    {
        if (!is_array($this->value)) {
            throw new Exception('The value must be an array.');
        } else if (count($this->value) != 2) {
            throw new Exception('The value must be an array that contains 2 values.');
        }

        // Set the input, if passed
        if (null !== $input) {
            $this->input = $input;
        }

        // Set the default message
        if (null === $this->message) {
            $this->message = 'The value length must be between ' . $this->value[0] . ' and ' . $this->value[1] . '.';
        }

        return ((strlen($this->input) > $this->value[0]) && (strlen($this->input) < $this->value[1]));
    }

}
