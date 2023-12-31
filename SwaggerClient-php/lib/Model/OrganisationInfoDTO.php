<?php
/**
 * OrganisationInfoDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UMAS API PROD
 *
 * These are UMAS published API availble for third party system consumption.
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.47-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * OrganisationInfoDTO Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrganisationInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrganisationInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_id' => 'string',
        'gs_id' => 'string',
        'type' => 'string',
        'tax_no' => 'string',
        'main_address' => '\Swagger\Client\Model\Address',
        'website' => 'string',
        'company_email' => 'string',
        'name' => 'string',
        'trust_level' => 'string',
        'business_partner' => 'string',
        'translated_name' => 'string',
        'delivery_addresses' => '\Swagger\Client\Model\Address[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_id' => null,
        'gs_id' => null,
        'type' => null,
        'tax_no' => null,
        'main_address' => null,
        'website' => null,
        'company_email' => null,
        'name' => null,
        'trust_level' => null,
        'business_partner' => null,
        'translated_name' => null,
        'delivery_addresses' => null
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
        'organization_id' => 'organizationId',
        'gs_id' => 'gsId',
        'type' => 'type',
        'tax_no' => 'taxNo',
        'main_address' => 'mainAddress',
        'website' => 'website',
        'company_email' => 'companyEmail',
        'name' => 'name',
        'trust_level' => 'trustLevel',
        'business_partner' => 'businessPartner',
        'translated_name' => 'translatedName',
        'delivery_addresses' => 'deliveryAddresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_id' => 'setOrganizationId',
        'gs_id' => 'setGsId',
        'type' => 'setType',
        'tax_no' => 'setTaxNo',
        'main_address' => 'setMainAddress',
        'website' => 'setWebsite',
        'company_email' => 'setCompanyEmail',
        'name' => 'setName',
        'trust_level' => 'setTrustLevel',
        'business_partner' => 'setBusinessPartner',
        'translated_name' => 'setTranslatedName',
        'delivery_addresses' => 'setDeliveryAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_id' => 'getOrganizationId',
        'gs_id' => 'getGsId',
        'type' => 'getType',
        'tax_no' => 'getTaxNo',
        'main_address' => 'getMainAddress',
        'website' => 'getWebsite',
        'company_email' => 'getCompanyEmail',
        'name' => 'getName',
        'trust_level' => 'getTrustLevel',
        'business_partner' => 'getBusinessPartner',
        'translated_name' => 'getTranslatedName',
        'delivery_addresses' => 'getDeliveryAddresses'
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

    const TYPE_FREE_WORKSHOP = 'FREE_WORKSHOP';
    const TYPE_ISP_WITHOUT_WS = 'ISP_WITHOUT_WS';
    const TYPE_PUBLISHER = 'PUBLISHER';
    const TYPE_TRAINING_FACILITY = 'TRAINING_FACILITY';
    const TYPE_FLEET = 'FLEET';
    const TYPE_AUTHORITIES = 'AUTHORITIES';
    const TYPE_PRIVATE_PERSON = 'PRIVATE_PERSON';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FREE_WORKSHOP,
            self::TYPE_ISP_WITHOUT_WS,
            self::TYPE_PUBLISHER,
            self::TYPE_TRAINING_FACILITY,
            self::TYPE_FLEET,
            self::TYPE_AUTHORITIES,
            self::TYPE_PRIVATE_PERSON,
        ];
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
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['gs_id'] = isset($data['gs_id']) ? $data['gs_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tax_no'] = isset($data['tax_no']) ? $data['tax_no'] : null;
        $this->container['main_address'] = isset($data['main_address']) ? $data['main_address'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['company_email'] = isset($data['company_email']) ? $data['company_email'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['trust_level'] = isset($data['trust_level']) ? $data['trust_level'] : null;
        $this->container['business_partner'] = isset($data['business_partner']) ? $data['business_partner'] : null;
        $this->container['translated_name'] = isset($data['translated_name']) ? $data['translated_name'] : null;
        $this->container['delivery_addresses'] = isset($data['delivery_addresses']) ? $data['delivery_addresses'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id organization_id
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets gs_id
     *
     * @return string
     */
    public function getGsId()
    {
        return $this->container['gs_id'];
    }

    /**
     * Sets gs_id
     *
     * @param string $gs_id gs_id
     *
     * @return $this
     */
    public function setGsId($gs_id)
    {
        $this->container['gs_id'] = $gs_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets tax_no
     *
     * @return string
     */
    public function getTaxNo()
    {
        return $this->container['tax_no'];
    }

    /**
     * Sets tax_no
     *
     * @param string $tax_no tax_no
     *
     * @return $this
     */
    public function setTaxNo($tax_no)
    {
        $this->container['tax_no'] = $tax_no;

        return $this;
    }

    /**
     * Gets main_address
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getMainAddress()
    {
        return $this->container['main_address'];
    }

    /**
     * Sets main_address
     *
     * @param \Swagger\Client\Model\Address $main_address main_address
     *
     * @return $this
     */
    public function setMainAddress($main_address)
    {
        $this->container['main_address'] = $main_address;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string $website website
     *
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets company_email
     *
     * @return string
     */
    public function getCompanyEmail()
    {
        return $this->container['company_email'];
    }

    /**
     * Sets company_email
     *
     * @param string $company_email company_email
     *
     * @return $this
     */
    public function setCompanyEmail($company_email)
    {
        $this->container['company_email'] = $company_email;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets trust_level
     *
     * @return string
     */
    public function getTrustLevel()
    {
        return $this->container['trust_level'];
    }

    /**
     * Sets trust_level
     *
     * @param string $trust_level trust_level
     *
     * @return $this
     */
    public function setTrustLevel($trust_level)
    {
        $this->container['trust_level'] = $trust_level;

        return $this;
    }

    /**
     * Gets business_partner
     *
     * @return string
     */
    public function getBusinessPartner()
    {
        return $this->container['business_partner'];
    }

    /**
     * Sets business_partner
     *
     * @param string $business_partner business_partner
     *
     * @return $this
     */
    public function setBusinessPartner($business_partner)
    {
        $this->container['business_partner'] = $business_partner;

        return $this;
    }

    /**
     * Gets translated_name
     *
     * @return string
     */
    public function getTranslatedName()
    {
        return $this->container['translated_name'];
    }

    /**
     * Sets translated_name
     *
     * @param string $translated_name translated_name
     *
     * @return $this
     */
    public function setTranslatedName($translated_name)
    {
        $this->container['translated_name'] = $translated_name;

        return $this;
    }

    /**
     * Gets delivery_addresses
     *
     * @return \Swagger\Client\Model\Address[]
     */
    public function getDeliveryAddresses()
    {
        return $this->container['delivery_addresses'];
    }

    /**
     * Sets delivery_addresses
     *
     * @param \Swagger\Client\Model\Address[] $delivery_addresses delivery_addresses
     *
     * @return $this
     */
    public function setDeliveryAddresses($delivery_addresses)
    {
        $this->container['delivery_addresses'] = $delivery_addresses;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
