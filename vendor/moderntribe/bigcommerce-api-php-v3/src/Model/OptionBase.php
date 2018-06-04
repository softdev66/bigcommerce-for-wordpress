<?php
/**
 * OptionBase
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
 * OptionBase Class Doc Comment
 *
 * @category    Class */
 // @description Common Option properties.
/** 
 * @package     BigCommerce\Api\v3
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OptionBase implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OptionBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'product_id' => 'int',
        'display_name' => 'string',
        'type' => 'string',
        'config' => '\BigCommerce\Api\v3\Model\OptionConfig',
        'option_values' => '\BigCommerce\Api\v3\Model\OptionValue[]'
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
        'id' => 'id',
        'product_id' => 'product_id',
        'display_name' => 'display_name',
        'type' => 'type',
        'config' => 'config',
        'option_values' => 'option_values'
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
        'id' => 'setId',
        'product_id' => 'setProductId',
        'display_name' => 'setDisplayName',
        'type' => 'setType',
        'config' => 'setConfig',
        'option_values' => 'setOptionValues'
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
        'id' => 'getId',
        'product_id' => 'getProductId',
        'display_name' => 'getDisplayName',
        'type' => 'getType',
        'config' => 'getConfig',
        'option_values' => 'getOptionValues'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_RADIO_BUTTONS = 'radio_buttons';
    const TYPE_RECTANGLES = 'rectangles';
    const TYPE_DROPDOWN = 'dropdown';
    const TYPE_PRODUCT_LIST = 'product_list';
    const TYPE_PRODUCT_LIST_WITH_IMAGES = 'product_list_with_images';
    const TYPE_SWATCH = 'swatch';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_RADIO_BUTTONS,
            self::TYPE_RECTANGLES,
            self::TYPE_DROPDOWN,
            self::TYPE_PRODUCT_LIST,
            self::TYPE_PRODUCT_LIST_WITH_IMAGES,
            self::TYPE_SWATCH,
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
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : new \stdClass();
        $this->container['product_id'] = array_key_exists('product_id', $data) ? $data['product_id'] : new \stdClass();
        $this->container['display_name'] = array_key_exists('display_name', $data) ? $data['display_name'] : new \stdClass();
        $this->container['type'] = array_key_exists('type', $data) ? $data['type'] : new \stdClass();
        $this->container['config'] = array_key_exists('config', $data) ? $data['config'] : new \stdClass();
        $this->container['option_values'] = array_key_exists('option_values', $data) ? $data['option_values'] : new \stdClass();
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
        if (strlen($this->container['display_name']) > 255) {
            $invalid_properties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['display_name']) < 1) {
            $invalid_properties[] = "invalid value for 'display_name', the character length must be bigger than or equal to 1.";
        }
        $allowed_values = array("radio_buttons", "rectangles", "dropdown", "product_list", "product_list_with_images", "swatch");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
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
        if (strlen($this->container['display_name']) > 255) {
            return false;
        }
        if (strlen($this->container['display_name']) < 1) {
            return false;
        }
        $allowed_values = array("radio_buttons", "rectangles", "dropdown", "product_list", "product_list_with_images", "swatch");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param int $id The unique numerical ID of the option, increments sequentially.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id The unique numerical ID of the product to which the option belongs.
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets display_name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     * @param string $display_name The name of the option shown on the storefront.
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        if (strlen($display_name) > 255) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling OptionBase., must be smaller than or equal to 255.');
        }
        if (strlen($display_name) < 1) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling OptionBase., must be bigger than or equal to 1.');
        }
        $this->container['display_name'] = $display_name;

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
     * @param string $type The type of option, which determines how it will display on the storefront. Acceptable values: `radio_buttons`, `rectangles`, `dropdown`, `product_list`, `product_list_with_images`, `swatch`. For reference, the former v2 API values are: RB = radio_buttons, RT = rectangles, S = dropdown, P = product_list, PI = product_list_with_images, CS = swatch.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('radio_buttons', 'rectangles', 'dropdown', 'product_list', 'product_list_with_images', 'swatch');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'radio_buttons', 'rectangles', 'dropdown', 'product_list', 'product_list_with_images', 'swatch'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets config
     * @return \BigCommerce\Api\v3\Model\OptionConfig
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     * @param \BigCommerce\Api\v3\Model\OptionConfig $config
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets option_values
     * @return \BigCommerce\Api\v3\Model\OptionValue[]
     */
    public function getOptionValues()
    {
        return $this->container['option_values'];
    }

    /**
     * Sets option_values
     * @param \BigCommerce\Api\v3\Model\OptionValue[] $option_values
     * @return $this
     */
    public function setOptionValues($option_values)
    {
        $this->container['option_values'] = $option_values;

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


