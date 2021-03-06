<?php
/**
 * VariableCharts
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * quantimodo
 *
 * We make it easy to retrieve and analyze normalized user data from a wide array of devices and applications. Check out our [docs and sdk's](https://github.com/QuantiModo/docs) or [contact us](https://help.quantimo.do).
 *
 * OpenAPI spec version: 5.8.112511
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.9
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QuantiModo\Client\Model;

use \ArrayAccess;
use \QuantiModo\Client\ObjectSerializer;

/**
 * VariableCharts Class Doc Comment
 *
 * @category Class
 * @description An object with various chart properties each property contain and svg and Highcharts configuration
 * @package  QuantiModo\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VariableCharts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VariableCharts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hourly_column_chart' => '\QuantiModo\Client\Model\Chart',
        'monthly_column_chart' => '\QuantiModo\Client\Model\Chart',
        'distribution_column_chart' => '\QuantiModo\Client\Model\Chart',
        'weekday_column_chart' => '\QuantiModo\Client\Model\Chart',
        'line_chart_without_smoothing' => '\QuantiModo\Client\Model\Chart',
        'line_chart_with_smoothing' => '\QuantiModo\Client\Model\Chart'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hourly_column_chart' => null,
        'monthly_column_chart' => null,
        'distribution_column_chart' => null,
        'weekday_column_chart' => null,
        'line_chart_without_smoothing' => null,
        'line_chart_with_smoothing' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'hourly_column_chart' => 'hourlyColumnChart',
        'monthly_column_chart' => 'monthlyColumnChart',
        'distribution_column_chart' => 'distributionColumnChart',
        'weekday_column_chart' => 'weekdayColumnChart',
        'line_chart_without_smoothing' => 'lineChartWithoutSmoothing',
        'line_chart_with_smoothing' => 'lineChartWithSmoothing'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hourly_column_chart' => 'setHourlyColumnChart',
        'monthly_column_chart' => 'setMonthlyColumnChart',
        'distribution_column_chart' => 'setDistributionColumnChart',
        'weekday_column_chart' => 'setWeekdayColumnChart',
        'line_chart_without_smoothing' => 'setLineChartWithoutSmoothing',
        'line_chart_with_smoothing' => 'setLineChartWithSmoothing'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hourly_column_chart' => 'getHourlyColumnChart',
        'monthly_column_chart' => 'getMonthlyColumnChart',
        'distribution_column_chart' => 'getDistributionColumnChart',
        'weekday_column_chart' => 'getWeekdayColumnChart',
        'line_chart_without_smoothing' => 'getLineChartWithoutSmoothing',
        'line_chart_with_smoothing' => 'getLineChartWithSmoothing'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['hourly_column_chart'] = isset($data['hourly_column_chart']) ? $data['hourly_column_chart'] : null;
        $this->container['monthly_column_chart'] = isset($data['monthly_column_chart']) ? $data['monthly_column_chart'] : null;
        $this->container['distribution_column_chart'] = isset($data['distribution_column_chart']) ? $data['distribution_column_chart'] : null;
        $this->container['weekday_column_chart'] = isset($data['weekday_column_chart']) ? $data['weekday_column_chart'] : null;
        $this->container['line_chart_without_smoothing'] = isset($data['line_chart_without_smoothing']) ? $data['line_chart_without_smoothing'] : null;
        $this->container['line_chart_with_smoothing'] = isset($data['line_chart_with_smoothing']) ? $data['line_chart_with_smoothing'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets hourly_column_chart
     *
     * @return \QuantiModo\Client\Model\Chart
     */
    public function getHourlyColumnChart()
    {
        return $this->container['hourly_column_chart'];
    }

    /**
     * Sets hourly_column_chart
     *
     * @param \QuantiModo\Client\Model\Chart $hourly_column_chart hourly_column_chart
     *
     * @return $this
     */
    public function setHourlyColumnChart($hourly_column_chart)
    {
        $this->container['hourly_column_chart'] = $hourly_column_chart;

        return $this;
    }

    /**
     * Gets monthly_column_chart
     *
     * @return \QuantiModo\Client\Model\Chart
     */
    public function getMonthlyColumnChart()
    {
        return $this->container['monthly_column_chart'];
    }

    /**
     * Sets monthly_column_chart
     *
     * @param \QuantiModo\Client\Model\Chart $monthly_column_chart monthly_column_chart
     *
     * @return $this
     */
    public function setMonthlyColumnChart($monthly_column_chart)
    {
        $this->container['monthly_column_chart'] = $monthly_column_chart;

        return $this;
    }

    /**
     * Gets distribution_column_chart
     *
     * @return \QuantiModo\Client\Model\Chart
     */
    public function getDistributionColumnChart()
    {
        return $this->container['distribution_column_chart'];
    }

    /**
     * Sets distribution_column_chart
     *
     * @param \QuantiModo\Client\Model\Chart $distribution_column_chart distribution_column_chart
     *
     * @return $this
     */
    public function setDistributionColumnChart($distribution_column_chart)
    {
        $this->container['distribution_column_chart'] = $distribution_column_chart;

        return $this;
    }

    /**
     * Gets weekday_column_chart
     *
     * @return \QuantiModo\Client\Model\Chart
     */
    public function getWeekdayColumnChart()
    {
        return $this->container['weekday_column_chart'];
    }

    /**
     * Sets weekday_column_chart
     *
     * @param \QuantiModo\Client\Model\Chart $weekday_column_chart weekday_column_chart
     *
     * @return $this
     */
    public function setWeekdayColumnChart($weekday_column_chart)
    {
        $this->container['weekday_column_chart'] = $weekday_column_chart;

        return $this;
    }

    /**
     * Gets line_chart_without_smoothing
     *
     * @return \QuantiModo\Client\Model\Chart
     */
    public function getLineChartWithoutSmoothing()
    {
        return $this->container['line_chart_without_smoothing'];
    }

    /**
     * Sets line_chart_without_smoothing
     *
     * @param \QuantiModo\Client\Model\Chart $line_chart_without_smoothing line_chart_without_smoothing
     *
     * @return $this
     */
    public function setLineChartWithoutSmoothing($line_chart_without_smoothing)
    {
        $this->container['line_chart_without_smoothing'] = $line_chart_without_smoothing;

        return $this;
    }

    /**
     * Gets line_chart_with_smoothing
     *
     * @return \QuantiModo\Client\Model\Chart
     */
    public function getLineChartWithSmoothing()
    {
        return $this->container['line_chart_with_smoothing'];
    }

    /**
     * Sets line_chart_with_smoothing
     *
     * @param \QuantiModo\Client\Model\Chart $line_chart_with_smoothing line_chart_with_smoothing
     *
     * @return $this
     */
    public function setLineChartWithSmoothing($line_chart_with_smoothing)
    {
        $this->container['line_chart_with_smoothing'] = $line_chart_with_smoothing;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


