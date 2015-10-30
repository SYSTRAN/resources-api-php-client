<?php
/**
 * EntryAddOutput
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
 * EntryAddOutput Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class EntryAddOutput implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'confidence' => 'string',
        'source_id' => 'string',
        'target_id' => 'string',
        'pos' => 'string',
        'target_pos' => 'string',
        'source' => 'string',
        'target' => 'string',
        'type' => 'string',
        'status' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'confidence' => 'confidence',
        'source_id' => 'sourceId',
        'target_id' => 'targetId',
        'pos' => 'pos',
        'target_pos' => 'targetPos',
        'source' => 'source',
        'target' => 'target',
        'type' => 'type',
        'status' => 'status'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'confidence' => 'setConfidence',
        'source_id' => 'setSourceId',
        'target_id' => 'setTargetId',
        'pos' => 'setPos',
        'target_pos' => 'setTargetPos',
        'source' => 'setSource',
        'target' => 'setTarget',
        'type' => 'setType',
        'status' => 'setStatus'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'confidence' => 'getConfidence',
        'source_id' => 'getSourceId',
        'target_id' => 'getTargetId',
        'pos' => 'getPos',
        'target_pos' => 'getTargetPos',
        'source' => 'getSource',
        'target' => 'getTarget',
        'type' => 'getType',
        'status' => 'getStatus'
    );
  
    
    /**
      * $confidence 
      * @var string
      */
    protected $confidence;
    
    /**
      * $source_id 
      * @var string
      */
    protected $source_id;
    
    /**
      * $target_id 
      * @var string
      */
    protected $target_id;
    
    /**
      * $pos 
      * @var string
      */
    protected $pos;
    
    /**
      * $target_pos 
      * @var string
      */
    protected $target_pos;
    
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
      * $status 
      * @var string
      */
    protected $status;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->confidence = $data["confidence"];
            $this->source_id = $data["source_id"];
            $this->target_id = $data["target_id"];
            $this->pos = $data["pos"];
            $this->target_pos = $data["target_pos"];
            $this->source = $data["source"];
            $this->target = $data["target"];
            $this->type = $data["type"];
            $this->status = $data["status"];
        }
    }
    
    /**
     * Gets confidence
     * @return string
     */
    public function getConfidence()
    {
        return $this->confidence;
    }
  
    /**
     * Sets confidence
     * @param string $confidence 
     * @return $this
     */
    public function setConfidence($confidence)
    {
        
        $this->confidence = $confidence;
        return $this;
    }
    
    /**
     * Gets source_id
     * @return string
     */
    public function getSourceId()
    {
        return $this->source_id;
    }
  
    /**
     * Sets source_id
     * @param string $source_id 
     * @return $this
     */
    public function setSourceId($source_id)
    {
        
        $this->source_id = $source_id;
        return $this;
    }
    
    /**
     * Gets target_id
     * @return string
     */
    public function getTargetId()
    {
        return $this->target_id;
    }
  
    /**
     * Sets target_id
     * @param string $target_id 
     * @return $this
     */
    public function setTargetId($target_id)
    {
        
        $this->target_id = $target_id;
        return $this;
    }
    
    /**
     * Gets pos
     * @return string
     */
    public function getPos()
    {
        return $this->pos;
    }
  
    /**
     * Sets pos
     * @param string $pos 
     * @return $this
     */
    public function setPos($pos)
    {
        
        $this->pos = $pos;
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
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status 
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
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
