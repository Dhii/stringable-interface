<?php

namespace Dhii\Util\String;

/**
 * Something that can be cast to string.
 *
 * @author Dhii Team <development@dhii.co>
 *
 * @since [*next-version*]
 */
interface StringableInterface
{
    /**
     * This method will be ran when casting this object to string.
     *
     * This method {@link http://stackoverflow.com/a/2429735/565229 cannot throw an exception},
     * but can use `trigger_error()`.
     *
     * @since [*next-version*]
     *
     * @return string A string representation of this object.
     */
    public function __toString();
}
