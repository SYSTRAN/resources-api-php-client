<?php
/**
 * LookupOutputObject
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
 * LookupOutputObject Class Doc Comment
 *
 * @category    Class
 * @description Output for a word
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class LookupOutputObject implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'auto_complete' => 'bool',
        's_dict_seach' => 'bool',
        'matches' => '\Systran\Client\Model\LookupMatchObject[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'auto_complete' => 'autoComplete',
        's_dict_seach' => 'sDictSeach',
        'matches' => 'matches'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'auto_complete' => 'setAutoComplete',
        's_dict_seach' => 'setSDictSeach',
        'matches' => 'setMatches'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'auto_complete' => 'getAutoComplete',
        's_dict_seach' => 'getSDictSeach',
        'matches' => 'getMatches'
    );
  
    
    /**
      * $auto_complete 
      * @var bool
      */
    protected $auto_complete;
    
    /**
      * $s_dict_seach 
      * @var bool
      */
    protected $s_dict_seach;
    
    /**
      * $matches 
      * @var \Systran\Client\Model\LookupMatchObject[]
      */
    protected $matches;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->auto_complete = $data["auto_complete"];
            $this->s_dict_seach = $data["s_dict_seach"];
            $this->matches = $data["matches"];
        }
    }
    
    /**
     * Gets auto_complete
     * @return bool
     */
    public function getAutoComplete()
    {
        return $this->auto_complete;
    }
  
    /**
     * Sets auto_complete
     * @param bool $auto_complete 
     * @return $this
     */
    public function setAutoComplete($auto_complete)
    {
        
        $this->auto_complete = $auto_complete;
        return $this;
    }
    
    /**
     * Gets s_dict_seach
     * @return bool
     */
    public function getSDictSeach()
    {
        return $this->s_dict_seach;
    }
  
    /**
     * Sets s_dict_seach
     * @param bool $s_dict_seach 
     * @return $this
     */
    public function setSDictSeach($s_dict_seach)
    {
        
        $this->s_dict_seach = $s_dict_seach;
        return $this;
    }
    
    /**
     * Gets matches
     * @return \Systran\Client\Model\LookupMatchObject[]
     */
    public function getMatches()
    {
        return $this->matches;
    }
  
    /**
     * Sets matches
     * @param \Systran\Client\Model\LookupMatchObject[] $matches
     * @return $this
     */
    public function setMatches($matches)
    {
        
        $this->matches = $matches;
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
