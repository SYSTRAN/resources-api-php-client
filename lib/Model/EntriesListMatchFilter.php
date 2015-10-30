<?php
/**
 * EntriesListMatchFilter
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
 * EntriesListMatchFilter Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class EntriesListMatchFilter implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'in_source' => 'string[]',
        'nin_source' => 'string[]',
        'regex_source' => 'string',
        'in_target' => 'string[]',
        'nin_target' => 'string[]',
        'regex_target' => 'string',
        'in_part_of_speech' => 'string[]',
        'nin_part_of_speech' => 'string[]',
        'regex_comments' => 'string',
        'in_target_lang' => 'string[]',
        'nin_target_lang' => 'string[]',
        'min_priority' => 'int',
        'max_priority' => 'int',
        'in_priority' => 'int[]',
        'nin_priority' => 'int[]',
        'min_source_confidence' => 'int',
        'max_source_confidence' => 'int',
        'in_source_confidence' => 'int[]',
        'nin_source_confidence' => 'int[]',
        'min_target_confidence' => 'int',
        'max_target_confidence' => 'int',
        'in_target_confidence' => 'int[]',
        'nin_target_confidence' => 'int[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'in_source' => 'inSource',
        'nin_source' => 'ninSource',
        'regex_source' => 'regexSource',
        'in_target' => 'inTarget',
        'nin_target' => 'ninTarget',
        'regex_target' => 'regexTarget',
        'in_part_of_speech' => 'inPartOfSpeech',
        'nin_part_of_speech' => 'ninPartOfSpeech',
        'regex_comments' => 'regexComments',
        'in_target_lang' => 'inTargetLang',
        'nin_target_lang' => 'ninTargetLang',
        'min_priority' => 'minPriority',
        'max_priority' => 'maxPriority',
        'in_priority' => 'inPriority',
        'nin_priority' => 'ninPriority',
        'min_source_confidence' => 'minSourceConfidence',
        'max_source_confidence' => 'maxSourceConfidence',
        'in_source_confidence' => 'inSourceConfidence',
        'nin_source_confidence' => 'ninSourceConfidence',
        'min_target_confidence' => 'minTargetConfidence',
        'max_target_confidence' => 'maxTargetConfidence',
        'in_target_confidence' => 'inTargetConfidence',
        'nin_target_confidence' => 'ninTargetConfidence'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'in_source' => 'setInSource',
        'nin_source' => 'setNinSource',
        'regex_source' => 'setRegexSource',
        'in_target' => 'setInTarget',
        'nin_target' => 'setNinTarget',
        'regex_target' => 'setRegexTarget',
        'in_part_of_speech' => 'setInPartOfSpeech',
        'nin_part_of_speech' => 'setNinPartOfSpeech',
        'regex_comments' => 'setRegexComments',
        'in_target_lang' => 'setInTargetLang',
        'nin_target_lang' => 'setNinTargetLang',
        'min_priority' => 'setMinPriority',
        'max_priority' => 'setMaxPriority',
        'in_priority' => 'setInPriority',
        'nin_priority' => 'setNinPriority',
        'min_source_confidence' => 'setMinSourceConfidence',
        'max_source_confidence' => 'setMaxSourceConfidence',
        'in_source_confidence' => 'setInSourceConfidence',
        'nin_source_confidence' => 'setNinSourceConfidence',
        'min_target_confidence' => 'setMinTargetConfidence',
        'max_target_confidence' => 'setMaxTargetConfidence',
        'in_target_confidence' => 'setInTargetConfidence',
        'nin_target_confidence' => 'setNinTargetConfidence'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'in_source' => 'getInSource',
        'nin_source' => 'getNinSource',
        'regex_source' => 'getRegexSource',
        'in_target' => 'getInTarget',
        'nin_target' => 'getNinTarget',
        'regex_target' => 'getRegexTarget',
        'in_part_of_speech' => 'getInPartOfSpeech',
        'nin_part_of_speech' => 'getNinPartOfSpeech',
        'regex_comments' => 'getRegexComments',
        'in_target_lang' => 'getInTargetLang',
        'nin_target_lang' => 'getNinTargetLang',
        'min_priority' => 'getMinPriority',
        'max_priority' => 'getMaxPriority',
        'in_priority' => 'getInPriority',
        'nin_priority' => 'getNinPriority',
        'min_source_confidence' => 'getMinSourceConfidence',
        'max_source_confidence' => 'getMaxSourceConfidence',
        'in_source_confidence' => 'getInSourceConfidence',
        'nin_source_confidence' => 'getNinSourceConfidence',
        'min_target_confidence' => 'getMinTargetConfidence',
        'max_target_confidence' => 'getMaxTargetConfidence',
        'in_target_confidence' => 'getInTargetConfidence',
        'nin_target_confidence' => 'getNinTargetConfidence'
    );
  
    
    /**
      * $in_source Match all entries with source present in a subset of values
      * @var string[]
      */
    protected $in_source;
    
    /**
      * $nin_source Match all entries with source not present in a subset of values
      * @var string[]
      */
    protected $nin_source;
    
    /**
      * $regex_source Match all entries with source containing the specified value
      * @var string
      */
    protected $regex_source;
    
    /**
      * $in_target Match all entries with target present in a subset of values
      * @var string[]
      */
    protected $in_target;
    
    /**
      * $nin_target Match all entries with target not present in a subset of values
      * @var string[]
      */
    protected $nin_target;
    
    /**
      * $regex_target Match all entries with target containing the specified value
      * @var string
      */
    protected $regex_target;
    
    /**
      * $in_part_of_speech Match all entries with part of speech present in a subset of values
      * @var string[]
      */
    protected $in_part_of_speech;
    
    /**
      * $nin_part_of_speech Match all entries with part of speech not present in a subset of values
      * @var string[]
      */
    protected $nin_part_of_speech;
    
    /**
      * $regex_comments Match all entries with comments containing the specified value
      * @var string
      */
    protected $regex_comments;
    
    /**
      * $in_target_lang Match all entries with target lang present in a subset of values
      * @var string[]
      */
    protected $in_target_lang;
    
    /**
      * $nin_target_lang Match all entries with target lang not present in a subset of values
      * @var string[]
      */
    protected $nin_target_lang;
    
    /**
      * $min_priority Match all entries with priority equal and over specified value
      * @var int
      */
    protected $min_priority;
    
    /**
      * $max_priority Match all entries with priority under and equal specified value
      * @var int
      */
    protected $max_priority;
    
    /**
      * $in_priority Match all entries with priority present in a subset of values
      * @var int[]
      */
    protected $in_priority;
    
    /**
      * $nin_priority Match all entries with priority not present in a subset of values
      * @var int[]
      */
    protected $nin_priority;
    
    /**
      * $min_source_confidence Match all entries with source confidence equal and over specified value
      * @var int
      */
    protected $min_source_confidence;
    
    /**
      * $max_source_confidence Match all entries with source confidence under and equal specified value
      * @var int
      */
    protected $max_source_confidence;
    
    /**
      * $in_source_confidence Match all entries with sourceConfidence present in a subset of values
      * @var int[]
      */
    protected $in_source_confidence;
    
    /**
      * $nin_source_confidence Match all entries with sourceConfidence not present in a subset of values
      * @var int[]
      */
    protected $nin_source_confidence;
    
    /**
      * $min_target_confidence Match all entries with target confidence equal and over specified value
      * @var int
      */
    protected $min_target_confidence;
    
    /**
      * $max_target_confidence Match all entries with target confidence under and equal specified value
      * @var int
      */
    protected $max_target_confidence;
    
    /**
      * $in_target_confidence Match all entries with targetConfidence present in a subset of values
      * @var int[]
      */
    protected $in_target_confidence;
    
    /**
      * $nin_target_confidence Match all entries with targetConfidence not present in a subset of values
      * @var int[]
      */
    protected $nin_target_confidence;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->in_source = $data["in_source"];
            $this->nin_source = $data["nin_source"];
            $this->regex_source = $data["regex_source"];
            $this->in_target = $data["in_target"];
            $this->nin_target = $data["nin_target"];
            $this->regex_target = $data["regex_target"];
            $this->in_part_of_speech = $data["in_part_of_speech"];
            $this->nin_part_of_speech = $data["nin_part_of_speech"];
            $this->regex_comments = $data["regex_comments"];
            $this->in_target_lang = $data["in_target_lang"];
            $this->nin_target_lang = $data["nin_target_lang"];
            $this->min_priority = $data["min_priority"];
            $this->max_priority = $data["max_priority"];
            $this->in_priority = $data["in_priority"];
            $this->nin_priority = $data["nin_priority"];
            $this->min_source_confidence = $data["min_source_confidence"];
            $this->max_source_confidence = $data["max_source_confidence"];
            $this->in_source_confidence = $data["in_source_confidence"];
            $this->nin_source_confidence = $data["nin_source_confidence"];
            $this->min_target_confidence = $data["min_target_confidence"];
            $this->max_target_confidence = $data["max_target_confidence"];
            $this->in_target_confidence = $data["in_target_confidence"];
            $this->nin_target_confidence = $data["nin_target_confidence"];
        }
    }
    
    /**
     * Gets in_source
     * @return string[]
     */
    public function getInSource()
    {
        return $this->in_source;
    }
  
    /**
     * Sets in_source
     * @param string[] $in_source Match all entries with source present in a subset of values
     * @return $this
     */
    public function setInSource($in_source)
    {
        
        $this->in_source = $in_source;
        return $this;
    }
    
    /**
     * Gets nin_source
     * @return string[]
     */
    public function getNinSource()
    {
        return $this->nin_source;
    }
  
    /**
     * Sets nin_source
     * @param string[] $nin_source Match all entries with source not present in a subset of values
     * @return $this
     */
    public function setNinSource($nin_source)
    {
        
        $this->nin_source = $nin_source;
        return $this;
    }
    
    /**
     * Gets regex_source
     * @return string
     */
    public function getRegexSource()
    {
        return $this->regex_source;
    }
  
    /**
     * Sets regex_source
     * @param string $regex_source Match all entries with source containing the specified value
     * @return $this
     */
    public function setRegexSource($regex_source)
    {
        
        $this->regex_source = $regex_source;
        return $this;
    }
    
    /**
     * Gets in_target
     * @return string[]
     */
    public function getInTarget()
    {
        return $this->in_target;
    }
  
    /**
     * Sets in_target
     * @param string[] $in_target Match all entries with target present in a subset of values
     * @return $this
     */
    public function setInTarget($in_target)
    {
        
        $this->in_target = $in_target;
        return $this;
    }
    
    /**
     * Gets nin_target
     * @return string[]
     */
    public function getNinTarget()
    {
        return $this->nin_target;
    }
  
    /**
     * Sets nin_target
     * @param string[] $nin_target Match all entries with target not present in a subset of values
     * @return $this
     */
    public function setNinTarget($nin_target)
    {
        
        $this->nin_target = $nin_target;
        return $this;
    }
    
    /**
     * Gets regex_target
     * @return string
     */
    public function getRegexTarget()
    {
        return $this->regex_target;
    }
  
    /**
     * Sets regex_target
     * @param string $regex_target Match all entries with target containing the specified value
     * @return $this
     */
    public function setRegexTarget($regex_target)
    {
        
        $this->regex_target = $regex_target;
        return $this;
    }
    
    /**
     * Gets in_part_of_speech
     * @return string[]
     */
    public function getInPartOfSpeech()
    {
        return $this->in_part_of_speech;
    }
  
    /**
     * Sets in_part_of_speech
     * @param string[] $in_part_of_speech Match all entries with part of speech present in a subset of values
     * @return $this
     */
    public function setInPartOfSpeech($in_part_of_speech)
    {
        
        $this->in_part_of_speech = $in_part_of_speech;
        return $this;
    }
    
    /**
     * Gets nin_part_of_speech
     * @return string[]
     */
    public function getNinPartOfSpeech()
    {
        return $this->nin_part_of_speech;
    }
  
    /**
     * Sets nin_part_of_speech
     * @param string[] $nin_part_of_speech Match all entries with part of speech not present in a subset of values
     * @return $this
     */
    public function setNinPartOfSpeech($nin_part_of_speech)
    {
        
        $this->nin_part_of_speech = $nin_part_of_speech;
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
     * Gets in_target_lang
     * @return string[]
     */
    public function getInTargetLang()
    {
        return $this->in_target_lang;
    }
  
    /**
     * Sets in_target_lang
     * @param string[] $in_target_lang Match all entries with target lang present in a subset of values
     * @return $this
     */
    public function setInTargetLang($in_target_lang)
    {
        
        $this->in_target_lang = $in_target_lang;
        return $this;
    }
    
    /**
     * Gets nin_target_lang
     * @return string[]
     */
    public function getNinTargetLang()
    {
        return $this->nin_target_lang;
    }
  
    /**
     * Sets nin_target_lang
     * @param string[] $nin_target_lang Match all entries with target lang not present in a subset of values
     * @return $this
     */
    public function setNinTargetLang($nin_target_lang)
    {
        
        $this->nin_target_lang = $nin_target_lang;
        return $this;
    }
    
    /**
     * Gets min_priority
     * @return int
     */
    public function getMinPriority()
    {
        return $this->min_priority;
    }
  
    /**
     * Sets min_priority
     * @param int $min_priority Match all entries with priority equal and over specified value
     * @return $this
     */
    public function setMinPriority($min_priority)
    {
        
        $this->min_priority = $min_priority;
        return $this;
    }
    
    /**
     * Gets max_priority
     * @return int
     */
    public function getMaxPriority()
    {
        return $this->max_priority;
    }
  
    /**
     * Sets max_priority
     * @param int $max_priority Match all entries with priority under and equal specified value
     * @return $this
     */
    public function setMaxPriority($max_priority)
    {
        
        $this->max_priority = $max_priority;
        return $this;
    }
    
    /**
     * Gets in_priority
     * @return int[]
     */
    public function getInPriority()
    {
        return $this->in_priority;
    }
  
    /**
     * Sets in_priority
     * @param int[] $in_priority Match all entries with priority present in a subset of values
     * @return $this
     */
    public function setInPriority($in_priority)
    {
        
        $this->in_priority = $in_priority;
        return $this;
    }
    
    /**
     * Gets nin_priority
     * @return int[]
     */
    public function getNinPriority()
    {
        return $this->nin_priority;
    }
  
    /**
     * Sets nin_priority
     * @param int[] $nin_priority Match all entries with priority not present in a subset of values
     * @return $this
     */
    public function setNinPriority($nin_priority)
    {
        
        $this->nin_priority = $nin_priority;
        return $this;
    }
    
    /**
     * Gets min_source_confidence
     * @return int
     */
    public function getMinSourceConfidence()
    {
        return $this->min_source_confidence;
    }
  
    /**
     * Sets min_source_confidence
     * @param int $min_source_confidence Match all entries with source confidence equal and over specified value
     * @return $this
     */
    public function setMinSourceConfidence($min_source_confidence)
    {
        
        $this->min_source_confidence = $min_source_confidence;
        return $this;
    }
    
    /**
     * Gets max_source_confidence
     * @return int
     */
    public function getMaxSourceConfidence()
    {
        return $this->max_source_confidence;
    }
  
    /**
     * Sets max_source_confidence
     * @param int $max_source_confidence Match all entries with source confidence under and equal specified value
     * @return $this
     */
    public function setMaxSourceConfidence($max_source_confidence)
    {
        
        $this->max_source_confidence = $max_source_confidence;
        return $this;
    }
    
    /**
     * Gets in_source_confidence
     * @return int[]
     */
    public function getInSourceConfidence()
    {
        return $this->in_source_confidence;
    }
  
    /**
     * Sets in_source_confidence
     * @param int[] $in_source_confidence Match all entries with sourceConfidence present in a subset of values
     * @return $this
     */
    public function setInSourceConfidence($in_source_confidence)
    {
        
        $this->in_source_confidence = $in_source_confidence;
        return $this;
    }
    
    /**
     * Gets nin_source_confidence
     * @return int[]
     */
    public function getNinSourceConfidence()
    {
        return $this->nin_source_confidence;
    }
  
    /**
     * Sets nin_source_confidence
     * @param int[] $nin_source_confidence Match all entries with sourceConfidence not present in a subset of values
     * @return $this
     */
    public function setNinSourceConfidence($nin_source_confidence)
    {
        
        $this->nin_source_confidence = $nin_source_confidence;
        return $this;
    }
    
    /**
     * Gets min_target_confidence
     * @return int
     */
    public function getMinTargetConfidence()
    {
        return $this->min_target_confidence;
    }
  
    /**
     * Sets min_target_confidence
     * @param int $min_target_confidence Match all entries with target confidence equal and over specified value
     * @return $this
     */
    public function setMinTargetConfidence($min_target_confidence)
    {
        
        $this->min_target_confidence = $min_target_confidence;
        return $this;
    }
    
    /**
     * Gets max_target_confidence
     * @return int
     */
    public function getMaxTargetConfidence()
    {
        return $this->max_target_confidence;
    }
  
    /**
     * Sets max_target_confidence
     * @param int $max_target_confidence Match all entries with target confidence under and equal specified value
     * @return $this
     */
    public function setMaxTargetConfidence($max_target_confidence)
    {
        
        $this->max_target_confidence = $max_target_confidence;
        return $this;
    }
    
    /**
     * Gets in_target_confidence
     * @return int[]
     */
    public function getInTargetConfidence()
    {
        return $this->in_target_confidence;
    }
  
    /**
     * Sets in_target_confidence
     * @param int[] $in_target_confidence Match all entries with targetConfidence present in a subset of values
     * @return $this
     */
    public function setInTargetConfidence($in_target_confidence)
    {
        
        $this->in_target_confidence = $in_target_confidence;
        return $this;
    }
    
    /**
     * Gets nin_target_confidence
     * @return int[]
     */
    public function getNinTargetConfidence()
    {
        return $this->nin_target_confidence;
    }
  
    /**
     * Sets nin_target_confidence
     * @param int[] $nin_target_confidence Match all entries with targetConfidence not present in a subset of values
     * @return $this
     */
    public function setNinTargetConfidence($nin_target_confidence)
    {
        
        $this->nin_target_confidence = $nin_target_confidence;
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
