<?php
/**
 * StudyHtml
 *
 * PHP version 5
 *
 * @category Class
 * @package  QuantiModo\Client
 * @author   Swaagger Codegen team
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace QuantiModo\Client\Model;

use \ArrayAccess;

/**
 * StudyHtml Class Doc Comment
 *
 * @category    Class
 * @package     QuantiModo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StudyHtml implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'StudyHtml';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'full_study_html' => 'string',
        'full_study_html_with_css_styles' => 'string',
        'statistics_table_html' => 'string',
        'chart_html' => 'string',
        'download_buttons_html' => 'string',
        'study_meta_html' => 'string',
        'study_image_html' => 'string',
        'study_text_html' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'full_study_html' => null,
        'full_study_html_with_css_styles' => null,
        'statistics_table_html' => null,
        'chart_html' => null,
        'download_buttons_html' => null,
        'study_meta_html' => null,
        'study_image_html' => null,
        'study_text_html' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'full_study_html' => 'fullStudyHtml',
        'full_study_html_with_css_styles' => 'fullStudyHtmlWithCssStyles',
        'statistics_table_html' => 'statisticsTableHtml',
        'chart_html' => 'chartHtml',
        'download_buttons_html' => 'downloadButtonsHtml',
        'study_meta_html' => 'studyMetaHtml',
        'study_image_html' => 'studyImageHtml',
        'study_text_html' => 'studyTextHtml'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'full_study_html' => 'setFullStudyHtml',
        'full_study_html_with_css_styles' => 'setFullStudyHtmlWithCssStyles',
        'statistics_table_html' => 'setStatisticsTableHtml',
        'chart_html' => 'setChartHtml',
        'download_buttons_html' => 'setDownloadButtonsHtml',
        'study_meta_html' => 'setStudyMetaHtml',
        'study_image_html' => 'setStudyImageHtml',
        'study_text_html' => 'setStudyTextHtml'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'full_study_html' => 'getFullStudyHtml',
        'full_study_html_with_css_styles' => 'getFullStudyHtmlWithCssStyles',
        'statistics_table_html' => 'getStatisticsTableHtml',
        'chart_html' => 'getChartHtml',
        'download_buttons_html' => 'getDownloadButtonsHtml',
        'study_meta_html' => 'getStudyMetaHtml',
        'study_image_html' => 'getStudyImageHtml',
        'study_text_html' => 'getStudyTextHtml'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['full_study_html'] = isset($data['full_study_html']) ? $data['full_study_html'] : null;
        $this->container['full_study_html_with_css_styles'] = isset($data['full_study_html_with_css_styles']) ? $data['full_study_html_with_css_styles'] : null;
        $this->container['statistics_table_html'] = isset($data['statistics_table_html']) ? $data['statistics_table_html'] : null;
        $this->container['chart_html'] = isset($data['chart_html']) ? $data['chart_html'] : null;
        $this->container['download_buttons_html'] = isset($data['download_buttons_html']) ? $data['download_buttons_html'] : null;
        $this->container['study_meta_html'] = isset($data['study_meta_html']) ? $data['study_meta_html'] : null;
        $this->container['study_image_html'] = isset($data['study_image_html']) ? $data['study_image_html'] : null;
        $this->container['study_text_html'] = isset($data['study_text_html']) ? $data['study_text_html'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['full_study_html'] === null) {
            $invalid_properties[] = "'full_study_html' can't be null";
        }
        if ($this->container['chart_html'] === null) {
            $invalid_properties[] = "'chart_html' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['full_study_html'] === null) {
            return false;
        }
        if ($this->container['chart_html'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets full_study_html
     * @return string
     */
    public function getFullStudyHtml()
    {
        return $this->container['full_study_html'];
    }

    /**
     * Sets full_study_html
     * @param string $full_study_html Embeddable study text html including charts.  Modifiable css classes are study-title, study-section-header, study-section-body
     * @return $this
     */
    public function setFullStudyHtml($full_study_html)
    {
        $this->container['full_study_html'] = $full_study_html;

        return $this;
    }

    /**
     * Gets full_study_html_with_css_styles
     * @return string
     */
    public function getFullStudyHtmlWithCssStyles()
    {
        return $this->container['full_study_html_with_css_styles'];
    }

    /**
     * Sets full_study_html_with_css_styles
     * @param string $full_study_html_with_css_styles Embeddable study text html including charts and css styling
     * @return $this
     */
    public function setFullStudyHtmlWithCssStyles($full_study_html_with_css_styles)
    {
        $this->container['full_study_html_with_css_styles'] = $full_study_html_with_css_styles;

        return $this;
    }

    /**
     * Gets statistics_table_html
     * @return string
     */
    public function getStatisticsTableHtml()
    {
        return $this->container['statistics_table_html'];
    }

    /**
     * Sets statistics_table_html
     * @param string $statistics_table_html Embeddable table with statistics
     * @return $this
     */
    public function setStatisticsTableHtml($statistics_table_html)
    {
        $this->container['statistics_table_html'] = $statistics_table_html;

        return $this;
    }

    /**
     * Gets chart_html
     * @return string
     */
    public function getChartHtml()
    {
        return $this->container['chart_html'];
    }

    /**
     * Sets chart_html
     * @param string $chart_html Embeddable chart html
     * @return $this
     */
    public function setChartHtml($chart_html)
    {
        $this->container['chart_html'] = $chart_html;

        return $this;
    }

    /**
     * Gets download_buttons_html
     * @return string
     */
    public function getDownloadButtonsHtml()
    {
        return $this->container['download_buttons_html'];
    }

    /**
     * Sets download_buttons_html
     * @param string $download_buttons_html Play Store, App Store, Chrome Web Store
     * @return $this
     */
    public function setDownloadButtonsHtml($download_buttons_html)
    {
        $this->container['download_buttons_html'] = $download_buttons_html;

        return $this;
    }

    /**
     * Gets study_meta_html
     * @return string
     */
    public function getStudyMetaHtml()
    {
        return $this->container['study_meta_html'];
    }

    /**
     * Sets study_meta_html
     * @param string $study_meta_html Facebook, Twitter, Google+
     * @return $this
     */
    public function setStudyMetaHtml($study_meta_html)
    {
        $this->container['study_meta_html'] = $study_meta_html;

        return $this;
    }

    /**
     * Gets study_image_html
     * @return string
     */
    public function getStudyImageHtml()
    {
        return $this->container['study_image_html'];
    }

    /**
     * Sets study_image_html
     * @param string $study_image_html PNG image
     * @return $this
     */
    public function setStudyImageHtml($study_image_html)
    {
        $this->container['study_image_html'] = $study_image_html;

        return $this;
    }

    /**
     * Gets study_text_html
     * @return string
     */
    public function getStudyTextHtml()
    {
        return $this->container['study_text_html'];
    }

    /**
     * Sets study_text_html
     * @param string $study_text_html Formatting study text
     * @return $this
     */
    public function setStudyTextHtml($study_text_html)
    {
        $this->container['study_text_html'] = $study_text_html;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\QuantiModo\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\QuantiModo\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


