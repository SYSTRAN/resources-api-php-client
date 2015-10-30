<?php
/**
 * LookupTargetObject
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
 * LookupTargetObject Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class LookupTargetObject implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'context' => 'string',
        'domain' => 'string',
        'entry_id' => 'string',
        'expressions' => '\Systran\Client\Model\LookupExpressionObject[]',
        'invmeanings' => 'string[]',
        'lemma' => 'string',
        'rank' => 'string',
        'synonym' => 'string',
        'variant' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'context' => 'context',
        'domain' => 'domain',
        'entry_id' => 'entry_id',
        'expressions' => 'expressions',
        'invmeanings' => 'invmeanings',
        'lemma' => 'lemma',
        'rank' => 'rank',
        'synonym' => 'synonym',
        'variant' => 'variant'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'context' => 'setContext',
        'domain' => 'setDomain',
        'entry_id' => 'setEntryId',
        'expressions' => 'setExpressions',
        'invmeanings' => 'setInvmeanings',
        'lemma' => 'setLemma',
        'rank' => 'setRank',
        'synonym' => 'setSynonym',
        'variant' => 'setVariant'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'context' => 'getContext',
        'domain' => 'getDomain',
        'entry_id' => 'getEntryId',
        'expressions' => 'getExpressions',
        'invmeanings' => 'getInvmeanings',
        'lemma' => 'getLemma',
        'rank' => 'getRank',
        'synonym' => 'getSynonym',
        'variant' => 'getVariant'
    );
  
    
    /**
      * $context 
      * @var string
      */
    protected $context;
    
    /**
      * $domain 
      * @var string
      */
    protected $domain;
    
    /**
      * $entry_id 
      * @var string
      */
    protected $entry_id;
    
    /**
      * $expressions 
      * @var \Systran\Client\Model\LookupExpressionObject[]
      */
    protected $expressions;
    
    /**
      * $invmeanings 
      * @var string[]
      */
    protected $invmeanings;
    
    /**
      * $lemma 
      * @var string
      */
    protected $lemma;
    
    /**
      * $rank 
      * @var string
      */
    protected $rank;
    
    /**
      * $synonym 
      * @var string
      */
    protected $synonym;
    
    /**
      * $variant 
      * @var string
      */
    protected $variant;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->context = $data["context"];
            $this->domain = $data["domain"];
            $this->entry_id = $data["entry_id"];
            $this->expressions = $data["expressions"];
            $this->invmeanings = $data["invmeanings"];
            $this->lemma = $data["lemma"];
            $this->rank = $data["rank"];
            $this->synonym = $data["synonym"];
            $this->variant = $data["variant"];
        }
    }
    
    /**
     * Gets context
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }
  
    /**
     * Sets context
     * @param string $context 
     * @return $this
     */
    public function setContext($context)
    {
        
        $this->context = $context;
        return $this;
    }
    
    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }
  
    /**
     * Sets domain
     * @param string $domain 
     * @return $this
     */
    public function setDomain($domain)
    {
        
        $this->domain = $domain;
        return $this;
    }
    
    /**
     * Gets entry_id
     * @return string
     */
    public function getEntryId()
    {
        return $this->entry_id;
    }
  
    /**
     * Sets entry_id
     * @param string $entry_id 
     * @return $this
     */
    public function setEntryId($entry_id)
    {
        
        $this->entry_id = $entry_id;
        return $this;
    }
    
    /**
     * Gets expressions
     * @return \Systran\Client\Model\LookupExpressionObject[]
     */
    public function getExpressions()
    {
        return $this->expressions;
    }
  
    /**
     * Sets expressions
     * @param \Systran\Client\Model\LookupExpressionObject[] $expressions
     * @return $this
     */
    public function setExpressions($expressions)
    {
        
        $this->expressions = $expressions;
        return $this;
    }
    
    /**
     * Gets invmeanings
     * @return string[]
     */
    public function getInvmeanings()
    {
        return $this->invmeanings;
    }
  
    /**
     * Sets invmeanings
     * @param string[] $invmeanings 
     * @return $this
     */
    public function setInvmeanings($invmeanings)
    {
        
        $this->invmeanings = $invmeanings;
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
     * Gets rank
     * @return string
     */
    public function getRank()
    {
        return $this->rank;
    }
  
    /**
     * Sets rank
     * @param string $rank 
     * @return $this
     */
    public function setRank($rank)
    {
        
        $this->rank = $rank;
        return $this;
    }
    
    /**
     * Gets synonym
     * @return string
     */
    public function getSynonym()
    {
        return $this->synonym;
    }
  
    /**
     * Sets synonym
     * @param string $synonym 
     * @return $this
     */
    public function setSynonym($synonym)
    {
        
        $this->synonym = $synonym;
        return $this;
    }
    
    /**
     * Gets variant
     * @return string
     */
    public function getVariant()
    {
        return $this->variant;
    }
  
    /**
     * Sets variant
     * @param string $variant 
     * @return $this
     */
    public function setVariant($variant)
    {
        
        $this->variant = $variant;
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
