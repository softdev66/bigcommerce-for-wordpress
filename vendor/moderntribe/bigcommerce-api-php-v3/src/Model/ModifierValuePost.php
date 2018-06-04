<?php
/**
 * ModifierValuePost
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
 * ModifierValuePost Class Doc Comment
 *
 * @category    Class */
 // @description The model for a POST to create a modifier value on a product.
/** 
 * @package     BigCommerce\Api\v3
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModifierValuePost implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ModifierValuePost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'is_default' => 'bool',
        'label' => 'string',
        'sort_order' => 'int',
        'value_data' => 'object',
        'adjusters' => '\BigCommerce\Api\v3\Model\ModifierValueBaseAdjusters'
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
        'is_default' => 'is_default',
        'label' => 'label',
        'sort_order' => 'sort_order',
        'value_data' => 'value_data',
        'adjusters' => 'adjusters'
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
        'is_default' => 'setIsDefault',
        'label' => 'setLabel',
        'sort_order' => 'setSortOrder',
        'value_data' => 'setValueData',
        'adjusters' => 'setAdjusters'
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
        'is_default' => 'getIsDefault',
        'label' => 'getLabel',
        'sort_order' => 'getSortOrder',
        'value_data' => 'getValueData',
        'adjusters' => 'getAdjusters'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['is_default'] = array_key_exists('is_default', $data) ? $data['is_default'] : new \stdClass();
        $this->container['label'] = array_key_exists('label', $data) ? $data['label'] : new \stdClass();
        $this->container['sort_order'] = array_key_exists('sort_order', $data) ? $data['sort_order'] : new \stdClass();
        $this->container['value_data'] = array_key_exists('value_data', $data) ? $data['value_data'] : new \stdClass();
        $this->container['adjusters'] = array_key_exists('adjusters', $data) ? $data['adjusters'] : new \stdClass();
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
        if ($this->container['sort_order'] > 2147483647) {
            $invalid_properties[] = "invalid value for 'sort_order', must be smaller than or equal to 2147483647.";
        }
        if ($this->container['sort_order'] < -2147483648) {
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
     * Gets is_default
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     * @param bool $is_default The flag for preselecting a value as the default on the storefront. This field is not supported for swatch options/modifiers.
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label The text display identifying the value on the storefront.
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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
     * @param int $sort_order The order in which the value will be displayed on the product page.
     * @return $this
     */
    public function setSortOrder($sort_order)
    {

        if ($sort_order > 2147483647) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ModifierValuePost., must be smaller than or equal to 2147483647.');
        }
        if ($sort_order < -2147483648) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ModifierValuePost., must be bigger than or equal to -2147483648.');
        }
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets value_data
     * @return object
     */
    public function getValueData()
    {
        return $this->container['value_data'];
    }

    /**
     * Sets value_data
     * @param object $value_data Extra data describing the value, based on the type of option or modifier with which the value is associated. The `swatch` type option can accept an array of `colors`, with up to three hexidecimal color keys; or an `image_url`, which is a full image URL path including protocol. The `product list` type option requires a `product_id`. The `checkbox` type option requires a boolean flag, called `checked_value`, to determine which value is considered to be the checked state.
     * @return $this
     */
    public function setValueData($value_data)
    {
        $this->container['value_data'] = $value_data;

        return $this;
    }

    /**
     * Gets adjusters
     * @return \BigCommerce\Api\v3\Model\ModifierValueBaseAdjusters
     */
    public function getAdjusters()
    {
        return $this->container['adjusters'];
    }

    /**
     * Sets adjusters
     * @param \BigCommerce\Api\v3\Model\ModifierValueBaseAdjusters $adjusters
     * @return $this
     */
    public function setAdjusters($adjusters)
    {
        $this->container['adjusters'] = $adjusters;

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


