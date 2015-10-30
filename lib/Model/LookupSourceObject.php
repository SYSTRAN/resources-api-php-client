<?php
/**
 * LookupSourceObject
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
 * LookupSourceObject Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class LookupSourceObject implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'inflection' => 'string',
        'info' => 'string',
        'lemma' => 'string',
        'phonetic' => 'string',
        'pos' => 'string',
        'term' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'inflection' => 'inflection',
        'info' => 'info',
        'lemma' => 'lemma',
        'phonetic' => 'phonetic',
        'pos' => 'pos',
        'term' => 'term'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'inflection' => 'setInflection',
        'info' => 'setInfo',
        'lemma' => 'setLemma',
        'phonetic' => 'setPhonetic',
        'pos' => 'setPos',
        'term' => 'setTerm'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'inflection' => 'getInflection',
        'info' => 'getInfo',
        'lemma' => 'getLemma',
        'phonetic' => 'getPhonetic',
        'pos' => 'getPos',
        'term' => 'getTerm'
    );
  
    
    /**
      * $inflection 
      * @var string
      */
    protected $inflection;
    
    /**
      * $info 
      * @var string
      */
    protected $info;
    
    /**
      * $lemma 
      * @var string
      */
    protected $lemma;
    
    /**
      * $phonetic 
      * @var string
      */
    protected $phonetic;
    
    /**
      * $pos 
      * @var string
      */
    protected $pos;
    
    /**
      * $term 
      * @var string
      */
    protected $term;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->inflection = $data["inflection"];
            $this->info = $data["info"];
            $this->lemma = $data["lemma"];
            $this->phonetic = $data["phonetic"];
            $this->pos = $data["pos"];
            $this->term = $data["term"];
        }
    }
    
    /**
     * Gets inflection
     * @return string
     */
    public function getInflection()
    {
        return $this->inflection;
    }
  
    /**
     * Sets inflection
     * @param string $inflection 
     * @return $this
     */
    public function setInflection($inflection)
    {
        
        $this->inflection = $inflection;
        return $this;
    }
    
    /**
     * Gets info
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }
  
    /**
     * Sets info
     * @param string $info 
     * @return $this
     */
    public function setInfo($info)
    {
        
        $this->info = $info;
        return $this;
    }
    
    /**
     * Gets lemma
     * @return string
     */
    public function getLemma()
    {
        return $this->lemma;
    }
  
    /**
     * Sets lemma
     * @param string $lemma 
     * @return $this
     */
    public function setLemma($lemma)
    {
        
        $this->lemma = $lemma;
        return $this;
    }
    
    /**
     * Gets phonetic
     * @return string
     */
    public function getPhonetic()
    {
        return $this->phonetic;
    }
  
    /**
     * Sets phonetic
     * @param string $phonetic 
     * @return $this
     */
    public function setPhonetic($phonetic)
    {
        
        $this->phonetic = $phonetic;
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
     * Gets term
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }
  
    /**
     * Sets term
     * @param string $term 
     * @return $this
     */
    public function setTerm($term)
    {
        
        $this->term = $term;
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
