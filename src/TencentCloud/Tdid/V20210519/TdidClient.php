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

namespace TencentCloud\Tdid\V20210519;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tdid\V20210519\Models as Models;

/**
 * @method Models\AddLabelResponse AddLabel(Models\AddLabelRequest $req) 下线已有内测接口，待上线正式版本的接口

DID添加标签

 * @method Models\CheckChainResponse CheckChain(Models\CheckChainRequest $req) 检查区块链信息
 * @method Models\CreateCredentialResponse CreateCredential(Models\CreateCredentialRequest $req) 创建凭证
 * @method Models\CreateSelectiveCredentialResponse CreateSelectiveCredential(Models\CreateSelectiveCredentialRequest $req) 创建选择性批露凭证
 * @method Models\CreateTDidResponse CreateTDid(Models\CreateTDidRequest $req) 创建机构DID
 * @method Models\CreateTDidByPrivateKeyResponse CreateTDidByPrivateKey(Models\CreateTDidByPrivateKeyRequest $req) 新建DID根据私钥生成Tdid
 * @method Models\CreateTDidByPublicKeyResponse CreateTDidByPublicKey(Models\CreateTDidByPublicKeyRequest $req)  新建DID根据公钥生成Tdid
 * @method Models\GetAgencyTDidResponse GetAgencyTDid(Models\GetAgencyTDidRequest $req) 该接口已废弃

本机构DID详情
 * @method Models\GetAuthorityIssuerResponse GetAuthorityIssuer(Models\GetAuthorityIssuerRequest $req) 获取权威机构信息
 * @method Models\GetConsortiumClusterListResponse GetConsortiumClusterList(Models\GetConsortiumClusterListRequest $req) 下线已有内测接口，待上线正式版本的接口

获取联盟bcos网络列表
 * @method Models\GetConsortiumListResponse GetConsortiumList(Models\GetConsortiumListRequest $req) 下线已有内测接口，待上线正式版本的接口

获取联盟列表
 * @method Models\GetCptInfoResponse GetCptInfo(Models\GetCptInfoRequest $req) 凭证模版详情
 * @method Models\GetCredentialCptRankResponse GetCredentialCptRank(Models\GetCredentialCptRankRequest $req) 下线已有内测接口，待上线正式版本的接口

凭证颁发按机构排行
 * @method Models\GetCredentialStatusResponse GetCredentialStatus(Models\GetCredentialStatusRequest $req) 获取凭证链上状态信息
 * @method Models\GetDidClusterDetailResponse GetDidClusterDetail(Models\GetDidClusterDetailRequest $req) 下线已有内测接口，待上线正式版本的接口

获取DID区块链网络详情
 * @method Models\GetDidClusterListResponse GetDidClusterList(Models\GetDidClusterListRequest $req) 下线已有内测接口，待上线正式版本的接口

获取用户的DID网络列表
 * @method Models\GetDidDocumentResponse GetDidDocument(Models\GetDidDocumentRequest $req) 查看DID文档

 * @method Models\RegisterCptResponse RegisterCpt(Models\RegisterCptRequest $req) 凭证模版新建
 * @method Models\SetCredentialStatusResponse SetCredentialStatus(Models\SetCredentialStatusRequest $req) 设置凭证链上状态
 * @method Models\VerifyCredentialResponse VerifyCredential(Models\VerifyCredentialRequest $req) 验证凭证
 */

class TdidClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tdid.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tdid";

    /**
     * @var string
     */
    protected $version = "2021-05-19";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tdid")."\\"."V20210519\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
