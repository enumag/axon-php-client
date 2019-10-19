<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: event.proto

namespace Io\Axoniq\Axonserver\Grpc\Event;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A confirmation to a request from the client 
 *
 * Generated from protobuf message <code>io.axoniq.axonserver.grpc.event.Confirmation</code>
 */
class Confirmation extends \Google\Protobuf\Internal\Message
{
    /**
     * True when successful, otherwise false 
     *
     * Generated from protobuf field <code>bool success = 1;</code>
     */
    private $success = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $success
     *           True when successful, otherwise false 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Event::initOnce();
        parent::__construct($data);
    }

    /**
     * True when successful, otherwise false 
     *
     * Generated from protobuf field <code>bool success = 1;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * True when successful, otherwise false 
     *
     * Generated from protobuf field <code>bool success = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

}

