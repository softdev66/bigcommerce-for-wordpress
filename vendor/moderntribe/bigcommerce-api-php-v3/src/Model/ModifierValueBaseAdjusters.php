<?php
/**
 * ModifierValueBaseAdjusters
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
 * ModifierValueBaseAdjusters Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     BigCommerce\Api\v3
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModifierValueBaseAdjusters implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ModifierValueBase_adjusters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'price' => '\BigCommerce\Api\v3\Model\Adjuster',
        'weight' => '\BigCommerce\Api\v3\Model\Adjuster',
        'image_url' => 'string',
        'purchasing_disabled' => '\BigCommerce\Api\v3\Model\ModifierValueBaseAdjustersPurchasingDisabled'
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
        'price' => 'price',
        'weight' => 'weight',
        'image_url' => 'image_url',
        'purchasing_disabled' => 'purchasing_disabled'
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
        'price' => 'setPrice',
        'weight' => 'setWeight',
        'image_url' => 'setImageUrl',
        'purchasing_disabled' => 'setPurchasingDisabled'
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
        'price' => 'getPrice',
        'weight' => 'getWeight',
        'image_url' => 'getImageUrl',
        'purchasing_disabled' => 'getPurchasingDisabled'
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
        $this->container['price'] = array_key_exists('price', $data) ? $data['price'] : new \stdClass();
        $this->container['weight'] = array_key_exists('weight', $data) ? $data['weight'] : new \stdClass();
        $this->container['image_url'] = array_key_exists('image_url', $data) ? $data['image_url'] : new \stdClass();
        $this->container['purchasing_disabled'] = array_key_exists('purchasing_disabled', $data) ? $data['purchasing_disabled'] : new \stdClass();
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
        return true;
    }


    /**
     * Gets price
     * @return \BigCommerce\Api\v3\Model\Adjuster
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param \BigCommerce\Api\v3\Model\Adjuster $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets weight
     * @return \BigCommerce\Api\v3\Model\Adjuster
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param \BigCommerce\Api\v3\Model\Adjuster $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     * @param string $image_url The URL for an image displayed on the storefront when the modifier value is selected.
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets purchasing_disabled
     * @return \BigCommerce\Api\v3\Model\ModifierValueBaseAdjustersPurchasingDisabled
     */
    public function getPurchasingDisabled()
    {
        return $this->container['purchasing_disabled'];
    }

    /**
     * Sets purchasing_disabled
     * @param \BigCommerce\Api\v3\Model\ModifierValueBaseAdjustersPurchasingDisabled $purchasing_disabled
     * @return $this
     */
    public function setPurchasingDisabled($purchasing_disabled)
    {
        $this->container['purchasing_disabled'] = $purchasing_disabled;

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


