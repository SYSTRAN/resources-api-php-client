<?php
/**
 * DictionaryAddInput
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
 * DictionaryAddInput Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class DictionaryAddInput implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'source_lang' => 'string',
        'name' => 'string',
        'target_langs' => 'string',
        'comments' => 'string',
        'type' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'source_lang' => 'sourceLang',
        'name' => 'name',
        'target_langs' => 'targetLangs',
        'comments' => 'comments',
        'type' => 'type'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'source_lang' => 'setSourceLang',
        'name' => 'setName',
        'target_langs' => 'setTargetLangs',
        'comments' => 'setComments',
        'type' => 'setType'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'source_lang' => 'getSourceLang',
        'name' => 'getName',
        'target_langs' => 'getTargetLangs',
        'comments' => 'getComments',
        'type' => 'getType'
    );
  
    
    /**
      * $source_lang 
      * @var string
      */
    protected $source_lang;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $target_langs 
      * @var string
      */
    protected $target_langs;
    
    /**
      * $comments 
      * @var string
      */
    protected $comments;
    
    /**
      * $type 
      * @var string
      */
    protected $type;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->source_lang = $data["source_lang"];
            $this->name = $data["name"];
            $this->target_langs = $data["target_langs"];
            $this->comments = $data["comments"];
            $this->type = $data["type"];
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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets target_langs
     * @return string
     */
    public function getTargetLangs()
    {
        return $this->target_langs;
    }
  
    /**
     * Sets target_langs
     * @param string $target_langs 
     * @return $this
     */
    public function setTargetLangs($target_langs)
    {
        
        $this->target_langs = $target_langs;
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
