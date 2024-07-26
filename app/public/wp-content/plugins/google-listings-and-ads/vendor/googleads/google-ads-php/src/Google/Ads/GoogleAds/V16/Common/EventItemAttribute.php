<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V16\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Event Item attributes of the Customer Match.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.common.EventItemAttribute</code>
 */
class EventItemAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A unique identifier of a product. It can be either the Merchant
     * Center Item ID or GTIN (Global Trade Item Number).
     *
     * Generated from protobuf field <code>string item_id = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $item_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $item_id
     *           Optional. A unique identifier of a product. It can be either the Merchant
     *           Center Item ID or GTIN (Global Trade Item Number).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A unique identifier of a product. It can be either the Merchant
     * Center Item ID or GTIN (Global Trade Item Number).
     *
     * Generated from protobuf field <code>string item_id = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getItemId()
    {
        return $this->item_id;
    }

    /**
     * Optional. A unique identifier of a product. It can be either the Merchant
     * Center Item ID or GTIN (Global Trade Item Number).
     *
     * Generated from protobuf field <code>string item_id = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setItemId($var)
    {
        GPBUtil::checkString($var, True);
        $this->item_id = $var;

        return $this;
    }

}

