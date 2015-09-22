<?php
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
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

namespace SwaggerClient\models;

use \ArrayAccess;

class Permission implements ArrayAccess {
  static $swaggerTypes = array(
      'target' => 'int',
      'variable_name' => 'string',
      'min_timestamp' => 'int',
      'max_timestamp' => 'int',
      'min_time_of_day' => 'int',
      'max_time_of_day' => 'int',
      'week' => 'string'
  );

  static $attributeMap = array(
      'target' => 'target',
      'variable_name' => 'variableName',
      'min_timestamp' => 'min_timestamp',
      'max_timestamp' => 'max_timestamp',
      'min_time_of_day' => 'min_time_of_day',
      'max_time_of_day' => 'max_time_of_day',
      'week' => 'week'
  );

  
  /**
  * Grant permission to target user or public so they may access measurements within the given parameters. TODO: Rename target to something more intuitive.
  */
  public $target; /* int */
  /**
  * ORIGINAL Variable name
  */
  public $variable_name; /* string */
  /**
  * Earliest time when measurements will be accessible in epoch seconds
  */
  public $min_timestamp; /* int */
  /**
  * Latest time when measurements will be accessible in epoch seconds
  */
  public $max_timestamp; /* int */
  /**
  * Earliest time of day when measurements will be accessible in epoch seconds
  */
  public $min_time_of_day; /* int */
  /**
  * Latest time of day when measurements will be accessible in epoch seconds
  */
  public $max_time_of_day; /* int */
  /**
  * Maybe specifies if only weekday measurements should be accessible
  */
  public $week; /* string */

  public function __construct(array $data = null) {
    $this->target = $data["target"];
    $this->variable_name = $data["variable_name"];
    $this->min_timestamp = $data["min_timestamp"];
    $this->max_timestamp = $data["max_timestamp"];
    $this->min_time_of_day = $data["min_time_of_day"];
    $this->max_time_of_day = $data["max_time_of_day"];
    $this->week = $data["week"];
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