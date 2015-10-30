<?php
/**
 * DictionariesListSortFilter
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
 * DictionariesListSortFilter Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class DictionariesListSortFilter implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'nb_entries' => 'int',
        'comments' => 'int',
        'name' => 'int',
        'source_lang' => 'int',
        'target_langs' => 'int'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'nb_entries' => 'nbEntries',
        'comments' => 'comments',
        'name' => 'name',
        'source_lang' => 'sourceLang',
        'target_langs' => 'targetLangs'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'nb_entries' => 'setNbEntries',
        'comments' => 'setComments',
        'name' => 'setName',
        'source_lang' => 'setSourceLang',
        'target_langs' => 'setTargetLangs'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'nb_entries' => 'getNbEntries',
        'comments' => 'getComments',
        'name' => 'getName',
        'source_lang' => 'getSourceLang',
        'target_langs' => 'getTargetLangs'
    );
  
    
    /**
      * $nb_entries 1/-1 for ascending/descending order on nbEntries field
      * @var int
      */
    protected $nb_entries;
    
    /**
      * $comments 1/-1 for ascending/descending order on comments field
      * @var int
      */
    protected $comments;
    
    /**
      * $name 1/-1 for ascending/descending order on name field
      * @var int
      */
    protected $name;
    
    /**
      * $source_lang 1/-1 for ascending/descending order on sourceLang field
      * @var int
      */
    protected $source_lang;
    
    /**
      * $target_langs 1/-1 for ascending/descending order on targetLangs field
      * @var int
      */
    protected $target_langs;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->nb_entries = $data["nb_entries"];
            $this->comments = $data["comments"];
            $this->name = $data["name"];
            $this->source_lang = $data["source_lang"];
            $this->target_langs = $data["target_langs"];
        }
    }
    
    /**
     * Gets nb_entries
     * @return int
     */
    public function getNbEntries()
    {
        return $this->nb_entries;
    }
  
    /**
     * Sets nb_entries
     * @param int $nb_entries 1/-1 for ascending/descending order on nbEntries field
     * @return $this
     */
    public function setNbEntries($nb_entries)
    {
        
        $this->nb_entries = $nb_entries;
        return $this;
    }
    
    /**
     * Gets comments
     * @return int
     */
    public function getComments()
    {
        return $this->comments;
    }
  
    /**
     * Sets comments
     * @param int $comments 1/-1 for ascending/descending order on comments field
     * @return $this
     */
    public function setComments($comments)
    {
        
        $this->comments = $comments;
        return $this;
    }
    
    /**
     * Gets name
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param int $name 1/-1 for ascending/descending order on name field
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets source_lang
     * @return int
     */
    public function getSourceLang()
    {
        return $this->source_lang;
    }
  
    /**
     * Sets source_lang
     * @param int $source_lang 1/-1 for ascending/descending order on sourceLang field
     * @return $this
     */
    public function setSourceLang($source_lang)
    {
        
        $this->source_lang = $source_lang;
        return $this;
    }
    
    /**
     * Gets target_langs
     * @return int
     */
    public function getTargetLangs()
    {
        return $this->target_langs;
    }
  
    /**
     * Sets target_langs
     * @param int $target_langs 1/-1 for ascending/descending order on targetLangs field
     * @return $this
     */
    public function setTargetLangs($target_langs)
    {
        
        $this->target_langs = $target_langs;
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
