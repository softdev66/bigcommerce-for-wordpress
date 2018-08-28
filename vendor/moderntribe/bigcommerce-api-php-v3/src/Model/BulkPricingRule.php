<?php
/**
 * BulkPricingRule
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
 * BulkPricingRule Class Doc Comment
 *
 * @category    Class */
 // @description Rules that offer price discounts based on quantity breaks.
/**
 * @package     BigCommerce\Api\v3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkPricingRule implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BulkPricingRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity_min' => 'int',
        'quantity_max' => 'int',
        'type' => 'string',
        'amount' => 'double',
        'id' => 'int'
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
        'quantity_min' => 'quantity_min',
        'quantity_max' => 'quantity_max',
        'type' => 'type',
        'amount' => 'amount',
        'id' => 'id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'quantity_min' => 'setQuantityMin',
        'quantity_max' => 'setQuantityMax',
        'type' => 'setType',
        'amount' => 'setAmount',
        'id' => 'setId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'quantity_min' => 'getQuantityMin',
        'quantity_max' => 'getQuantityMax',
        'type' => 'getType',
        'amount' => 'getAmount',
        'id' => 'getId'
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

    const TYPE_PRICE = 'price';
    const TYPE_PERCENT = 'percent';
    const TYPE_FIXED = 'fixed';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PRICE,
            self::TYPE_PERCENT,
            self::TYPE_FIXED,
        ];
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
        $this->container['quantity_min'] = isset($data['quantity_min']) ? $data['quantity_min'] : null;
        $this->container['quantity_max'] = isset($data['quantity_max']) ? $data['quantity_max'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!is_null($this->container['quantity_min']) && ($this->container['quantity_min'] < 0)) {
            $invalid_properties[] = "invalid value for 'quantity_min', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['quantity_max']) && ($this->container['quantity_max'] < 0)) {
            $invalid_properties[] = "invalid value for 'quantity_max', must be bigger than or equal to 0.";
        }

        $allowed_values = ["price", "percent", "fixed"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        if (!is_null($this->container['amount']) && ($this->container['amount'] < 0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
            $invalid_properties[] = "invalid value for 'id', must be bigger than or equal to 1.";
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
        if ($this->container['quantity_min'] < 0) {
            return false;
        }
        if ($this->container['quantity_max'] < 0) {
            return false;
        }
        $allowed_values = ["price", "percent", "fixed"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['amount'] < 0) {
            return false;
        }
        if ($this->container['id'] < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets quantity_min
     * @return int
     */
    public function getQuantityMin()
    {
        return $this->container['quantity_min'];
    }

    /**
     * Sets quantity_min
     * @param int $quantity_min The minimum inclusive quantity of a product to satisfy this rule. Must be greater than or equal to zero.
     * @return $this
     */
    public function setQuantityMin($quantity_min)
    {

        if (!is_null($quantity_min) && ($quantity_min < 0)) {
            throw new \InvalidArgumentException('invalid value for $quantity_min when calling BulkPricingRule., must be bigger than or equal to 0.');
        }

        $this->container['quantity_min'] = $quantity_min;

        return $this;
    }

    /**
     * Gets quantity_max
     * @return int
     */
    public function getQuantityMax()
    {
        return $this->container['quantity_max'];
    }

    /**
     * Sets quantity_max
     * @param int $quantity_max The maximum inclusive quantity of a product to satisfy this rule. Must be greater than the `quantity_min` value – unless this field has a value of 0 (zero), in which case there will be no maximum bound for this rule.
     * @return $this
     */
    public function setQuantityMax($quantity_max)
    {

        if (!is_null($quantity_max) && ($quantity_max < 0)) {
            throw new \InvalidArgumentException('invalid value for $quantity_max when calling BulkPricingRule., must be bigger than or equal to 0.');
        }

        $this->container['quantity_max'] = $quantity_max;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of adjustment that is made. Values: `price` - the adjustment amount per product; `percent` - the adjustment as a percentage of the original price; `fixed` - the adjusted absolute price of the product.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('price', 'percent', 'fixed');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'price', 'percent', 'fixed'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param double $amount The value of the adjustment by the bulk pricing rule.
     * @return $this
     */
    public function setAmount($amount)
    {

        if (!is_null($amount) && ($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling BulkPricingRule., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The ID of the bulk pricing rule.
     * @return $this
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling BulkPricingRule., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

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


