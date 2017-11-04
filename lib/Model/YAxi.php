<?php
/**
 * YAxi
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * quantimodo
 *
 * We make it easy to retrieve and analyze normalized user data from a wide array of devices and applications. Check out our [docs and sdk's](https://github.com/QuantiModo/docs) or [contact us](https://help.quantimo.do).
 *
 * OpenAPI spec version: 5.8.100414
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QuantiModo\Client\Model;

use \ArrayAccess;

/**
 * YAxi Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class YAxi implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'YAxi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_width' => 'int',
        'max' => 'double',
        'min' => 'double',
        'opposite' => 'bool',
        'title' => '\QuantiModo\Client\Model\Title'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_width' => null,
        'max' => 'double',
        'min' => 'double',
        'opposite' => null,
        'title' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'line_width' => 'lineWidth',
        'max' => 'max',
        'min' => 'min',
        'opposite' => 'opposite',
        'title' => 'title'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'line_width' => 'setLineWidth',
        'max' => 'setMax',
        'min' => 'setMin',
        'opposite' => 'setOpposite',
        'title' => 'setTitle'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'line_width' => 'getLineWidth',
        'max' => 'getMax',
        'min' => 'getMin',
        'opposite' => 'getOpposite',
        'title' => 'getTitle'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['line_width'] = isset($data['line_width']) ? $data['line_width'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['opposite'] = isset($data['opposite']) ? $data['opposite'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['line_width'] === null) {
            $invalid_properties[] = "'line_width' can't be null";
        }
        if ($this->container['max'] === null) {
            $invalid_properties[] = "'max' can't be null";
        }
        if ($this->container['min'] === null) {
            $invalid_properties[] = "'min' can't be null";
        }
        if ($this->container['opposite'] === null) {
            $invalid_properties[] = "'opposite' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalid_properties[] = "'title' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['line_width'] === null) {
            return false;
        }
        if ($this->container['max'] === null) {
            return false;
        }
        if ($this->container['min'] === null) {
            return false;
        }
        if ($this->container['opposite'] === null) {
            return false;
        }
        if ($this->container['title'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets line_width
     * @return int
     */
    public function getLineWidth()
    {
        return $this->container['line_width'];
    }

    /**
     * Sets line_width
     * @param int $line_width Example: 1
     * @return $this
     */
    public function setLineWidth($line_width)
    {
        $this->container['line_width'] = $line_width;

        return $this;
    }

    /**
     * Gets max
     * @return double
     */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
     * Sets max
     * @param double $max Example: 372.68
     * @return $this
     */
    public function setMax($max)
    {
        $this->container['max'] = $max;

        return $this;
    }

    /**
     * Gets min
     * @return double
     */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
     * Sets min
     * @param double $min Example: -2.68
     * @return $this
     */
    public function setMin($min)
    {
        $this->container['min'] = $min;

        return $this;
    }

    /**
     * Gets opposite
     * @return bool
     */
    public function getOpposite()
    {
        return $this->container['opposite'];
    }

    /**
     * Sets opposite
     * @param bool $opposite Example: true
     * @return $this
     */
    public function setOpposite($opposite)
    {
        $this->container['opposite'] = $opposite;

        return $this;
    }

    /**
     * Gets title
     * @return \QuantiModo\Client\Model\Title
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param \QuantiModo\Client\Model\Title $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\QuantiModo\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\QuantiModo\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


