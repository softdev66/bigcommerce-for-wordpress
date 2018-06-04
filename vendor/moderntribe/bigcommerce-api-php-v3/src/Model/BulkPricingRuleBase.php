<?php
/**
 * BulkPricingRuleBase
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
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
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

/**
 * BulkPricingRuleBase Class Doc Comment
 *
 * @category    Class */
 // @description Common BulkPricingRule properties
/** 
 * @package     BigCommerce\Api\v3
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkPricingRuleBase implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BulkPricingRuleBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'quantity_min' => 'int',
        'quantity_max' => 'int',
        'type' => 'string',
        'amount' => 'double'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'quantity_min' => 'quantity_min',
        'quantity_max' => 'quantity_max',
        'type' => 'type',
        'amount' => 'amount'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'quantity_min' => 'setQuantityMin',
        'quantity_max' => 'setQuantityMax',
        'type' => 'setType',
        'amount' => 'setAmount'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'quantity_min' => 'getQuantityMin',
        'quantity_max' => 'getQuantityMax',
        'type' => 'getType',
        'amount' => 'getAmount'
    );

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
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['quantity_min'] = array_key_exists('quantity_min', $data) ? $data['quantity_min'] : new \stdClass();
        $this->container['quantity_max'] = array_key_exists('quantity_max', $data) ? $data['quantity_max'] : new \stdClass();
        $this->container['type'] = array_key_exists('type', $data) ? $data['type'] : new \stdClass();
        $this->container['amount'] = array_key_exists('amount', $data) ? $data['amount'] : new \stdClass();
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['quantity_min'] < 0) {
            $invalid_properties[] = "invalid value for 'quantity_min', must be bigger than or equal to 0.";
        }
        if ($this->container['quantity_max'] < 0) {
            $invalid_properties[] = "invalid value for 'quantity_max', must be bigger than or equal to 0.";
        }
        $allowed_values = array("price", "percent", "fixed");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }
        if ($this->container['amount'] < 0) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
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
        $allowed_values = array("price", "percent", "fixed");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['amount'] < 0) {
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

        if ($quantity_min < 0) {
            throw new \InvalidArgumentException('invalid value for $quantity_min when calling BulkPricingRuleBase., must be bigger than or equal to 0.');
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

        if ($quantity_max < 0) {
            throw new \InvalidArgumentException('invalid value for $quantity_max when calling BulkPricingRuleBase., must be bigger than or equal to 0.');
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
        if (!in_array($type, $allowed_values)) {
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

        if ($amount < 0) {
            throw new \InvalidArgumentException('invalid value for $amount when calling BulkPricingRuleBase., must be bigger than or equal to 0.');
        }
        $this->container['amount'] = $amount;

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


