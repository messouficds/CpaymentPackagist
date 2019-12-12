<?php
/**
 * GetPaymentSessionResult
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
 * GetPaymentSessionResult Class Doc Comment
 *
 * @category Class
 * @description All payment operation data for the response
 * @package  CpaymentConnector
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetPaymentSessionResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetPaymentSessionResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'order_ref' => 'string',
        'payment_result_code' => 'int',
        'payment_result_code_message' => 'string',
        'payment_result_complementary_code' => 'int',
        'payment_result_complementary_code_message' => 'string',
        'stored_payment_method_id' => 'string',
        'stored_payment_method_label' => 'string',
        'response_message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'order_ref' => null,
        'payment_result_code' => 'int32',
        'payment_result_code_message' => null,
        'payment_result_complementary_code' => 'int32',
        'payment_result_complementary_code_message' => null,
        'stored_payment_method_id' => null,
        'stored_payment_method_label' => null,
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
        'order_ref' => 'orderRef',
        'payment_result_code' => 'paymentResultCode',
        'payment_result_code_message' => 'paymentResultCodeMessage',
        'payment_result_complementary_code' => 'paymentResultComplementaryCode',
        'payment_result_complementary_code_message' => 'paymentResultComplementaryCodeMessage',
        'stored_payment_method_id' => 'storedPaymentMethodId',
        'stored_payment_method_label' => 'storedPaymentMethodLabel',
        'response_message' => 'responseMessage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_ref' => 'setOrderRef',
        'payment_result_code' => 'setPaymentResultCode',
        'payment_result_code_message' => 'setPaymentResultCodeMessage',
        'payment_result_complementary_code' => 'setPaymentResultComplementaryCode',
        'payment_result_complementary_code_message' => 'setPaymentResultComplementaryCodeMessage',
        'stored_payment_method_id' => 'setStoredPaymentMethodId',
        'stored_payment_method_label' => 'setStoredPaymentMethodLabel',
        'response_message' => 'setResponseMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_ref' => 'getOrderRef',
        'payment_result_code' => 'getPaymentResultCode',
        'payment_result_code_message' => 'getPaymentResultCodeMessage',
        'payment_result_complementary_code' => 'getPaymentResultComplementaryCode',
        'payment_result_complementary_code_message' => 'getPaymentResultComplementaryCodeMessage',
        'stored_payment_method_id' => 'getStoredPaymentMethodId',
        'stored_payment_method_label' => 'getStoredPaymentMethodLabel',
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

    const PAYMENT_RESULT_CODE_MESSAGE_SUCCEEDED = 'succeeded';
    const PAYMENT_RESULT_CODE_MESSAGE_REFUSED = 'refused';
    const PAYMENT_RESULT_CODE_MESSAGE_REFUSED_BY_BANK = 'refusedByBank';
    const PAYMENT_RESULT_CODE_MESSAGE_FAILED = 'failed';
    const PAYMENT_RESULT_CODE_MESSAGE_PENDING = 'pending';
    const PAYMENT_RESULT_CODE_MESSAGE_UNKNOWN = 'unknown';
    const PAYMENT_RESULT_CODE_MESSAGE_CANCELLED = 'cancelled';
    const PAYMENT_RESULT_CODE_MESSAGE_NOT_PROCESSED = 'notProcessed';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_UNKNOWN = 'unknown';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_AMOUNT_LIMIT_EXCEEDED = 'amountLimitExceeded';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_LIMIT_EXCEEDED = 'limitExceeded';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TECHNICAL_PROBLEM = 'technicalProblem';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_AUTHORIZED = 'authorized';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_BANK_FRAUD_SUSPICION = 'bankFraudSuspicion';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_CARD_EXPIRED = 'cardExpired';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_CARD_ISSUER_UNAVAILABLE = 'cardIssuerUnavailable';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_CARDHOLDER_NOT_AUTHENTICATED = 'cardholderNotAuthenticated';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_DATE_OF_VALIDITY_EXPIRED = 'dateOfValidityExpired';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_DUPLICATE_REQUEST = 'duplicateRequest';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_FORMAT_ERROR = 'formatError';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_FRAUD_SUSPICION = 'fraudSuspicion';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_ILLEGAL_TRANSACTION = 'illegalTransaction';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_INVALID_ACCEPTOR = 'invalidAcceptor';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_INVALID_ACCOUNT = 'invalidAccount';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_INVALID_CARD_ISSUER = 'invalidCardIssuer';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_INVALID_TRANSACTION = 'invalidTransaction';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_LOST_CARD = 'lostCard';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REFERENCE_NUMBER_CANNOT_BE_FOUND = 'referenceNumberCannotBeFound';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REFERRED = 'referred';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REFUSED = 'refused';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REQUESTED_FUNCTION_NOT_SUPPORTED = 'requestedFunctionNotSupported';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_SECURITY_BREACH = 'securityBreach';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_SECURITY_RULES_VIOLATED = 'securityRulesViolated';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_SERVER_UNAVAILABLE_NETWORK_ROUTING_ASKED_AGAIN = 'serverUnavailableNetworkRoutingAskedAgain';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_STOLEN_CARD = 'stolenCard';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_SYSTEM_UNAVAILABLE = 'systemUnavailable';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TEMPORARY_BANK_SERVER_UNAVAILABILITY = 'temporaryBankServerUnavailability';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TEMPORARY_OFFICE_SERVER_UNAVAILABILITY = 'temporaryOfficeServerUnavailability';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TRANSACTION_NOT_PERMITTED = 'transactionNotPermitted';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TRANSACTION_TIMED_OUT = 'transactionTimedOut';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_UNKNOWN_ACQUIRER_ACCOUNT_CODE = 'unknownAcquirerAccountCode';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_UNKNOWN_CARD = 'unknownCard';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_UPDATE_OF_FILE_IMPOSSIBLE = 'updateOfFileImpossible';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TRANSACTION_ARCHIVED = 'transactionArchived';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REFUSED_BY_SCORING = 'refusedByScoring';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_PAYMENT_INFORMATION_FILLING_ATTEMPT_LIMIT_EXCEEDED = 'paymentInformationFillingAttemptLimitExceeded';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REFUSED_BY_SCORING2 = 'refusedByScoring2';
    const PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_NOT_AVAILABLE = 'notAvailable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentResultCodeMessageAllowableValues()
    {
        return [
            self::PAYMENT_RESULT_CODE_MESSAGE_SUCCEEDED,
            self::PAYMENT_RESULT_CODE_MESSAGE_REFUSED,
            self::PAYMENT_RESULT_CODE_MESSAGE_REFUSED_BY_BANK,
            self::PAYMENT_RESULT_CODE_MESSAGE_FAILED,
            self::PAYMENT_RESULT_CODE_MESSAGE_PENDING,
            self::PAYMENT_RESULT_CODE_MESSAGE_UNKNOWN,
            self::PAYMENT_RESULT_CODE_MESSAGE_CANCELLED,
            self::PAYMENT_RESULT_CODE_MESSAGE_NOT_PROCESSED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentResultComplementaryCodeMessageAllowableValues()
    {
        return [
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_UNKNOWN,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_AMOUNT_LIMIT_EXCEEDED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_LIMIT_EXCEEDED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TECHNICAL_PROBLEM,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_AUTHORIZED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_BANK_FRAUD_SUSPICION,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_CARD_EXPIRED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_CARD_ISSUER_UNAVAILABLE,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_CARDHOLDER_NOT_AUTHENTICATED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_DATE_OF_VALIDITY_EXPIRED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_DUPLICATE_REQUEST,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_FORMAT_ERROR,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_FRAUD_SUSPICION,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_ILLEGAL_TRANSACTION,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_INVALID_ACCEPTOR,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_INVALID_ACCOUNT,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_INVALID_CARD_ISSUER,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_INVALID_TRANSACTION,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_LOST_CARD,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REFERENCE_NUMBER_CANNOT_BE_FOUND,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REFERRED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REFUSED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REQUESTED_FUNCTION_NOT_SUPPORTED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_SECURITY_BREACH,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_SECURITY_RULES_VIOLATED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_SERVER_UNAVAILABLE_NETWORK_ROUTING_ASKED_AGAIN,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_STOLEN_CARD,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_SYSTEM_UNAVAILABLE,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TEMPORARY_BANK_SERVER_UNAVAILABILITY,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TEMPORARY_OFFICE_SERVER_UNAVAILABILITY,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TRANSACTION_NOT_PERMITTED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TRANSACTION_TIMED_OUT,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_UNKNOWN_ACQUIRER_ACCOUNT_CODE,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_UNKNOWN_CARD,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_UPDATE_OF_FILE_IMPOSSIBLE,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_TRANSACTION_ARCHIVED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REFUSED_BY_SCORING,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_PAYMENT_INFORMATION_FILLING_ATTEMPT_LIMIT_EXCEEDED,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_REFUSED_BY_SCORING2,
            self::PAYMENT_RESULT_COMPLEMENTARY_CODE_MESSAGE_NOT_AVAILABLE,
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
        $this->container['order_ref'] = isset($data['order_ref']) ? $data['order_ref'] : null;
        $this->container['payment_result_code'] = isset($data['payment_result_code']) ? $data['payment_result_code'] : null;
        $this->container['payment_result_code_message'] = isset($data['payment_result_code_message']) ? $data['payment_result_code_message'] : null;
        $this->container['payment_result_complementary_code'] = isset($data['payment_result_complementary_code']) ? $data['payment_result_complementary_code'] : null;
        $this->container['payment_result_complementary_code_message'] = isset($data['payment_result_complementary_code_message']) ? $data['payment_result_complementary_code_message'] : null;
        $this->container['stored_payment_method_id'] = isset($data['stored_payment_method_id']) ? $data['stored_payment_method_id'] : null;
        $this->container['stored_payment_method_label'] = isset($data['stored_payment_method_label']) ? $data['stored_payment_method_label'] : null;
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

        $allowedValues = $this->getPaymentResultCodeMessageAllowableValues();
        if (!is_null($this->container['payment_result_code_message']) && !in_array($this->container['payment_result_code_message'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_result_code_message', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentResultComplementaryCodeMessageAllowableValues();
        if (!is_null($this->container['payment_result_complementary_code_message']) && !in_array($this->container['payment_result_complementary_code_message'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_result_complementary_code_message', must be one of '%s'",
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
     * Gets order_ref
     *
     * @return string|null
     */
    public function getOrderRef()
    {
        return $this->container['order_ref'];
    }

    /**
     * Sets order_ref
     *
     * @param string|null $order_ref The orderRef
     *
     * @return $this
     */
    public function setOrderRef($order_ref)
    {
        $this->container['order_ref'] = $order_ref;

        return $this;
    }

    /**
     * Gets payment_result_code
     *
     * @return int|null
     */
    public function getPaymentResultCode()
    {
        return $this->container['payment_result_code'];
    }

    /**
     * Sets payment_result_code
     *
     * @param int|null $payment_result_code The response code of the service
     *
     * @return $this
     */
    public function setPaymentResultCode($payment_result_code)
    {
        $this->container['payment_result_code'] = $payment_result_code;

        return $this;
    }

    /**
     * Gets payment_result_code_message
     *
     * @return string|null
     */
    public function getPaymentResultCodeMessage()
    {
        return $this->container['payment_result_code_message'];
    }

    /**
     * Sets payment_result_code_message
     *
     * @param string|null $payment_result_code_message The response code message of the service
     *
     * @return $this
     */
    public function setPaymentResultCodeMessage($payment_result_code_message)
    {
        $allowedValues = $this->getPaymentResultCodeMessageAllowableValues();
        if (!is_null($payment_result_code_message) && !in_array($payment_result_code_message, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_result_code_message', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_result_code_message'] = $payment_result_code_message;

        return $this;
    }

    /**
     * Gets payment_result_complementary_code
     *
     * @return int|null
     */
    public function getPaymentResultComplementaryCode()
    {
        return $this->container['payment_result_complementary_code'];
    }

    /**
     * Sets payment_result_complementary_code
     *
     * @param int|null $payment_result_complementary_code The complementary response code of the service
     *
     * @return $this
     */
    public function setPaymentResultComplementaryCode($payment_result_complementary_code)
    {
        $this->container['payment_result_complementary_code'] = $payment_result_complementary_code;

        return $this;
    }

    /**
     * Gets payment_result_complementary_code_message
     *
     * @return string|null
     */
    public function getPaymentResultComplementaryCodeMessage()
    {
        return $this->container['payment_result_complementary_code_message'];
    }

    /**
     * Sets payment_result_complementary_code_message
     *
     * @param string|null $payment_result_complementary_code_message The complementary response code message of the service
     *
     * @return $this
     */
    public function setPaymentResultComplementaryCodeMessage($payment_result_complementary_code_message)
    {
        $allowedValues = $this->getPaymentResultComplementaryCodeMessageAllowableValues();
        if (!is_null($payment_result_complementary_code_message) && !in_array($payment_result_complementary_code_message, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_result_complementary_code_message', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_result_complementary_code_message'] = $payment_result_complementary_code_message;

        return $this;
    }

    /**
     * Gets stored_payment_method_id
     *
     * @return string|null
     */
    public function getStoredPaymentMethodId()
    {
        return $this->container['stored_payment_method_id'];
    }

    /**
     * Sets stored_payment_method_id
     *
     * @param string|null $stored_payment_method_id Stored Payment Method Id
     *
     * @return $this
     */
    public function setStoredPaymentMethodId($stored_payment_method_id)
    {
        $this->container['stored_payment_method_id'] = $stored_payment_method_id;

        return $this;
    }

    /**
     * Gets stored_payment_method_label
     *
     * @return string|null
     */
    public function getStoredPaymentMethodLabel()
    {
        return $this->container['stored_payment_method_label'];
    }

    /**
     * Sets stored_payment_method_label
     *
     * @param string|null $stored_payment_method_label Stored Payment Label
     *
     * @return $this
     */
    public function setStoredPaymentMethodLabel($stored_payment_method_label)
    {
        $this->container['stored_payment_method_label'] = $stored_payment_method_label;

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


