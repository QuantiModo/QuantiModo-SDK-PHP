<?php
/**
 * Friend
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * quantimodo
 *
 * We make it easy to retrieve and analyze normalized user data from a wide array of devices and applications. Check out our [docs and sdk's](https://github.com/QuantiModo/docs) or [contact us](https://help.quantimo.do).
 *
 * OpenAPI spec version: 5.8.112511
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QuantiModo\Client\Model;

use \ArrayAccess;
use \QuantiModo\Client\ObjectSerializer;

/**
 * Friend Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Friend implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Friend';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'initiator_user_id' => 'int',
        'friend_user_id' => 'int',
        'is_confirmed' => 'int',
        'is_limited' => 'int',
        'date_created' => 'string',
        'meta_data_array' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'initiator_user_id' => null,
        'friend_user_id' => null,
        'is_confirmed' => null,
        'is_limited' => null,
        'date_created' => null,
        'meta_data_array' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'initiator_user_id' => 'initiatorUserId',
        'friend_user_id' => 'friendUserId',
        'is_confirmed' => 'isConfirmed',
        'is_limited' => 'isLimited',
        'date_created' => 'dateCreated',
        'meta_data_array' => 'metaDataArray'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'initiator_user_id' => 'setInitiatorUserId',
        'friend_user_id' => 'setFriendUserId',
        'is_confirmed' => 'setIsConfirmed',
        'is_limited' => 'setIsLimited',
        'date_created' => 'setDateCreated',
        'meta_data_array' => 'setMetaDataArray'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'initiator_user_id' => 'getInitiatorUserId',
        'friend_user_id' => 'getFriendUserId',
        'is_confirmed' => 'getIsConfirmed',
        'is_limited' => 'getIsLimited',
        'date_created' => 'getDateCreated',
        'meta_data_array' => 'getMetaDataArray'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['initiator_user_id'] = isset($data['initiator_user_id']) ? $data['initiator_user_id'] : null;
        $this->container['friend_user_id'] = isset($data['friend_user_id']) ? $data['friend_user_id'] : null;
        $this->container['is_confirmed'] = isset($data['is_confirmed']) ? $data['is_confirmed'] : null;
        $this->container['is_limited'] = isset($data['is_limited']) ? $data['is_limited'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['meta_data_array'] = isset($data['meta_data_array']) ? $data['meta_data_array'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['initiator_user_id'] === null) {
            $invalidProperties[] = "'initiator_user_id' can't be null";
        }
        if ($this->container['friend_user_id'] === null) {
            $invalidProperties[] = "'friend_user_id' can't be null";
        }
        if ($this->container['is_confirmed'] === null) {
            $invalidProperties[] = "'is_confirmed' can't be null";
        }
        if ($this->container['is_limited'] === null) {
            $invalidProperties[] = "'is_limited' can't be null";
        }
        if ($this->container['date_created'] === null) {
            $invalidProperties[] = "'date_created' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id What do you expect?
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets initiator_user_id
     *
     * @return int
     */
    public function getInitiatorUserId()
    {
        return $this->container['initiator_user_id'];
    }

    /**
     * Sets initiator_user_id
     *
     * @param int $initiator_user_id What do you expect?
     *
     * @return $this
     */
    public function setInitiatorUserId($initiator_user_id)
    {
        $this->container['initiator_user_id'] = $initiator_user_id;

        return $this;
    }

    /**
     * Gets friend_user_id
     *
     * @return int
     */
    public function getFriendUserId()
    {
        return $this->container['friend_user_id'];
    }

    /**
     * Sets friend_user_id
     *
     * @param int $friend_user_id What do you expect?
     *
     * @return $this
     */
    public function setFriendUserId($friend_user_id)
    {
        $this->container['friend_user_id'] = $friend_user_id;

        return $this;
    }

    /**
     * Gets is_confirmed
     *
     * @return int
     */
    public function getIsConfirmed()
    {
        return $this->container['is_confirmed'];
    }

    /**
     * Sets is_confirmed
     *
     * @param int $is_confirmed What do you expect?
     *
     * @return $this
     */
    public function setIsConfirmed($is_confirmed)
    {
        $this->container['is_confirmed'] = $is_confirmed;

        return $this;
    }

    /**
     * Gets is_limited
     *
     * @return int
     */
    public function getIsLimited()
    {
        return $this->container['is_limited'];
    }

    /**
     * Sets is_limited
     *
     * @param int $is_limited What do you expect?
     *
     * @return $this
     */
    public function setIsLimited($is_limited)
    {
        $this->container['is_limited'] = $is_limited;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string $date_created What do you expect?
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets meta_data_array
     *
     * @return object[]
     */
    public function getMetaDataArray()
    {
        return $this->container['meta_data_array'];
    }

    /**
     * Sets meta_data_array
     *
     * @param object[] $meta_data_array Additional friend key-value data
     *
     * @return $this
     */
    public function setMetaDataArray($meta_data_array)
    {
        $this->container['meta_data_array'] = $meta_data_array;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


