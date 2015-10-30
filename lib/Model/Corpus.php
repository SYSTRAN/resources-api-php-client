<?php
/**
 * Corpus
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
 * Corpus Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class Corpus implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'id' => 'string',
        'name' => 'string',
        'created_at' => 'string',
        'format' => 'string',
        'nb_segments' => 'int',
        'source_lang' => 'string',
        'target_langs' => 'string[]',
        'status' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        'created_at' => 'createdAt',
        'format' => 'format',
        'nb_segments' => 'nbSegments',
        'source_lang' => 'sourceLang',
        'target_langs' => 'targetLangs',
        'status' => 'status'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        'created_at' => 'setCreatedAt',
        'format' => 'setFormat',
        'nb_segments' => 'setNbSegments',
        'source_lang' => 'setSourceLang',
        'target_langs' => 'setTargetLangs',
        'status' => 'setStatus'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        'created_at' => 'getCreatedAt',
        'format' => 'getFormat',
        'nb_segments' => 'getNbSegments',
        'source_lang' => 'getSourceLang',
        'target_langs' => 'getTargetLangs',
        'status' => 'getStatus'
    );
  
    
    /**
      * $id Identifier
      * @var string
      */
    protected $id;
    
    /**
      * $name Name
      * @var string
      */
    protected $name;
    
    /**
      * $created_at Creation date
      * @var string
      */
    protected $created_at;
    
    /**
      * $format Format
      * @var string
      */
    protected $format;
    
    /**
      * $nb_segments Number of segments
      * @var int
      */
    protected $nb_segments;
    
    /**
      * $source_lang Source language
      * @var string
      */
    protected $source_lang;
    
    /**
      * $target_langs Target languages
      * @var string[]
      */
    protected $target_langs;
    
    /**
      * $status Corpus status
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
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->created_at = $data["created_at"];
            $this->format = $data["format"];
            $this->nb_segments = $data["nb_segments"];
            $this->source_lang = $data["source_lang"];
            $this->target_langs = $data["target_langs"];
            $this->status = $data["status"];
        }
    }
    
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id Identifier
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name Name
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
  
    /**
     * Sets created_at
     * @param string $created_at Creation date
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        
        $this->created_at = $created_at;
        return $this;
    }
    
    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }
  
    /**
     * Sets format
     * @param string $format Format
     * @return $this
     */
    public function setFormat($format)
    {
        
        $this->format = $format;
        return $this;
    }
    
    /**
     * Gets nb_segments
     * @return int
     */
    public function getNbSegments()
    {
        return $this->nb_segments;
    }
  
    /**
     * Sets nb_segments
     * @param int $nb_segments Number of segments
     * @return $this
     */
    public function setNbSegments($nb_segments)
    {
        
        $this->nb_segments = $nb_segments;
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
     * @param string $source_lang Source language
     * @return $this
     */
    public function setSourceLang($source_lang)
    {
        
        $this->source_lang = $source_lang;
        return $this;
    }
    
    /**
     * Gets target_langs
     * @return string[]
     */
    public function getTargetLangs()
    {
        return $this->target_langs;
    }
  
    /**
     * Sets target_langs
     * @param string[] $target_langs Target languages
     * @return $this
     */
    public function setTargetLangs($target_langs)
    {
        
        $this->target_langs = $target_langs;
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
     * @param string $status Corpus status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array("pending", "error", "ok");
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'pending', 'error', 'ok'");
        }
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
