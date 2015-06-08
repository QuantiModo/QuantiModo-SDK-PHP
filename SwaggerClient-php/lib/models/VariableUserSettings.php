<?php
/**
 *  Copyright 2015 Reverb Technologies, Inc.
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
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

namespace SwaggerClient\models;

use \ArrayAccess;

class VariableUserSettings implements ArrayAccess {
  static $swaggerTypes = array(
      'user' => 'int',
      'variable' => 'string',
      'duration_of_action' => 'int',
      'filling_value' => 'int',
      'join_with' => 'string',
      'maximum_value' => 'float',
      'minimum_value' => 'float',
      'name' => 'string',
      'onset_delay' => 'int',
      'unit' => 'string'
  );

  static $attributeMap = array(
      'user' => 'user',
      'variable' => 'variable',
      'duration_of_action' => 'durationOfAction',
      'filling_value' => 'fillingValue',
      'join_with' => 'joinWith',
      'maximum_value' => 'maximumValue',
      'minimum_value' => 'minimumValue',
      'name' => 'name',
      'onset_delay' => 'onsetDelay',
      'unit' => 'unit'
  );

  
  /**
  * User ID
  */
  public $user; /* int */
  /**
  * Variable DISPLAY name
  */
  public $variable; /* string */
  /**
  * Estimated duration of time following the onset delay in which a stimulus produces a perceivable effect
  */
  public $duration_of_action; /* int */
  /**
  * fillingValue
  */
  public $filling_value; /* int */
  /**
  * joinWith
  */
  public $join_with; /* string */
  /**
  * maximumValue
  */
  public $maximum_value; /* float */
  /**
  * minimumValue
  */
  public $minimum_value; /* float */
  /**
  * name
  */
  public $name; /* string */
  /**
  * onsetDelay
  */
  public $onset_delay; /* int */
  /**
  * unit
  */
  public $unit; /* string */

  public function __construct(array $data = null) {
    $this->user = $data["user"];
    $this->variable = $data["variable"];
    $this->duration_of_action = $data["duration_of_action"];
    $this->filling_value = $data["filling_value"];
    $this->join_with = $data["join_with"];
    $this->maximum_value = $data["maximum_value"];
    $this->minimum_value = $data["minimum_value"];
    $this->name = $data["name"];
    $this->onset_delay = $data["onset_delay"];
    $this->unit = $data["unit"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
