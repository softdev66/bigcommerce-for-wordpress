<?php
/**
 * ProductImageBase
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce API
 *
 * A Swagger Document for the BigCommmerce v3 API.
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

/**
 * ProductImageBase Class Doc Comment
 *
 * @category    Class */
 // @description Common ProductImage properties.
/**
 * @package     BigCommerce\Api\v3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductImageBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductImageBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_thumbnail' => 'bool',
        'sort_order' => 'int',
        'description' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'is_thumbnail' => 'is_thumbnail',
        'sort_order' => 'sort_order',
        'description' => 'description'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'is_thumbnail' => 'setIsThumbnail',
        'sort_order' => 'setSortOrder',
        'description' => 'setDescription'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'is_thumbnail' => 'getIsThumbnail',
        'sort_order' => 'getSortOrder',
        'description' => 'getDescription'
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
        $this->container['is_thumbnail'] = isset($data['is_thumbnail']) ? $data['is_thumbnail'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!is_null($this->container['sort_order']) && ($this->container['sort_order'] > 2147483647)) {
            $invalid_properties[] = "invalid value for 'sort_order', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['sort_order']) && ($this->container['sort_order'] < -2147483648)) {
            $invalid_properties[] = "invalid value for 'sort_order', must be bigger than or equal to -2147483648.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['sort_order'] > 2147483647) {
            return false;
        }
        if ($this->container['sort_order'] < -2147483648) {
            return false;
        }
        return true;
    }


    /**
     * Gets is_thumbnail
     * @return bool
     */
    public function getIsThumbnail()
    {
        return $this->container['is_thumbnail'];
    }

    /**
     * Sets is_thumbnail
     * @param bool $is_thumbnail Flag for identifying whether the image is used as the product's thumbnail.
     * @return $this
     */
    public function setIsThumbnail($is_thumbnail)
    {
        $this->container['is_thumbnail'] = $is_thumbnail;

        return $this;
    }

    /**
     * Gets sort_order
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     * @param int $sort_order The order in which the image will be displayed on the product page. Higher integers give the image a lower priority. When updating, if the image is given a lower priority, all images with a `sort_order` the same as or greater than the image's new `sort_order` value will have their `sort_order`s reordered.
     * @return $this
     */
    public function setSortOrder($sort_order)
    {

        if (!is_null($sort_order) && ($sort_order > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ProductImageBase., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($sort_order) && ($sort_order < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ProductImageBase., must be bigger than or equal to -2147483648.');
        }

        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description The description for the image.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


