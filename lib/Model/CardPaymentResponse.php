<?php
/**
 * CardPaymentResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  CpaymentConnector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Gateway
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CpaymentConnector\Model;

use \ArrayAccess;
use \CpaymentConnector\ObjectSerializer;

/**
 * CardPaymentResponse Class Doc Comment
 *
 * @category Class
 * @description The card payment response
 * @package  CpaymentConnector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CardPaymentResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardPaymentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchant_account_ref' => 'string',
        'response_code' => 'string',
        'complementary_response_code' => 'string',
        'schedules' => '\CpaymentConnector\Model\ScheduleLight[]',
        'stored_card' => '\CpaymentConnector\Model\StoredCard',
        'response_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'merchant_account_ref' => null,
        'response_code' => null,
        'complementary_response_code' => null,
        'schedules' => null,
        'stored_card' => null,
        'response_message' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchant_account_ref' => 'merchantAccountRef',
        'response_code' => 'responseCode',
        'complementary_response_code' => 'complementaryResponseCode',
        'schedules' => 'schedules',
        'stored_card' => 'storedCard',
        'response_message' => 'responseMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_account_ref' => 'setMerchantAccountRef',
        'response_code' => 'setResponseCode',
        'complementary_response_code' => 'setComplementaryResponseCode',
        'schedules' => 'setSchedules',
        'stored_card' => 'setStoredCard',
        'response_message' => 'setResponseMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_account_ref' => 'getMerchantAccountRef',
        'response_code' => 'getResponseCode',
        'complementary_response_code' => 'getComplementaryResponseCode',
        'schedules' => 'getSchedules',
        'stored_card' => 'getStoredCard',
        'response_message' => 'getResponseMessage'
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
        return self::$openAPIModelName;
    }

    const RESPONSE_CODE_UNKNOWN = 'unknown';
    const RESPONSE_CODE_SUCCEEDED = 'succeeded';
    const RESPONSE_CODE_BAD_REQUEST = 'badRequest';
    const RESPONSE_CODE_REFUSED_BY_BANK = 'refusedByBank';
    const RESPONSE_CODE_FAILED = 'failed';
    const RESPONSE_CODE_PENDING = 'pending';
    const COMPLEMENTARY_RESPONSE_CODE_UNKNOWN = 'unknown';
    const COMPLEMENTARY_RESPONSE_CODE_AMOUNT_LIMIT_EXCEEDED = 'amountLimitExceeded';
    const COMPLEMENTARY_RESPONSE_CODE_LIMIT_EXCEEDED = 'limitExceeded';
    const COMPLEMENTARY_RESPONSE_CODE_TECHNICAL_PROBLEM = 'technicalProblem';
    const COMPLEMENTARY_RESPONSE_CODE_AUTHORIZED = 'authorized';
    const COMPLEMENTARY_RESPONSE_CODE_BANK_FRAUD_SUSPICION = 'bankFraudSuspicion';
    const COMPLEMENTARY_RESPONSE_CODE_CARD_EXPIRED = 'cardExpired';
    const COMPLEMENTARY_RESPONSE_CODE_CARD_ISSUER_UNAVAILABLE = 'cardIssuerUnavailable';
    const COMPLEMENTARY_RESPONSE_CODE_CARDHOLDER_NOT_AUTHENTICATED = 'cardholderNotAuthenticated';
    const COMPLEMENTARY_RESPONSE_CODE_DATE_OF_VALIDITY_EXPIRED = 'dateOfValidityExpired';
    const COMPLEMENTARY_RESPONSE_CODE_DUPLICATE_REQUEST = 'duplicateRequest';
    const COMPLEMENTARY_RESPONSE_CODE_FORMAT_ERROR = 'formatError';
    const COMPLEMENTARY_RESPONSE_CODE_FRAUD_SUSPICION = 'fraudSuspicion';
    const COMPLEMENTARY_RESPONSE_CODE_ILLEGAL_TRANSACTION = 'illegalTransaction';
    const COMPLEMENTARY_RESPONSE_CODE_INVALID_ACCEPTOR = 'invalidAcceptor';
    const COMPLEMENTARY_RESPONSE_CODE_INVALID_ACCOUNT = 'invalidAccount';
    const COMPLEMENTARY_RESPONSE_CODE_INVALID_CARD_ISSUER = 'invalidCardIssuer';
    const COMPLEMENTARY_RESPONSE_CODE_INVALID_TRANSACTION = 'invalidTransaction';
    const COMPLEMENTARY_RESPONSE_CODE_LOST_CARD = 'lostCard';
    const COMPLEMENTARY_RESPONSE_CODE_REFERENCE_NUMBER_CANNOT_BE_FOUND = 'referenceNumberCannotBeFound';
    const COMPLEMENTARY_RESPONSE_CODE_REFERRED = 'referred';
    const COMPLEMENTARY_RESPONSE_CODE_REFUSED = 'refused';
    const COMPLEMENTARY_RESPONSE_CODE_REQUESTED_FUNCTION_NOT_SUPPORTED = 'requestedFunctionNotSupported';
    const COMPLEMENTARY_RESPONSE_CODE_SECURITY_BREACH = 'securityBreach';
    const COMPLEMENTARY_RESPONSE_CODE_SECURITY_RULES_VIOLATED = 'securityRulesViolated';
    const COMPLEMENTARY_RESPONSE_CODE_SERVER_UNAVAILABLE_NETWORK_ROUTING_ASKED_AGAIN = 'serverUnavailableNetworkRoutingAskedAgain';
    const COMPLEMENTARY_RESPONSE_CODE_STOLEN_CARD = 'stolenCard';
    const COMPLEMENTARY_RESPONSE_CODE_SYSTEM_UNAVAILABLE = 'systemUnavailable';
    const COMPLEMENTARY_RESPONSE_CODE_TEMPORARY_BANK_SERVER_UNAVAILABILITY = 'temporaryBankServerUnavailability';
    const COMPLEMENTARY_RESPONSE_CODE_TEMPORARY_OFFICE_SERVER_UNAVAILABILITY = 'temporaryOfficeServerUnavailability';
    const COMPLEMENTARY_RESPONSE_CODE_TRANSACTION_NOT_PERMITTED = 'transactionNotPermitted';
    const COMPLEMENTARY_RESPONSE_CODE_TRANSACTION_TIMED_OUT = 'transactionTimedOut';
    const COMPLEMENTARY_RESPONSE_CODE_UNKNOWN_ACQUIRER_ACCOUNT_CODE = 'unknownAcquirerAccountCode';
    const COMPLEMENTARY_RESPONSE_CODE_UNKNOWN_CARD = 'unknownCard';
    const COMPLEMENTARY_RESPONSE_CODE_UPDATE_OF_FILE_IMPOSSIBLE = 'updateOfFileImpossible';
    const COMPLEMENTARY_RESPONSE_CODE_TRANSACTION_ARCHIVED = 'transactionArchived';
    const COMPLEMENTARY_RESPONSE_CODE_REFUSED_BY_SCORING = 'refusedByScoring';
    const COMPLEMENTARY_RESPONSE_CODE_REFUSED_BY_SCORING2 = 'refusedByScoring2';
    const COMPLEMENTARY_RESPONSE_CODE_NOT_AVAILABLE = 'notAvailable';
    const COMPLEMENTARY_RESPONSE_CODE_DEPRECATED_CARD_TOKEN = 'deprecatedCardToken';
    const COMPLEMENTARY_RESPONSE_CODE_EXCEEDED_AUTHORIZED_AMOUNT = 'exceededAuthorizedAmount';
    const COMPLEMENTARY_RESPONSE_CODE_REPORT_DELAY_LIMIT_EXCEEDED = 'reportDelayLimitExceeded';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResponseCodeAllowableValues()
    {
        return [
            self::RESPONSE_CODE_UNKNOWN,
            self::RESPONSE_CODE_SUCCEEDED,
            self::RESPONSE_CODE_BAD_REQUEST,
            self::RESPONSE_CODE_REFUSED_BY_BANK,
            self::RESPONSE_CODE_FAILED,
            self::RESPONSE_CODE_PENDING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getComplementaryResponseCodeAllowableValues()
    {
        return [
            self::COMPLEMENTARY_RESPONSE_CODE_UNKNOWN,
            self::COMPLEMENTARY_RESPONSE_CODE_AMOUNT_LIMIT_EXCEEDED,
            self::COMPLEMENTARY_RESPONSE_CODE_LIMIT_EXCEEDED,
            self::COMPLEMENTARY_RESPONSE_CODE_TECHNICAL_PROBLEM,
            self::COMPLEMENTARY_RESPONSE_CODE_AUTHORIZED,
            self::COMPLEMENTARY_RESPONSE_CODE_BANK_FRAUD_SUSPICION,
            self::COMPLEMENTARY_RESPONSE_CODE_CARD_EXPIRED,
            self::COMPLEMENTARY_RESPONSE_CODE_CARD_ISSUER_UNAVAILABLE,
            self::COMPLEMENTARY_RESPONSE_CODE_CARDHOLDER_NOT_AUTHENTICATED,
            self::COMPLEMENTARY_RESPONSE_CODE_DATE_OF_VALIDITY_EXPIRED,
            self::COMPLEMENTARY_RESPONSE_CODE_DUPLICATE_REQUEST,
            self::COMPLEMENTARY_RESPONSE_CODE_FORMAT_ERROR,
            self::COMPLEMENTARY_RESPONSE_CODE_FRAUD_SUSPICION,
            self::COMPLEMENTARY_RESPONSE_CODE_ILLEGAL_TRANSACTION,
            self::COMPLEMENTARY_RESPONSE_CODE_INVALID_ACCEPTOR,
            self::COMPLEMENTARY_RESPONSE_CODE_INVALID_ACCOUNT,
            self::COMPLEMENTARY_RESPONSE_CODE_INVALID_CARD_ISSUER,
            self::COMPLEMENTARY_RESPONSE_CODE_INVALID_TRANSACTION,
            self::COMPLEMENTARY_RESPONSE_CODE_LOST_CARD,
            self::COMPLEMENTARY_RESPONSE_CODE_REFERENCE_NUMBER_CANNOT_BE_FOUND,
            self::COMPLEMENTARY_RESPONSE_CODE_REFERRED,
            self::COMPLEMENTARY_RESPONSE_CODE_REFUSED,
            self::COMPLEMENTARY_RESPONSE_CODE_REQUESTED_FUNCTION_NOT_SUPPORTED,
            self::COMPLEMENTARY_RESPONSE_CODE_SECURITY_BREACH,
            self::COMPLEMENTARY_RESPONSE_CODE_SECURITY_RULES_VIOLATED,
            self::COMPLEMENTARY_RESPONSE_CODE_SERVER_UNAVAILABLE_NETWORK_ROUTING_ASKED_AGAIN,
            self::COMPLEMENTARY_RESPONSE_CODE_STOLEN_CARD,
            self::COMPLEMENTARY_RESPONSE_CODE_SYSTEM_UNAVAILABLE,
            self::COMPLEMENTARY_RESPONSE_CODE_TEMPORARY_BANK_SERVER_UNAVAILABILITY,
            self::COMPLEMENTARY_RESPONSE_CODE_TEMPORARY_OFFICE_SERVER_UNAVAILABILITY,
            self::COMPLEMENTARY_RESPONSE_CODE_TRANSACTION_NOT_PERMITTED,
            self::COMPLEMENTARY_RESPONSE_CODE_TRANSACTION_TIMED_OUT,
            self::COMPLEMENTARY_RESPONSE_CODE_UNKNOWN_ACQUIRER_ACCOUNT_CODE,
            self::COMPLEMENTARY_RESPONSE_CODE_UNKNOWN_CARD,
            self::COMPLEMENTARY_RESPONSE_CODE_UPDATE_OF_FILE_IMPOSSIBLE,
            self::COMPLEMENTARY_RESPONSE_CODE_TRANSACTION_ARCHIVED,
            self::COMPLEMENTARY_RESPONSE_CODE_REFUSED_BY_SCORING,
            self::COMPLEMENTARY_RESPONSE_CODE_REFUSED_BY_SCORING2,
            self::COMPLEMENTARY_RESPONSE_CODE_NOT_AVAILABLE,
            self::COMPLEMENTARY_RESPONSE_CODE_DEPRECATED_CARD_TOKEN,
            self::COMPLEMENTARY_RESPONSE_CODE_EXCEEDED_AUTHORIZED_AMOUNT,
            self::COMPLEMENTARY_RESPONSE_CODE_REPORT_DELAY_LIMIT_EXCEEDED,
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
        $this->container['merchant_account_ref'] = isset($data['merchant_account_ref']) ? $data['merchant_account_ref'] : null;
        $this->container['response_code'] = isset($data['response_code']) ? $data['response_code'] : null;
        $this->container['complementary_response_code'] = isset($data['complementary_response_code']) ? $data['complementary_response_code'] : null;
        $this->container['schedules'] = isset($data['schedules']) ? $data['schedules'] : null;
        $this->container['stored_card'] = isset($data['stored_card']) ? $data['stored_card'] : null;
        $this->container['response_message'] = isset($data['response_message']) ? $data['response_message'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResponseCodeAllowableValues();
        if (!is_null($this->container['response_code']) && !in_array($this->container['response_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'response_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getComplementaryResponseCodeAllowableValues();
        if (!is_null($this->container['complementary_response_code']) && !in_array($this->container['complementary_response_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'complementary_response_code', must be one of '%s'",
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
     * Gets merchant_account_ref
     *
     * @return string|null
     */
    public function getMerchantAccountRef()
    {
        return $this->container['merchant_account_ref'];
    }

    /**
     * Sets merchant_account_ref
     *
     * @param string|null $merchant_account_ref The merchant account reference of the payment
     *
     * @return $this
     */
    public function setMerchantAccountRef($merchant_account_ref)
    {
        $this->container['merchant_account_ref'] = $merchant_account_ref;

        return $this;
    }

    /**
     * Gets response_code
     *
     * @return string|null
     */
    public function getResponseCode()
    {
        return $this->container['response_code'];
    }

    /**
     * Sets response_code
     *
     * @param string|null $response_code The response code of the service
     *
     * @return $this
     */
    public function setResponseCode($response_code)
    {
        $allowedValues = $this->getResponseCodeAllowableValues();
        if (!is_null($response_code) && !in_array($response_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'response_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['response_code'] = $response_code;

        return $this;
    }

    /**
     * Gets complementary_response_code
     *
     * @return string|null
     */
    public function getComplementaryResponseCode()
    {
        return $this->container['complementary_response_code'];
    }

    /**
     * Sets complementary_response_code
     *
     * @param string|null $complementary_response_code The complementary code for more details
     *
     * @return $this
     */
    public function setComplementaryResponseCode($complementary_response_code)
    {
        $allowedValues = $this->getComplementaryResponseCodeAllowableValues();
        if (!is_null($complementary_response_code) && !in_array($complementary_response_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'complementary_response_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['complementary_response_code'] = $complementary_response_code;

        return $this;
    }

    /**
     * Gets schedules
     *
     * @return \CpaymentConnector\Model\ScheduleLight[]|null
     */
    public function getSchedules()
    {
        return $this->container['schedules'];
    }

    /**
     * Sets schedules
     *
     * @param \CpaymentConnector\Model\ScheduleLight[]|null $schedules All schedules data
     *
     * @return $this
     */
    public function setSchedules($schedules)
    {
        $this->container['schedules'] = $schedules;

        return $this;
    }

    /**
     * Gets stored_card
     *
     * @return \CpaymentConnector\Model\StoredCard|null
     */
    public function getStoredCard()
    {
        return $this->container['stored_card'];
    }

    /**
     * Sets stored_card
     *
     * @param \CpaymentConnector\Model\StoredCard|null $stored_card stored_card
     *
     * @return $this
     */
    public function setStoredCard($stored_card)
    {
        $this->container['stored_card'] = $stored_card;

        return $this;
    }

    /**
     * Gets response_message
     *
     * @return string|null
     */
    public function getResponseMessage()
    {
        return $this->container['response_message'];
    }

    /**
     * Sets response_message
     *
     * @param string|null $response_message The response code of the service
     *
     * @return $this
     */
    public function setResponseMessage($response_message)
    {
        $this->container['response_message'] = $response_message;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


