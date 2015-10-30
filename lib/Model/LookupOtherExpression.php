<?php
/**
 * LookupOtherExpression
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
 * LookupOtherExpression Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class LookupOtherExpression implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'context' => 'string',
        'source' => 'string',
        'target' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'context' => 'context',
        'source' => 'source',
        'target' => 'target'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'context' => 'setContext',
        'source' => 'setSource',
        'target' => 'setTarget'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'context' => 'getContext',
        'source' => 'getSource',
        'target' => 'getTarget'
    );
  
    
    /**
      * $context 
      * @var string
      */
    protected $context;
    
    /**
      * $source 
      * @var string
      */
    protected $source;
    
    /**
      * $target 
      * @var string
      */
    protected $target;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->context = $data["context"];
            $this->source = $data["source"];
            $this->target = $data["target"];
        }
    }
    
    /**
     * Gets context
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }
  
    /**
     * Sets context
     * @param string $context 
     * @return $this
     */
    public function setContext($context)
    {
        
        $this->context = $context;
        return $this;
    }
    
    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }
  
    /**
     * Sets source
     * @param string $source 
     * @return $this
     */
    public function setSource($source)
    {
        
        $this->source = $source;
        return $this;
    }
    
    /**
     * Gets target
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }
  
    /**
     * Sets target
     * @param string $target 
     * @return $this
     */
    public function setTarget($target)
    {
        
        $this->target = $target;
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
