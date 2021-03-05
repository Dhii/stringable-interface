<?php

namespace Dhii\Util\String;

use Stringable;

/**
 * Something that can be cast to string.
 *
 * @since 0.1
 */
interface StringableInterface extends Stringable
{
    /**
     * This method will be ran when casting this object to string.
     *
     * This method {@link http://stackoverflow.com/a/2429735/565229 cannot throw an exception until PHP 8},
     * but can use `trigger_error()`.
     *
     * @since 0.1
     *
     * @return string A string representation of this object.
     */
    public function __toString();
}
