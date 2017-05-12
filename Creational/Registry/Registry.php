<?php

namespace DP\Creational\Registry;

/**
 * class of Registry
 *
 */
class Registry {
    
    /**
     * @var mixed[]
     */
    private static $items = array();

    /**
     * Add value to the Registry
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public static function set($key, $value)
    {
        self::$items[$key] = $value;
    }

    /**
     * Returns value from Registry by key
     * @param string $key
     * @return mixed
     */
    public static function get($key)
    {
        if(!isset(self::$items[$key]))
            throw new \InvalidArgumentException('Invalid key given');
        return self::$items[$key];
    }

    /**
     * Removes value from Registry by key
     * @param string $key
     * @return void
     */
    final public static function remove($key)
    {
        if(!array_key_exists($key, self::$items)){
            throw new \InvalidArgumentException('Invalid key given');
        }
        unset(self::$items[$key]);
    }
}
