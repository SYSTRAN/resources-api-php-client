<?php
/**
 * DictionariesListResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Systran\Client
 * @author   http://github.com/Systran-api/Systran-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 *
 *
 * Do not edit the class manually.
 */

namespace Systran\Client\Model;

use \ArrayAccess;
/**
 * DictionariesListResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class DictionariesListResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'error' => '\Systran\Client\Model\ErrorResponse',
        'total_no_limit' => 'int',
        'dictionaries' => '\Systran\Client\Model\DictionaryOutput[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'error' => 'error',
        'total_no_limit' => 'totalNoLimit',
        'dictionaries' => 'dictionaries'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'error' => 'setError',
        'total_no_limit' => 'setTotalNoLimit',
        'dictionaries' => 'setDictionaries'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'error' => 'getError',
        'total_no_limit' => 'getTotalNoLimit',
        'dictionaries' => 'getDictionaries'
    );
  
    
    /**
      * $error Error at request level
      * @var \Systran\Client\Model\ErrorResponse
      */
    protected $error;
    
    /**
      * $total_no_limit Number of dictionaries without skip/limit filter
      * @var int
      */
    protected $total_no_limit;
    
    /**
      * $dictionaries List of dictionaries
      * @var \Systran\Client\Model\DictionaryOutput[]
      */
    protected $dictionaries;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->error = $data["error"];
            $this->total_no_limit = $data["total_no_limit"];
            $this->dictionaries = $data["dictionaries"];
        }
    }
    
    /**
     * Gets error
     * @return \Systran\Client\Model\ErrorResponse
     */
    public function getError()
    {
        return $this->error;
    }
  
    /**
     * Sets error
     * @param \Systran\Client\Model\ErrorResponse $error Error at request level
     * @return $this
     */
    public function setError($error)
    {
        
        $this->error = $error;
        return $this;
    }
    
    /**
     * Gets total_no_limit
     * @return int
     */
    public function getTotalNoLimit()
    {
        return $this->total_no_limit;
    }
  
    /**
     * Sets total_no_limit
     * @param int $total_no_limit Number of dictionaries without skip/limit filter
     * @return $this
     */
    public function setTotalNoLimit($total_no_limit)
    {
        
        $this->total_no_limit = $total_no_limit;
        return $this;
    }
    
    /**
     * Gets dictionaries
     * @return \Systran\Client\Model\DictionaryOutput[]
     */
    public function getDictionaries()
    {
        return $this->dictionaries;
    }
  
    /**
     * Sets dictionaries
     * @param \Systran\Client\Model\DictionaryOutput[] $dictionaries List of dictionaries
     * @return $this
     */
    public function setDictionaries($dictionaries)
    {
        
        $this->dictionaries = $dictionaries;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
