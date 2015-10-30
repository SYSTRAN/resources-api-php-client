<?php
/**
 * EntryAddInput
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
 * EntryAddInput Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class EntryAddInput implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'source_lang' => 'string',
        'target_lang' => 'string',
        'source' => 'string',
        'target' => 'string',
        'type' => 'string',
        'source_pos' => 'string',
        'target_pos' => 'string',
        'priority' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'source_lang' => 'sourceLang',
        'target_lang' => 'targetLang',
        'source' => 'source',
        'target' => 'target',
        'type' => 'type',
        'source_pos' => 'sourcePos',
        'target_pos' => 'targetPos',
        'priority' => 'priority'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'source_lang' => 'setSourceLang',
        'target_lang' => 'setTargetLang',
        'source' => 'setSource',
        'target' => 'setTarget',
        'type' => 'setType',
        'source_pos' => 'setSourcePos',
        'target_pos' => 'setTargetPos',
        'priority' => 'setPriority'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'source_lang' => 'getSourceLang',
        'target_lang' => 'getTargetLang',
        'source' => 'getSource',
        'target' => 'getTarget',
        'type' => 'getType',
        'source_pos' => 'getSourcePos',
        'target_pos' => 'getTargetPos',
        'priority' => 'getPriority'
    );
  
    
    /**
      * $source_lang 
      * @var string
      */
    protected $source_lang;
    
    /**
      * $target_lang 
      * @var string
      */
    protected $target_lang;
    
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
      * $type 
      * @var string
      */
    protected $type;
    
    /**
      * $source_pos 
      * @var string
      */
    protected $source_pos;
    
    /**
      * $target_pos 
      * @var string
      */
    protected $target_pos;
    
    /**
      * $priority 
      * @var string
      */
    protected $priority;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->source_lang = $data["source_lang"];
            $this->target_lang = $data["target_lang"];
            $this->source = $data["source"];
            $this->target = $data["target"];
            $this->type = $data["type"];
            $this->source_pos = $data["source_pos"];
            $this->target_pos = $data["target_pos"];
            $this->priority = $data["priority"];
        }
    }
    
    /**
     * Gets source_lang
     * @return string
     */
    public function getSourceLang()
    {
        return $this->source_lang;
    }
  
    /**
     * Sets source_lang
     * @param string $source_lang 
     * @return $this
     */
    public function setSourceLang($source_lang)
    {
        
        $this->source_lang = $source_lang;
        return $this;
    }
    
    /**
     * Gets target_lang
     * @return string
     */
    public function getTargetLang()
    {
        return $this->target_lang;
    }
  
    /**
     * Sets target_lang
     * @param string $target_lang 
     * @return $this
     */
    public function setTargetLang($target_lang)
    {
        
        $this->target_lang = $target_lang;
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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type 
     * @return $this
     */
    public function setType($type)
    {
        
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets source_pos
     * @return string
     */
    public function getSourcePos()
    {
        return $this->source_pos;
    }
  
    /**
     * Sets source_pos
     * @param string $source_pos 
     * @return $this
     */
    public function setSourcePos($source_pos)
    {
        
        $this->source_pos = $source_pos;
        return $this;
    }
    
    /**
     * Gets target_pos
     * @return string
     */
    public function getTargetPos()
    {
        return $this->target_pos;
    }
  
    /**
     * Sets target_pos
     * @param string $target_pos 
     * @return $this
     */
    public function setTargetPos($target_pos)
    {
        
        $this->target_pos = $target_pos;
        return $this;
    }
    
    /**
     * Gets priority
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }
  
    /**
     * Sets priority
     * @param string $priority 
     * @return $this
     */
    public function setPriority($priority)
    {
        
        $this->priority = $priority;
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
