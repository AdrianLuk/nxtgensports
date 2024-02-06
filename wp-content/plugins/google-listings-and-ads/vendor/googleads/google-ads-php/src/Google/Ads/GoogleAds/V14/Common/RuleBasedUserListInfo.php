<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/user_lists.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of a userlist that is generated by a rule.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.RuleBasedUserListInfo</code>
 */
class RuleBasedUserListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The status of pre-population. The field is default to NONE if not set which
     * means the previous users will not be considered. If set to REQUESTED, past
     * site visitors or app users who match the list definition will be included
     * in the list (works on the Display Network only). This will only
     * add past users from within the last 30 days, depending on the
     * list's membership duration and the date when the remarketing tag is added.
     * The status will be updated to FINISHED once request is processed, or FAILED
     * if the request fails.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.UserListPrepopulationStatusEnum.UserListPrepopulationStatus prepopulation_status = 1;</code>
     */
    protected $prepopulation_status = 0;
    /**
     * Flexible rule representation of visitors with one or multiple actions. The
     * flexible user list is defined by two lists of operands – inclusive_operands
     * and exclusive_operands; each operand represents a set of users based on
     * actions they took in a given timeframe. These lists of operands are
     * combined with the AND_NOT operator, so that users represented by the
     * inclusive operands are included in the user list, minus the users
     * represented by the exclusive operands.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.FlexibleRuleUserListInfo flexible_rule_user_list = 5;</code>
     */
    protected $flexible_rule_user_list = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $prepopulation_status
     *           The status of pre-population. The field is default to NONE if not set which
     *           means the previous users will not be considered. If set to REQUESTED, past
     *           site visitors or app users who match the list definition will be included
     *           in the list (works on the Display Network only). This will only
     *           add past users from within the last 30 days, depending on the
     *           list's membership duration and the date when the remarketing tag is added.
     *           The status will be updated to FINISHED once request is processed, or FAILED
     *           if the request fails.
     *     @type \Google\Ads\GoogleAds\V14\Common\FlexibleRuleUserListInfo $flexible_rule_user_list
     *           Flexible rule representation of visitors with one or multiple actions. The
     *           flexible user list is defined by two lists of operands – inclusive_operands
     *           and exclusive_operands; each operand represents a set of users based on
     *           actions they took in a given timeframe. These lists of operands are
     *           combined with the AND_NOT operator, so that users represented by the
     *           inclusive operands are included in the user list, minus the users
     *           represented by the exclusive operands.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * The status of pre-population. The field is default to NONE if not set which
     * means the previous users will not be considered. If set to REQUESTED, past
     * site visitors or app users who match the list definition will be included
     * in the list (works on the Display Network only). This will only
     * add past users from within the last 30 days, depending on the
     * list's membership duration and the date when the remarketing tag is added.
     * The status will be updated to FINISHED once request is processed, or FAILED
     * if the request fails.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.UserListPrepopulationStatusEnum.UserListPrepopulationStatus prepopulation_status = 1;</code>
     * @return int
     */
    public function getPrepopulationStatus()
    {
        return $this->prepopulation_status;
    }

    /**
     * The status of pre-population. The field is default to NONE if not set which
     * means the previous users will not be considered. If set to REQUESTED, past
     * site visitors or app users who match the list definition will be included
     * in the list (works on the Display Network only). This will only
     * add past users from within the last 30 days, depending on the
     * list's membership duration and the date when the remarketing tag is added.
     * The status will be updated to FINISHED once request is processed, or FAILED
     * if the request fails.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.UserListPrepopulationStatusEnum.UserListPrepopulationStatus prepopulation_status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPrepopulationStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\UserListPrepopulationStatusEnum\UserListPrepopulationStatus::class);
        $this->prepopulation_status = $var;

        return $this;
    }

    /**
     * Flexible rule representation of visitors with one or multiple actions. The
     * flexible user list is defined by two lists of operands – inclusive_operands
     * and exclusive_operands; each operand represents a set of users based on
     * actions they took in a given timeframe. These lists of operands are
     * combined with the AND_NOT operator, so that users represented by the
     * inclusive operands are included in the user list, minus the users
     * represented by the exclusive operands.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.FlexibleRuleUserListInfo flexible_rule_user_list = 5;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\FlexibleRuleUserListInfo|null
     */
    public function getFlexibleRuleUserList()
    {
        return $this->flexible_rule_user_list;
    }

    public function hasFlexibleRuleUserList()
    {
        return isset($this->flexible_rule_user_list);
    }

    public function clearFlexibleRuleUserList()
    {
        unset($this->flexible_rule_user_list);
    }

    /**
     * Flexible rule representation of visitors with one or multiple actions. The
     * flexible user list is defined by two lists of operands – inclusive_operands
     * and exclusive_operands; each operand represents a set of users based on
     * actions they took in a given timeframe. These lists of operands are
     * combined with the AND_NOT operator, so that users represented by the
     * inclusive operands are included in the user list, minus the users
     * represented by the exclusive operands.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.FlexibleRuleUserListInfo flexible_rule_user_list = 5;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\FlexibleRuleUserListInfo $var
     * @return $this
     */
    public function setFlexibleRuleUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\FlexibleRuleUserListInfo::class);
        $this->flexible_rule_user_list = $var;

        return $this;
    }

}

