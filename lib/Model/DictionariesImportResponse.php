<?php
/**
 * DictionariesImportResponse
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
 * DictionariesImportResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class DictionariesImportResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'error' => '\Systran\Client\Model\ErrorResponse',
        'duplicates' => 'int',
        'inserted' => 'int',
        'total' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'error' => 'error',
        'duplicates' => 'duplicates',
        'inserted' => 'inserted',
        'total' => 'total'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'error' => 'setError',
        'duplicates' => 'setDuplicates',
        'inserted' => 'setInserted',
        'total' => 'setTotal'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'error' => 'getError',
        'duplicates' => 'getDuplicates',
        'inserted' => 'getInserted',
        'total' => 'getTotal'
    );
  
    
    /**
      * $error Error at request level
      * @var \Systran\Client\Model\ErrorResponse
      */
    protected $error;
    
    /**
      * $duplicates Number of entries that was already present in the dictionary
      * @var int
      */
    protected $duplicates;
    
    /**
      * $inserted Number of entries succesfully inserted
      * @var int
      */
    protected $inserted;
    
    /**
      * $total Number of entries processed
      * @var int
      */
    protected $total;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->error = $data["error"];
            $this->duplicates = $data["duplicates"];
            $this->inserted = $data["inserted"];
            $this->total = $data["total"];
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
     * Gets duplicates
     * @return int
     */
    public function getDuplicates()
    {
        return $this->duplicates;
    }
  
    /**
     * Sets duplicates
     * @param int $duplicates Number of entries that was already present in the dictionary
     * @return $this
     */
    public function setDuplicates($duplicates)
    {
        
        $this->duplicates = $duplicates;
        return $this;
    }
    
    /**
     * Gets inserted
     * @return int
     */
    public function getInserted()
    {
        return $this->inserted;
    }
  
    /**
     * Sets inserted
     * @param int $inserted Number of entries succesfully inserted
     * @return $this
     */
    public function setInserted($inserted)
    {
        
        $this->inserted = $inserted;
        return $this;
    }
    
    /**
     * Gets total
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
  
    /**
     * Sets total
     * @param int $total Number of entries processed
     * @return $this
     */
    public function setTotal($total)
    {
        
        $this->total = $total;
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
