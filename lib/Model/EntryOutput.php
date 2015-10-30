<?php
/**
 * EntryOutput
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
 * EntryOutput Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class EntryOutput implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'source' => 'string',
        'target' => 'string',
        'part_of_speech' => 'string',
        'priority' => 'int',
        'comments' => 'string',
        'source_confidence' => 'int',
        'target_confidence' => 'int',
        'source_lang' => 'string',
        'target_lang' => 'string',
        'source_id' => 'string',
        'target_id' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'source' => 'source',
        'target' => 'target',
        'part_of_speech' => 'partOfSpeech',
        'priority' => 'priority',
        'comments' => 'comments',
        'source_confidence' => 'sourceConfidence',
        'target_confidence' => 'targetConfidence',
        'source_lang' => 'sourceLang',
        'target_lang' => 'targetLang',
        'source_id' => 'sourceId',
        'target_id' => 'targetId'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'source' => 'setSource',
        'target' => 'setTarget',
        'part_of_speech' => 'setPartOfSpeech',
        'priority' => 'setPriority',
        'comments' => 'setComments',
        'source_confidence' => 'setSourceConfidence',
        'target_confidence' => 'setTargetConfidence',
        'source_lang' => 'setSourceLang',
        'target_lang' => 'setTargetLang',
        'source_id' => 'setSourceId',
        'target_id' => 'setTargetId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'source' => 'getSource',
        'target' => 'getTarget',
        'part_of_speech' => 'getPartOfSpeech',
        'priority' => 'getPriority',
        'comments' => 'getComments',
        'source_confidence' => 'getSourceConfidence',
        'target_confidence' => 'getTargetConfidence',
        'source_lang' => 'getSourceLang',
        'target_lang' => 'getTargetLang',
        'source_id' => 'getSourceId',
        'target_id' => 'getTargetId'
    );
  
    
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
      * $part_of_speech 
      * @var string
      */
    protected $part_of_speech;
    
    /**
      * $priority 
      * @var int
      */
    protected $priority;
    
    /**
      * $comments 
      * @var string
      */
    protected $comments;
    
    /**
      * $source_confidence 
      * @var int
      */
    protected $source_confidence;
    
    /**
      * $target_confidence 
      * @var int
      */
    protected $target_confidence;
    
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
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->source = $data["source"];
            $this->target = $data["target"];
            $this->part_of_speech = $data["part_of_speech"];
            $this->priority = $data["priority"];
            $this->comments = $data["comments"];
            $this->source_confidence = $data["source_confidence"];
            $this->target_confidence = $data["target_confidence"];
            $this->source_lang = $data["source_lang"];
            $this->target_lang = $data["target_lang"];
            $this->source_id = $data["source_id"];
            $this->target_id = $data["target_id"];
        }
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
     * Gets part_of_speech
     * @return string
     */
    public function getPartOfSpeech()
    {
        return $this->part_of_speech;
    }
  
    /**
     * Sets part_of_speech
     * @param string $part_of_speech 
     * @return $this
     */
    public function setPartOfSpeech($part_of_speech)
    {
        
        $this->part_of_speech = $part_of_speech;
        return $this;
    }
    
    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }
  
    /**
     * Sets priority
     * @param int $priority 
     * @return $this
     */
    public function setPriority($priority)
    {
        
        $this->priority = $priority;
        return $this;
    }
    
    /**
     * Gets comments
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }
  
    /**
     * Sets comments
     * @param string $comments 
     * @return $this
     */
    public function setComments($comments)
    {
        
        $this->comments = $comments;
        return $this;
    }
    
    /**
     * Gets source_confidence
     * @return int
     */
    public function getSourceConfidence()
    {
        return $this->source_confidence;
    }
  
    /**
     * Sets source_confidence
     * @param int $source_confidence 
     * @return $this
     */
    public function setSourceConfidence($source_confidence)
    {
        
        $this->source_confidence = $source_confidence;
        return $this;
    }
    
    /**
     * Gets target_confidence
     * @return int
     */
    public function getTargetConfidence()
    {
        return $this->target_confidence;
    }
  
    /**
     * Sets target_confidence
     * @param int $target_confidence 
     * @return $this
     */
    public function setTargetConfidence($target_confidence)
    {
        
        $this->target_confidence = $target_confidence;
        return $this;
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
