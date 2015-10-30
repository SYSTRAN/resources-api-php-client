<?php
/**
 * CorpusMatch
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
 * CorpusMatch Class Doc Comment
 *
 * @category    Class
 * @description Corpus match
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class CorpusMatch implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'source' => 'string',
        'target' => 'string',
        'score' => 'double',
        'penalty' => 'double',
        'align' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'source' => 'source',
        'target' => 'target',
        'score' => 'score',
        'penalty' => 'penalty',
        'align' => 'align'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'source' => 'setSource',
        'target' => 'setTarget',
        'score' => 'setScore',
        'penalty' => 'setPenalty',
        'align' => 'setAlign'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'source' => 'getSource',
        'target' => 'getTarget',
        'score' => 'getScore',
        'penalty' => 'getPenalty',
        'align' => 'getAlign'
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
      * $score 
      * @var double
      */
    protected $score;
    
    /**
      * $penalty 
      * @var double
      */
    protected $penalty;
    
    /**
      * $align 
      * @var string
      */
    protected $align;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->source = $data["source"];
            $this->target = $data["target"];
            $this->score = $data["score"];
            $this->penalty = $data["penalty"];
            $this->align = $data["align"];
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
     * Gets score
     * @return double
     */
    public function getScore()
    {
        return $this->score;
    }
  
    /**
     * Sets score
     * @param double $score 
     * @return $this
     */
    public function setScore($score)
    {
        
        $this->score = $score;
        return $this;
    }
    
    /**
     * Gets penalty
     * @return double
     */
    public function getPenalty()
    {
        return $this->penalty;
    }
  
    /**
     * Sets penalty
     * @param double $penalty 
     * @return $this
     */
    public function setPenalty($penalty)
    {
        
        $this->penalty = $penalty;
        return $this;
    }
    
    /**
     * Gets align
     * @return string
     */
    public function getAlign()
    {
        return $this->align;
    }
  
    /**
     * Sets align
     * @param string $align 
     * @return $this
     */
    public function setAlign($align)
    {
        
        $this->align = $align;
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
