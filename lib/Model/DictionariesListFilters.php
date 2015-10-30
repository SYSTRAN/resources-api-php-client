<?php
/**
 * DictionariesListFilters
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
 * DictionariesListFilters Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class DictionariesListFilters implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'skip' => 'int',
        'limit' => 'int',
        'sort' => '\Systran\Client\Model\DictionariesListSortFilter',
        'match' => '\Systran\Client\Model\DictionariesListMatchFilter'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'skip' => 'skip',
        'limit' => 'limit',
        'sort' => 'sort',
        'match' => 'match'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'skip' => 'setSkip',
        'limit' => 'setLimit',
        'sort' => 'setSort',
        'match' => 'setMatch'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'skip' => 'getSkip',
        'limit' => 'getLimit',
        'sort' => 'getSort',
        'match' => 'getMatch'
    );
  
    
    /**
      * $skip 
      * @var int
      */
    protected $skip;
    
    /**
      * $limit 
      * @var int
      */
    protected $limit;
    
    /**
      * $sort 
      * @var \Systran\Client\Model\DictionariesListSortFilter
      */
    protected $sort;
    
    /**
      * $match 
      * @var \Systran\Client\Model\DictionariesListMatchFilter
      */
    protected $match;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->skip = $data["skip"];
            $this->limit = $data["limit"];
            $this->sort = $data["sort"];
            $this->match = $data["match"];
        }
    }
    
    /**
     * Gets skip
     * @return int
     */
    public function getSkip()
    {
        return $this->skip;
    }
  
    /**
     * Sets skip
     * @param int $skip 
     * @return $this
     */
    public function setSkip($skip)
    {
        
        $this->skip = $skip;
        return $this;
    }
    
    /**
     * Gets limit
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }
  
    /**
     * Sets limit
     * @param int $limit 
     * @return $this
     */
    public function setLimit($limit)
    {
        
        $this->limit = $limit;
        return $this;
    }
    
    /**
     * Gets sort
     * @return \Systran\Client\Model\DictionariesListSortFilter
     */
    public function getSort()
    {
        return $this->sort;
    }
  
    /**
     * Sets sort
     * @param \Systran\Client\Model\DictionariesListSortFilter $sort
     * @return $this
     */
    public function setSort($sort)
    {
        
        $this->sort = $sort;
        return $this;
    }
    
    /**
     * Gets match
     * @return \Systran\Client\Model\DictionariesListMatchFilter
     */
    public function getMatch()
    {
        return $this->match;
    }
  
    /**
     * Sets match
     * @param \Systran\Client\Model\DictionariesListMatchFilter $match
     * @return $this
     */
    public function setMatch($match)
    {
        
        $this->match = $match;
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
