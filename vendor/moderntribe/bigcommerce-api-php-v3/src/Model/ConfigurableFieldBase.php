<?php
/**
 * ConfigurableFieldBase
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
 * ConfigurableFieldBase Class Doc Comment
 *
 * @category    Class */
 // @description Common ConfigurableField properties.
/** 
 * @package     BigCommerce\Api\v3
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConfigurableFieldBase implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ConfigurableFieldBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'type' => 'string',
        'file_allowed_types' => 'string[]',
        'file_max_size' => 'int[]',
        'select_options' => 'string[]',
        'required' => 'bool',
        'sort_order' => 'int'
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
        'name' => 'name',
        'type' => 'type',
        'file_allowed_types' => 'file_allowed_types',
        'file_max_size' => 'file_max_size',
        'select_options' => 'select_options',
        'required' => 'required',
        'sort_order' => 'sort_order'
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
        'name' => 'setName',
        'type' => 'setType',
        'file_allowed_types' => 'setFileAllowedTypes',
        'file_max_size' => 'setFileMaxSize',
        'select_options' => 'setSelectOptions',
        'required' => 'setRequired',
        'sort_order' => 'setSortOrder'
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
        'name' => 'getName',
        'type' => 'getType',
        'file_allowed_types' => 'getFileAllowedTypes',
        'file_max_size' => 'getFileMaxSize',
        'select_options' => 'getSelectOptions',
        'required' => 'getRequired',
        'sort_order' => 'getSortOrder'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_TEXT = 'text';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_FILE = 'file';
    const TYPE_SELECT = 'select';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_TEXTAREA,
            self::TYPE_CHECKBOX,
            self::TYPE_FILE,
            self::TYPE_SELECT,
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
        $this->container['name'] = array_key_exists('name', $data) ? $data['name'] : new \stdClass();
        $this->container['type'] = array_key_exists('type', $data) ? $data['type'] : new \stdClass();
        $this->container['file_allowed_types'] = array_key_exists('file_allowed_types', $data) ? $data['file_allowed_types'] : new \stdClass();
        $this->container['file_max_size'] = array_key_exists('file_max_size', $data) ? $data['file_max_size'] : new \stdClass();
        $this->container['select_options'] = array_key_exists('select_options', $data) ? $data['select_options'] : new \stdClass();
        $this->container['required'] = array_key_exists('required', $data) ? $data['required'] : new \stdClass();
        $this->container['sort_order'] = array_key_exists('sort_order', $data) ? $data['sort_order'] : new \stdClass();
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
        if (strlen($this->container['name']) > 255) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['name']) < 1) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }
        $allowed_values = array("text", "textarea", "checkbox", "file", "select");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }
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
        if (strlen($this->container['name']) > 255) {
            return false;
        }
        if (strlen($this->container['name']) < 1) {
            return false;
        }
        $allowed_values = array("text", "textarea", "checkbox", "file", "select");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['sort_order'] > 2147483647) {
            return false;
        }
        if ($this->container['sort_order'] < -2147483648) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name for the configurable field. Will display on the storefront and can be used as a reference point in the Orders API.
     * @return $this
     */
    public function setName($name)
    {
        if (strlen($name) > 255) {
            throw new \InvalidArgumentException('invalid length for $name when calling ConfigurableFieldBase., must be smaller than or equal to 255.');
        }
        if (strlen($name) < 1) {
            throw new \InvalidArgumentException('invalid length for $name when calling ConfigurableFieldBase., must be bigger than or equal to 1.');
        }
        $this->container['name'] = $name;

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
     * @param string $type The type of the configurable field, which determines what sort of information the field is intended to collect on the storefront. Supported types in include a text input, a multi-line textarea, a checkbox, a file upload, and a dropdown selection.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('text', 'textarea', 'checkbox', 'file', 'select');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'text', 'textarea', 'checkbox', 'file', 'select'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets file_allowed_types
     * @return string[]
     */
    public function getFileAllowedTypes()
    {
        return $this->container['file_allowed_types'];
    }

    /**
     * Sets file_allowed_types
     * @param string[] $file_allowed_types For fields of \"file\" type, this controls the allowed file types for upload.
     * @return $this
     */
    public function setFileAllowedTypes($file_allowed_types)
    {
        $this->container['file_allowed_types'] = $file_allowed_types;

        return $this;
    }

    /**
     * Gets file_max_size
     * @return int[]
     */
    public function getFileMaxSize()
    {
        return $this->container['file_max_size'];
    }

    /**
     * Sets file_max_size
     * @param int[] $file_max_size For fields of \"file\" type, this controls the maximum file size. The platform has a maximum file size of 512MB for all uploads regardless of this setting.
     * @return $this
     */
    public function setFileMaxSize($file_max_size)
    {
        $this->container['file_max_size'] = $file_max_size;

        return $this;
    }

    /**
     * Gets select_options
     * @return string[]
     */
    public function getSelectOptions()
    {
        return $this->container['select_options'];
    }

    /**
     * Sets select_options
     * @param string[] $select_options For fields of \"select\" type, this is an array of the options which should be presented in the dropdown.
     * @return $this
     */
    public function setSelectOptions($select_options)
    {
        $this->container['select_options'] = $select_options;

        return $this;
    }

    /**
     * Gets required
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param bool $required Controls whether the field is required to have some input before a product may be added to cart.
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

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
     * @param int $sort_order Controls the sort order of this field relative to other configurable fields on the product, for purposes of ordering them on the storefront.
     * @return $this
     */
    public function setSortOrder($sort_order)
    {

        if ($sort_order > 2147483647) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ConfigurableFieldBase., must be smaller than or equal to 2147483647.');
        }
        if ($sort_order < -2147483648) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ConfigurableFieldBase., must be bigger than or equal to -2147483648.');
        }
        $this->container['sort_order'] = $sort_order;

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


