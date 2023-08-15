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
 * UpdateIntegrationEmployees请求参数结构体
 *
 * @method UserInfo getOperator() 获取当前用户信息，UserId必填
 * @method void setOperator(UserInfo $Operator) 设置当前用户信息，UserId必填
 * @method array getEmployees() 获取员工信息，不超过100个。
根据UserId或OpenId更新员工，必填一个，优先UserId。
可更新Mobile、DisplayName、Email和Department.DepartmentId字段，其他字段暂不支持
 * @method void setEmployees(array $Employees) 设置员工信息，不超过100个。
根据UserId或OpenId更新员工，必填一个，优先UserId。
可更新Mobile、DisplayName、Email和Department.DepartmentId字段，其他字段暂不支持
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId需填充子企业Id
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId需填充子企业Id
 */
class UpdateIntegrationEmployeesRequest extends AbstractModel
{
    /**
     * @var UserInfo 当前用户信息，UserId必填
     */
    public $Operator;

    /**
     * @var array 员工信息，不超过100个。
根据UserId或OpenId更新员工，必填一个，优先UserId。
可更新Mobile、DisplayName、Email和Department.DepartmentId字段，其他字段暂不支持
     */
    public $Employees;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId需填充子企业Id
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 当前用户信息，UserId必填
     * @param array $Employees 员工信息，不超过100个。
根据UserId或OpenId更新员工，必填一个，优先UserId。
可更新Mobile、DisplayName、Email和Department.DepartmentId字段，其他字段暂不支持
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId需填充子企业Id
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

        if (array_key_exists("Employees",$param) and $param["Employees"] !== null) {
            $this->Employees = [];
            foreach ($param["Employees"] as $key => $value){
                $obj = new Staff();
                $obj->deserialize($value);
                array_push($this->Employees, $obj);
            }
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
