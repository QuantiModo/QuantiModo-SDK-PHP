<?php
/**
 * GroupsMember
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
 * GroupsMember Class Doc Comment
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GroupsMember implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GroupsMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'group_id' => 'int',
        'user_id' => 'int',
        'inviter_id' => 'int',
        'is_admin' => 'int',
        'is_mod' => 'int',
        'user_title' => 'string',
        'date_modified' => 'string',
        'comments' => 'string',
        'is_confirmed' => 'int',
        'is_banned' => 'int',
        'invite_sent' => 'int',
        'meta_data_array' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'group_id' => null,
        'user_id' => null,
        'inviter_id' => null,
        'is_admin' => null,
        'is_mod' => null,
        'user_title' => null,
        'date_modified' => null,
        'comments' => null,
        'is_confirmed' => null,
        'is_banned' => null,
        'invite_sent' => null,
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
        'group_id' => 'groupId',
        'user_id' => 'userId',
        'inviter_id' => 'inviterId',
        'is_admin' => 'isAdmin',
        'is_mod' => 'isMod',
        'user_title' => 'userTitle',
        'date_modified' => 'dateModified',
        'comments' => 'comments',
        'is_confirmed' => 'isConfirmed',
        'is_banned' => 'isBanned',
        'invite_sent' => 'inviteSent',
        'meta_data_array' => 'metaDataArray'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'group_id' => 'setGroupId',
        'user_id' => 'setUserId',
        'inviter_id' => 'setInviterId',
        'is_admin' => 'setIsAdmin',
        'is_mod' => 'setIsMod',
        'user_title' => 'setUserTitle',
        'date_modified' => 'setDateModified',
        'comments' => 'setComments',
        'is_confirmed' => 'setIsConfirmed',
        'is_banned' => 'setIsBanned',
        'invite_sent' => 'setInviteSent',
        'meta_data_array' => 'setMetaDataArray'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'group_id' => 'getGroupId',
        'user_id' => 'getUserId',
        'inviter_id' => 'getInviterId',
        'is_admin' => 'getIsAdmin',
        'is_mod' => 'getIsMod',
        'user_title' => 'getUserTitle',
        'date_modified' => 'getDateModified',
        'comments' => 'getComments',
        'is_confirmed' => 'getIsConfirmed',
        'is_banned' => 'getIsBanned',
        'invite_sent' => 'getInviteSent',
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
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['inviter_id'] = isset($data['inviter_id']) ? $data['inviter_id'] : null;
        $this->container['is_admin'] = isset($data['is_admin']) ? $data['is_admin'] : null;
        $this->container['is_mod'] = isset($data['is_mod']) ? $data['is_mod'] : null;
        $this->container['user_title'] = isset($data['user_title']) ? $data['user_title'] : null;
        $this->container['date_modified'] = isset($data['date_modified']) ? $data['date_modified'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['is_confirmed'] = isset($data['is_confirmed']) ? $data['is_confirmed'] : null;
        $this->container['is_banned'] = isset($data['is_banned']) ? $data['is_banned'] : null;
        $this->container['invite_sent'] = isset($data['invite_sent']) ? $data['invite_sent'] : null;
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
        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['inviter_id'] === null) {
            $invalidProperties[] = "'inviter_id' can't be null";
        }
        if ($this->container['is_admin'] === null) {
            $invalidProperties[] = "'is_admin' can't be null";
        }
        if ($this->container['is_mod'] === null) {
            $invalidProperties[] = "'is_mod' can't be null";
        }
        if ($this->container['user_title'] === null) {
            $invalidProperties[] = "'user_title' can't be null";
        }
        if ($this->container['date_modified'] === null) {
            $invalidProperties[] = "'date_modified' can't be null";
        }
        if ($this->container['comments'] === null) {
            $invalidProperties[] = "'comments' can't be null";
        }
        if ($this->container['is_confirmed'] === null) {
            $invalidProperties[] = "'is_confirmed' can't be null";
        }
        if ($this->container['is_banned'] === null) {
            $invalidProperties[] = "'is_banned' can't be null";
        }
        if ($this->container['invite_sent'] === null) {
            $invalidProperties[] = "'invite_sent' can't be null";
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
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id What do you expect?
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id What do you expect?
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets inviter_id
     *
     * @return int
     */
    public function getInviterId()
    {
        return $this->container['inviter_id'];
    }

    /**
     * Sets inviter_id
     *
     * @param int $inviter_id What do you expect?
     *
     * @return $this
     */
    public function setInviterId($inviter_id)
    {
        $this->container['inviter_id'] = $inviter_id;

        return $this;
    }

    /**
     * Gets is_admin
     *
     * @return int
     */
    public function getIsAdmin()
    {
        return $this->container['is_admin'];
    }

    /**
     * Sets is_admin
     *
     * @param int $is_admin What do you expect?
     *
     * @return $this
     */
    public function setIsAdmin($is_admin)
    {
        $this->container['is_admin'] = $is_admin;

        return $this;
    }

    /**
     * Gets is_mod
     *
     * @return int
     */
    public function getIsMod()
    {
        return $this->container['is_mod'];
    }

    /**
     * Sets is_mod
     *
     * @param int $is_mod What do you expect?
     *
     * @return $this
     */
    public function setIsMod($is_mod)
    {
        $this->container['is_mod'] = $is_mod;

        return $this;
    }

    /**
     * Gets user_title
     *
     * @return string
     */
    public function getUserTitle()
    {
        return $this->container['user_title'];
    }

    /**
     * Sets user_title
     *
     * @param string $user_title What do you expect?
     *
     * @return $this
     */
    public function setUserTitle($user_title)
    {
        $this->container['user_title'] = $user_title;

        return $this;
    }

    /**
     * Gets date_modified
     *
     * @return string
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     *
     * @param string $date_modified What do you expect?
     *
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments What do you expect?
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

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
     * Gets is_banned
     *
     * @return int
     */
    public function getIsBanned()
    {
        return $this->container['is_banned'];
    }

    /**
     * Sets is_banned
     *
     * @param int $is_banned What do you expect?
     *
     * @return $this
     */
    public function setIsBanned($is_banned)
    {
        $this->container['is_banned'] = $is_banned;

        return $this;
    }

    /**
     * Gets invite_sent
     *
     * @return int
     */
    public function getInviteSent()
    {
        return $this->container['invite_sent'];
    }

    /**
     * Sets invite_sent
     *
     * @param int $invite_sent What do you expect?
     *
     * @return $this
     */
    public function setInviteSent($invite_sent)
    {
        $this->container['invite_sent'] = $invite_sent;

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
     * @param object[] $meta_data_array Additional groupsmember key-value data
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


