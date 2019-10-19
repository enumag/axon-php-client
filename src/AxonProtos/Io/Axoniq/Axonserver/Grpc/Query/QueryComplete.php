<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query.proto

namespace Io\Axoniq\Axonserver\Grpc\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message indicating that all available responses to an incoming Query have been provided. 
 *
 * Generated from protobuf message <code>io.axoniq.axonserver.grpc.query.QueryComplete</code>
 */
class QueryComplete extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier for this message 
     *
     * Generated from protobuf field <code>string message_id = 1;</code>
     */
    private $message_id = '';
    /**
     * The identifier of the incoming query to complete 
     *
     * Generated from protobuf field <code>string request_id = 2;</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message_id
     *           A unique identifier for this message 
     *     @type string $request_id
     *           The identifier of the incoming query to complete 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifier for this message 
     *
     * Generated from protobuf field <code>string message_id = 1;</code>
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * A unique identifier for this message 
     *
     * Generated from protobuf field <code>string message_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessageId($var)
    {
        GPBUtil::checkString($var, True);
        $this->message_id = $var;

        return $this;
    }

    /**
     * The identifier of the incoming query to complete 
     *
     * Generated from protobuf field <code>string request_id = 2;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * The identifier of the incoming query to complete 
     *
     * Generated from protobuf field <code>string request_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

