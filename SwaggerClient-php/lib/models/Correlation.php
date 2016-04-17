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

class Correlation implements ArrayAccess {
  static $swaggerTypes = array(
      'correlation_coefficient' => 'Number',
      'cause' => 'string',
      'effect' => 'string',
      'onset_delay' => 'double',
      'duration_of_action' => 'Number',
      'number_of_pairs' => 'Number',
      'effect_size' => 'string',
      'statistical_significance' => 'string',
      'timestamp' => 'Number',
      'reverse_correlation' => 'Number',
      'causality_factor' => 'Number',
      'cause_category' => 'string',
      'effect_category' => 'string'
  );

  static $attributeMap = array(
      'correlation_coefficient' => 'correlationCoefficient',
      'cause' => 'cause',
      'effect' => 'effect',
      'onset_delay' => 'onsetDelay',
      'duration_of_action' => 'durationOfAction',
      'number_of_pairs' => 'numberOfPairs',
      'effect_size' => 'effectSize',
      'statistical_significance' => 'statisticalSignificance',
      'timestamp' => 'timestamp',
      'reverse_correlation' => 'reverseCorrelation',
      'causality_factor' => 'causalityFactor',
      'cause_category' => 'causeCategory',
      'effect_category' => 'effectCategory'
  );

  
  /**
  * Pearson correlation coefficient between cause and effect measurements
  */
  public $correlation_coefficient; /* Number */
  /**
  * ORIGINAL variable name of the cause variable for which the user desires correlations.
  */
  public $cause; /* string */
  /**
  * ORIGINAL variable name of the effect variable for which the user desires correlations.
  */
  public $effect; /* string */
  /**
  * User estimated or default time after cause measurement before a perceivable effect is observed
  */
  public $onset_delay; /* double */
  /**
  * Time over which the cause is expected to produce a perceivable effect following the onset delay
  */
  public $duration_of_action; /* Number */
  /**
  * Number of points that went into the correlation calculation
  */
  public $number_of_pairs; /* Number */
  /**
  * Magnitude of the effects of a cause indicating whether it's practically meaningful.
  */
  public $effect_size; /* string */
  /**
  * A function of the effect size and sample size
  */
  public $statistical_significance; /* string */
  /**
  * Time at which correlation was calculated
  */
  public $timestamp; /* Number */
  /**
  * Correlation when cause and effect are reversed. For any causal relationship, the forward correlation should exceed the reverse correlation.
  */
  public $reverse_correlation; /* Number */
  /**
  * 
  */
  public $causality_factor; /* Number */
  /**
  * Variable category of the cause variable.
  */
  public $cause_category; /* string */
  /**
  * Variable category of the effect variable.
  */
  public $effect_category; /* string */

  public function __construct(array $data = null) {
    $this->correlation_coefficient = $data["correlation_coefficient"];
    $this->cause = $data["cause"];
    $this->effect = $data["effect"];
    $this->onset_delay = $data["onset_delay"];
    $this->duration_of_action = $data["duration_of_action"];
    $this->number_of_pairs = $data["number_of_pairs"];
    $this->effect_size = $data["effect_size"];
    $this->statistical_significance = $data["statistical_significance"];
    $this->timestamp = $data["timestamp"];
    $this->reverse_correlation = $data["reverse_correlation"];
    $this->causality_factor = $data["causality_factor"];
    $this->cause_category = $data["cause_category"];
    $this->effect_category = $data["effect_category"];
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