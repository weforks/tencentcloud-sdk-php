<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBatchCancelFlowUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method array getFlowIds() 获取需要执行撤回的流程(合同)的编号列表，最多100个.
列表中的流程(合同)编号不要重复.
 * @method void setFlowIds(array $FlowIds) 设置需要执行撤回的流程(合同)的编号列表，最多100个.
列表中的流程(合同)编号不要重复.
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填

 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 */
class CreateBatchCancelFlowUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var array 需要执行撤回的流程(合同)的编号列表，最多100个.
列表中的流程(合同)编号不要重复.
     */
    public $FlowIds;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填

     */
    public $Agent;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param array $FlowIds 需要执行撤回的流程(合同)的编号列表，最多100个.
列表中的流程(合同)编号不要重复.
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
