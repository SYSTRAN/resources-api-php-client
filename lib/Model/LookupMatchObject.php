<?php
/**
 * LookupMatchObject
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
 * LookupMatchObject Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Systran\Client
 * @author      http://github.com/Systran-api/Systran-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link
 */
class LookupMatchObject implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $SystranTypes = array(
        'auto_complete' => 'bool',
        'model_name' => 'string',
        'source' => '\Systran\Client\Model\LookupSourceObject',
        'target' => '\Systran\Client\Model\LookupTargetObject',
        'other_expressions' => '\Systran\Client\Model\LookupOtherExpression[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'auto_complete' => 'auto_complete',
        'model_name' => 'model_name',
        'source' => 'source',
        'target' => 'target',
        'other_expressions' => 'other_expressions'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'auto_complete' => 'setAutoComplete',
        'model_name' => 'setModelName',
        'source' => 'setSource',
        'target' => 'setTarget',
        'other_expressions' => 'setOtherExpressions'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'auto_complete' => 'getAutoComplete',
        'model_name' => 'getModelName',
        'source' => 'getSource',
        'target' => 'getTarget',
        'other_expressions' => 'getOtherExpressions'
    );
  
    
    /**
      * $auto_complete 
      * @var bool
      */
    protected $auto_complete;
    
    /**
      * $model_name 
      * @var string
      */
    protected $model_name;
    
    /**
      * $source 
      * @var \Systran\Client\Model\LookupSourceObject
      */
    protected $source;
    
    /**
      * $target 
      * @var \Systran\Client\Model\LookupTargetObject
      */
    protected $target;
    
    /**
      * $other_expressions 
      * @var \Systran\Client\Model\LookupOtherExpression[]
      */
    protected $other_expressions;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->auto_complete = $data["auto_complete"];
            $this->model_name = $data["model_name"];
            $this->source = $data["source"];
            $this->target = $data["target"];
            $this->other_expressions = $data["other_expressions"];
        }
    }
    
    /**
     * Gets auto_complete
     * @return bool
     */
    public function getAutoComplete()
    {
        return $this->auto_complete;
    }
  
    /**
     * Sets auto_complete
     * @param bool $auto_complete 
     * @return $this
     */
    public function setAutoComplete($auto_complete)
    {
        
        $this->auto_complete = $auto_complete;
        return $this;
    }
    
    /**
     * Gets model_name
     * @return string
     */
    public function getModelName()
    {
        return $this->model_name;
    }
  
    /**
     * Sets model_name
     * @param string $model_name 
     * @return $this
     */
    public function setModelName($model_name)
    {
        
        $this->model_name = $model_name;
        return $this;
    }
    
    /**
     * Gets source
     * @return \Systran\Client\Model\LookupSourceObject
     */
    public function getSource()
    {
        return $this->source;
    }
  
    /**
     * Sets source
     * @param \Systran\Client\Model\LookupSourceObject $source
     * @return $this
     */
    public function setSource($source)
    {
        
        $this->source = $source;
        return $this;
    }
    
    /**
     * Gets target
     * @return \Systran\Client\Model\LookupTargetObject
     */
    public function getTarget()
    {
        return $this->target;
    }
  
    /**
     * Sets target
     * @param \Systran\Client\Model\LookupTargetObject $target
     * @return $this
     */
    public function setTarget($target)
    {
        
        $this->target = $target;
        return $this;
    }
    
    /**
     * Gets other_expressions
     * @return \Systran\Client\Model\LookupOtherExpression[]
     */
    public function getOtherExpressions()
    {
        return $this->other_expressions;
    }
  
    /**
     * Sets other_expressions
     * @param \Systran\Client\Model\LookupOtherExpression[] $other_expressions
     * @return $this
     */
    public function setOtherExpressions($other_expressions)
    {
        
        $this->other_expressions = $other_expressions;
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
