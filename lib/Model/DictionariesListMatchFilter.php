<?php
/**
 * DictionariesListMatchFilter
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
 * DictionariesListMatchFilter Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class DictionariesListMatchFilter implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'in_source_lang' => 'string[]',
        'nin_source_lang' => 'string[]',
        'in_target_langs' => 'string[]',
        'regex_comments' => 'string',
        'in_nb_entries' => 'int[]',
        'nin_nb_entries' => 'int[]',
        'min_nb_entries' => 'int',
        'max_nb_entries' => 'int',
        'in_name' => 'string[]',
        'nin_name' => 'string[]',
        'regex_name' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'in_source_lang' => 'inSourceLang',
        'nin_source_lang' => 'ninSourceLang',
        'in_target_langs' => 'inTargetLangs',
        'regex_comments' => 'regexComments',
        'in_nb_entries' => 'inNbEntries',
        'nin_nb_entries' => 'ninNbEntries',
        'min_nb_entries' => 'minNbEntries',
        'max_nb_entries' => 'maxNbEntries',
        'in_name' => 'inName',
        'nin_name' => 'ninName',
        'regex_name' => 'regexName'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'in_source_lang' => 'setInSourceLang',
        'nin_source_lang' => 'setNinSourceLang',
        'in_target_langs' => 'setInTargetLangs',
        'regex_comments' => 'setRegexComments',
        'in_nb_entries' => 'setInNbEntries',
        'nin_nb_entries' => 'setNinNbEntries',
        'min_nb_entries' => 'setMinNbEntries',
        'max_nb_entries' => 'setMaxNbEntries',
        'in_name' => 'setInName',
        'nin_name' => 'setNinName',
        'regex_name' => 'setRegexName'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'in_source_lang' => 'getInSourceLang',
        'nin_source_lang' => 'getNinSourceLang',
        'in_target_langs' => 'getInTargetLangs',
        'regex_comments' => 'getRegexComments',
        'in_nb_entries' => 'getInNbEntries',
        'nin_nb_entries' => 'getNinNbEntries',
        'min_nb_entries' => 'getMinNbEntries',
        'max_nb_entries' => 'getMaxNbEntries',
        'in_name' => 'getInName',
        'nin_name' => 'getNinName',
        'regex_name' => 'getRegexName'
    );
  
    
    /**
      * $in_source_lang Match all dictionaries with sourceLang present in a subset of values
      * @var string[]
      */
    protected $in_source_lang;
    
    /**
      * $nin_source_lang Match all dictionaries with sourceLang not present in a subset of values
      * @var string[]
      */
    protected $nin_source_lang;
    
    /**
      * $in_target_langs Match all dictionaries with targetLang from a subset of values present in targetLangs property
      * @var string[]
      */
    protected $in_target_langs;
    
    /**
      * $regex_comments Match all entries with comments containing the specified value
      * @var string
      */
    protected $regex_comments;
    
    /**
      * $in_nb_entries Match all dictionaries with nbEntries present in a subset of values
      * @var int[]
      */
    protected $in_nb_entries;
    
    /**
      * $nin_nb_entries Match all dictionaries with nbEntries not present in a subset of values
      * @var int[]
      */
    protected $nin_nb_entries;
    
    /**
      * $min_nb_entries Match all entries with nbEntries equal and over specified value
      * @var int
      */
    protected $min_nb_entries;
    
    /**
      * $max_nb_entries Match all entries with nbEntries under and equal specified value
      * @var int
      */
    protected $max_nb_entries;
    
    /**
      * $in_name Match all entries with name present in a subset of values
      * @var string[]
      */
    protected $in_name;
    
    /**
      * $nin_name Match all entries with name not present in a subset of values
      * @var string[]
      */
    protected $nin_name;
    
    /**
      * $regex_name Match all entries with name containing the specified value
      * @var string
      */
    protected $regex_name;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->in_source_lang = $data["in_source_lang"];
            $this->nin_source_lang = $data["nin_source_lang"];
            $this->in_target_langs = $data["in_target_langs"];
            $this->regex_comments = $data["regex_comments"];
            $this->in_nb_entries = $data["in_nb_entries"];
            $this->nin_nb_entries = $data["nin_nb_entries"];
            $this->min_nb_entries = $data["min_nb_entries"];
            $this->max_nb_entries = $data["max_nb_entries"];
            $this->in_name = $data["in_name"];
            $this->nin_name = $data["nin_name"];
            $this->regex_name = $data["regex_name"];
        }
    }
    
    /**
     * Gets in_source_lang
     * @return string[]
     */
    public function getInSourceLang()
    {
        return $this->in_source_lang;
    }
  
    /**
     * Sets in_source_lang
     * @param string[] $in_source_lang Match all dictionaries with sourceLang present in a subset of values
     * @return $this
     */
    public function setInSourceLang($in_source_lang)
    {
        
        $this->in_source_lang = $in_source_lang;
        return $this;
    }
    
    /**
     * Gets nin_source_lang
     * @return string[]
     */
    public function getNinSourceLang()
    {
        return $this->nin_source_lang;
    }
  
    /**
     * Sets nin_source_lang
     * @param string[] $nin_source_lang Match all dictionaries with sourceLang not present in a subset of values
     * @return $this
     */
    public function setNinSourceLang($nin_source_lang)
    {
        
        $this->nin_source_lang = $nin_source_lang;
        return $this;
    }
    
    /**
     * Gets in_target_langs
     * @return string[]
     */
    public function getInTargetLangs()
    {
        return $this->in_target_langs;
    }
  
    /**
     * Sets in_target_langs
     * @param string[] $in_target_langs Match all dictionaries with targetLang from a subset of values present in targetLangs property
     * @return $this
     */
    public function setInTargetLangs($in_target_langs)
    {
        
        $this->in_target_langs = $in_target_langs;
        return $this;
    }
    
    /**
     * Gets regex_comments
     * @return string
     */
    public function getRegexComments()
    {
        return $this->regex_comments;
    }
  
    /**
     * Sets regex_comments
     * @param string $regex_comments Match all entries with comments containing the specified value
     * @return $this
     */
    public function setRegexComments($regex_comments)
    {
        
        $this->regex_comments = $regex_comments;
        return $this;
    }
    
    /**
     * Gets in_nb_entries
     * @return int[]
     */
    public function getInNbEntries()
    {
        return $this->in_nb_entries;
    }
  
    /**
     * Sets in_nb_entries
     * @param int[] $in_nb_entries Match all dictionaries with nbEntries present in a subset of values
     * @return $this
     */
    public function setInNbEntries($in_nb_entries)
    {
        
        $this->in_nb_entries = $in_nb_entries;
        return $this;
    }
    
    /**
     * Gets nin_nb_entries
     * @return int[]
     */
    public function getNinNbEntries()
    {
        return $this->nin_nb_entries;
    }
  
    /**
     * Sets nin_nb_entries
     * @param int[] $nin_nb_entries Match all dictionaries with nbEntries not present in a subset of values
     * @return $this
     */
    public function setNinNbEntries($nin_nb_entries)
    {
        
        $this->nin_nb_entries = $nin_nb_entries;
        return $this;
    }
    
    /**
     * Gets min_nb_entries
     * @return int
     */
    public function getMinNbEntries()
    {
        return $this->min_nb_entries;
    }
  
    /**
     * Sets min_nb_entries
     * @param int $min_nb_entries Match all entries with nbEntries equal and over specified value
     * @return $this
     */
    public function setMinNbEntries($min_nb_entries)
    {
        
        $this->min_nb_entries = $min_nb_entries;
        return $this;
    }
    
    /**
     * Gets max_nb_entries
     * @return int
     */
    public function getMaxNbEntries()
    {
        return $this->max_nb_entries;
    }
  
    /**
     * Sets max_nb_entries
     * @param int $max_nb_entries Match all entries with nbEntries under and equal specified value
     * @return $this
     */
    public function setMaxNbEntries($max_nb_entries)
    {
        
        $this->max_nb_entries = $max_nb_entries;
        return $this;
    }
    
    /**
     * Gets in_name
     * @return string[]
     */
    public function getInName()
    {
        return $this->in_name;
    }
  
    /**
     * Sets in_name
     * @param string[] $in_name Match all entries with name present in a subset of values
     * @return $this
     */
    public function setInName($in_name)
    {
        
        $this->in_name = $in_name;
        return $this;
    }
    
    /**
     * Gets nin_name
     * @return string[]
     */
    public function getNinName()
    {
        return $this->nin_name;
    }
  
    /**
     * Sets nin_name
     * @param string[] $nin_name Match all entries with name not present in a subset of values
     * @return $this
     */
    public function setNinName($nin_name)
    {
        
        $this->nin_name = $nin_name;
        return $this;
    }
    
    /**
     * Gets regex_name
     * @return string
     */
    public function getRegexName()
    {
        return $this->regex_name;
    }
  
    /**
     * Sets regex_name
     * @param string $regex_name Match all entries with name containing the specified value
     * @return $this
     */
    public function setRegexName($regex_name)
    {
        
        $this->regex_name = $regex_name;
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
