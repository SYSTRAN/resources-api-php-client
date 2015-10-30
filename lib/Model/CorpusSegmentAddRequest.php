<?php
/**
 * CorpusSegmentAddRequest
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
 * CorpusSegmentAddRequest Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class CorpusSegmentAddRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'corpus_id' => 'string',
        'segments' => '\Systran\Client\Model\CorpusAddSegment[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'corpus_id' => 'corpusId',
        'segments' => 'segments'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'corpus_id' => 'setCorpusId',
        'segments' => 'setSegments'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'corpus_id' => 'getCorpusId',
        'segments' => 'getSegments'
    );
  
    
    /**
      * $corpus_id Corpus identifier
      * @var string
      */
    protected $corpus_id;
    
    /**
      * $segments List of segments to add
      * @var \Systran\Client\Model\CorpusAddSegment[]
      */
    protected $segments;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->corpus_id = $data["corpus_id"];
            $this->segments = $data["segments"];
        }
    }
    
    /**
     * Gets corpus_id
     * @return string
     */
    public function getCorpusId()
    {
        return $this->corpus_id;
    }
  
    /**
     * Sets corpus_id
     * @param string $corpus_id Corpus identifier
     * @return $this
     */
    public function setCorpusId($corpus_id)
    {
        
        $this->corpus_id = $corpus_id;
        return $this;
    }
    
    /**
     * Gets segments
     * @return \Systran\Client\Model\CorpusAddSegment[]
     */
    public function getSegments()
    {
        return $this->segments;
    }
  
    /**
     * Sets segments
     * @param \Systran\Client\Model\CorpusAddSegment[] $segments List of segments to add
     * @return $this
     */
    public function setSegments($segments)
    {
        
        $this->segments = $segments;
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
