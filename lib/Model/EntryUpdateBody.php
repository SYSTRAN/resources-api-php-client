<?php
/**
 * EntryUpdateBody
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
 * EntryUpdateBody Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class EntryUpdateBody implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'source_id' => 'string',
        'target_id' => 'string',
        'update' => '\Systran\Client\Model\EntryUpdateInput'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'source_id' => 'sourceId',
        'target_id' => 'targetId',
        'update' => 'update'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'source_id' => 'setSourceId',
        'target_id' => 'setTargetId',
        'update' => 'setUpdate'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'source_id' => 'getSourceId',
        'target_id' => 'getTargetId',
        'update' => 'getUpdate'
    );
  
    
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
      * $update 
      * @var \Systran\Client\Model\EntryUpdateInput
      */
    protected $update;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->source_id = $data["source_id"];
            $this->target_id = $data["target_id"];
            $this->update = $data["update"];
        }
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
     * Gets update
     * @return \Systran\Client\Model\EntryUpdateInput
     */
    public function getUpdate()
    {
        return $this->update;
    }
  
    /**
     * Sets update
     * @param \Systran\Client\Model\EntryUpdateInput $update
     * @return $this
     */
    public function setUpdate($update)
    {
        
        $this->update = $update;
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
