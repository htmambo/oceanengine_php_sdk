<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsCluePrivateMessageCallbackV2Request implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestAdinfo
     */
    protected ?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestAdinfo $adinfo = null;

    /**
     * 授权的广告主id，可以取抖开私信拉取接口里的adv_id
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * 接待商家的抖音open id，对齐私信拉取接口里面的 open_id。如果是飞鸽商家，则无需填写。
     * @var string
     */
    protected ?string $bOpenId = null;

    /**
     * 留资用户的抖音open id，对齐私信拉取接口里面的 open_id。如果是飞鸽商家，则无需填写。
     * @var string
     */
    protected ?string $cOpenId = null;

    /**
     * 抖开接口里面的开发者唯一标识，对齐私信拉取接口里面的 client_key。如果是飞鸽商家，则无需填写。
     * @var string
     */
    protected ?string $clientKey = null;

    /**
     * @var \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueConvertInfo
     */
    protected ?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueConvertInfo $clueConvertInfo = null;

    /**
     * @var \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueData
     */
    protected ?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueData $clueData = null;

    /**
     * 事件/状态变更发生的秒级时间戳
     * @var int
     */
    protected ?int $eventTimestamp = null;

    /**
     * 飞鸽消息接受接口中返回的extra.root_life_account_id，飞鸽商家生服的根户id
     * @var int
     */
    protected ?int $feigeRootLifeAccountId = null;

    /**
     * 飞鸽消息接受接口中返回的guest_info.user_id，是一个加密的C端用户uid
     * @var string
     */
    protected ?string $feigeUserId = null;

    /**
     * @var \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestMsgInfo
     */
    protected ?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestMsgInfo $msgInfo = null;

    /**
     * 回传打标类型：1:人工打标，2:智能客服识别
     * @var int
     */
    protected ?int $sourceType = null;

    /**
     * @return \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestAdinfo
     */
    public function getAdinfo(): ?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestAdinfo
    {
        return $this->adinfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestAdinfo $adinfo
     * @return self
     */
    public function setAdinfo(?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestAdinfo $adinfo): self
    {
        $this->adinfo = $adinfo;
        return $this;
    }

    /**
     * 授权的广告主id，可以取抖开私信拉取接口里的adv_id
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 授权的广告主id，可以取抖开私信拉取接口里的adv_id
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 接待商家的抖音open id，对齐私信拉取接口里面的 open_id。如果是飞鸽商家，则无需填写。
     * @return string
     */
    public function getBOpenId(): ?string
    {
        return $this->bOpenId;
    }

    /**
     * 接待商家的抖音open id，对齐私信拉取接口里面的 open_id。如果是飞鸽商家，则无需填写。
     * @param string $bOpenId
     * @return self
     */
    public function setBOpenId(?string $bOpenId): self
    {
        $this->bOpenId = $bOpenId;
        return $this;
    }

    /**
     * 留资用户的抖音open id，对齐私信拉取接口里面的 open_id。如果是飞鸽商家，则无需填写。
     * @return string
     */
    public function getCOpenId(): ?string
    {
        return $this->cOpenId;
    }

    /**
     * 留资用户的抖音open id，对齐私信拉取接口里面的 open_id。如果是飞鸽商家，则无需填写。
     * @param string $cOpenId
     * @return self
     */
    public function setCOpenId(?string $cOpenId): self
    {
        $this->cOpenId = $cOpenId;
        return $this;
    }

    /**
     * 抖开接口里面的开发者唯一标识，对齐私信拉取接口里面的 client_key。如果是飞鸽商家，则无需填写。
     * @return string
     */
    public function getClientKey(): ?string
    {
        return $this->clientKey;
    }

    /**
     * 抖开接口里面的开发者唯一标识，对齐私信拉取接口里面的 client_key。如果是飞鸽商家，则无需填写。
     * @param string $clientKey
     * @return self
     */
    public function setClientKey(?string $clientKey): self
    {
        $this->clientKey = $clientKey;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueConvertInfo
     */
    public function getClueConvertInfo(): ?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueConvertInfo
    {
        return $this->clueConvertInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueConvertInfo $clueConvertInfo
     * @return self
     */
    public function setClueConvertInfo(?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueConvertInfo $clueConvertInfo): self
    {
        $this->clueConvertInfo = $clueConvertInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueData
     */
    public function getClueData(): ?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueData
    {
        return $this->clueData;
    }

    /**
     * @param \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueData $clueData
     * @return self
     */
    public function setClueData(?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueData $clueData): self
    {
        $this->clueData = $clueData;
        return $this;
    }

    /**
     * 事件/状态变更发生的秒级时间戳
     * @return int
     */
    public function getEventTimestamp(): ?int
    {
        return $this->eventTimestamp;
    }

    /**
     * 事件/状态变更发生的秒级时间戳
     * @param int $eventTimestamp
     * @return self
     */
    public function setEventTimestamp(?int $eventTimestamp): self
    {
        $this->eventTimestamp = $eventTimestamp;
        return $this;
    }

    /**
     * 飞鸽消息接受接口中返回的extra.root_life_account_id，飞鸽商家生服的根户id
     * @return int
     */
    public function getFeigeRootLifeAccountId(): ?int
    {
        return $this->feigeRootLifeAccountId;
    }

    /**
     * 飞鸽消息接受接口中返回的extra.root_life_account_id，飞鸽商家生服的根户id
     * @param int $feigeRootLifeAccountId
     * @return self
     */
    public function setFeigeRootLifeAccountId(?int $feigeRootLifeAccountId): self
    {
        $this->feigeRootLifeAccountId = $feigeRootLifeAccountId;
        return $this;
    }

    /**
     * 飞鸽消息接受接口中返回的guest_info.user_id，是一个加密的C端用户uid
     * @return string
     */
    public function getFeigeUserId(): ?string
    {
        return $this->feigeUserId;
    }

    /**
     * 飞鸽消息接受接口中返回的guest_info.user_id，是一个加密的C端用户uid
     * @param string $feigeUserId
     * @return self
     */
    public function setFeigeUserId(?string $feigeUserId): self
    {
        $this->feigeUserId = $feigeUserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestMsgInfo
     */
    public function getMsgInfo(): ?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestMsgInfo
    {
        return $this->msgInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestMsgInfo $msgInfo
     * @return self
     */
    public function setMsgInfo(?\Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestMsgInfo $msgInfo): self
    {
        $this->msgInfo = $msgInfo;
        return $this;
    }

    /**
     * 回传打标类型：1:人工打标，2:智能客服识别
     * @return int
     */
    public function getSourceType(): ?int
    {
        return $this->sourceType;
    }

    /**
     * 回传打标类型：1:人工打标，2:智能客服识别
     * @param int $sourceType
     * @return self
     */
    public function setSourceType(?int $sourceType): self
    {
        $this->sourceType = $sourceType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adinfo !== null) {
            $result['adinfo'] = $this->adinfo;
        }
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->bOpenId !== null) {
            $result['b_open_id'] = $this->bOpenId;
        }
        if ($this->cOpenId !== null) {
            $result['c_open_id'] = $this->cOpenId;
        }
        if ($this->clientKey !== null) {
            $result['client_key'] = $this->clientKey;
        }
        if ($this->clueConvertInfo !== null) {
            $result['clue_convert_info'] = $this->clueConvertInfo;
        }
        if ($this->clueData !== null) {
            $result['clue_data'] = $this->clueData;
        }
        if ($this->eventTimestamp !== null) {
            $result['event_timestamp'] = $this->eventTimestamp;
        }
        if ($this->feigeRootLifeAccountId !== null) {
            $result['feige_root_life_account_id'] = $this->feigeRootLifeAccountId;
        }
        if ($this->feigeUserId !== null) {
            $result['feige_user_id'] = $this->feigeUserId;
        }
        if ($this->msgInfo !== null) {
            $result['msg_info'] = $this->msgInfo;
        }
        if ($this->sourceType !== null) {
            $result['source_type'] = $this->sourceType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['adinfo'] ?? null) !== null && is_array($v)) {
            $obj->adinfo = \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestAdinfo::fromArray($v);
        }
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['b_open_id'] ?? null) !== null) {
            $obj->bOpenId = (string) $v;
        }
        if (($v = $data['c_open_id'] ?? null) !== null) {
            $obj->cOpenId = (string) $v;
        }
        if (($v = $data['client_key'] ?? null) !== null) {
            $obj->clientKey = (string) $v;
        }
        if (($v = $data['clue_convert_info'] ?? null) !== null && is_array($v)) {
            $obj->clueConvertInfo = \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueConvertInfo::fromArray($v);
        }
        if (($v = $data['clue_data'] ?? null) !== null && is_array($v)) {
            $obj->clueData = \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestClueData::fromArray($v);
        }
        if (($v = $data['event_timestamp'] ?? null) !== null) {
            $obj->eventTimestamp = (int) $v;
        }
        if (($v = $data['feige_root_life_account_id'] ?? null) !== null) {
            $obj->feigeRootLifeAccountId = (int) $v;
        }
        if (($v = $data['feige_user_id'] ?? null) !== null) {
            $obj->feigeUserId = (string) $v;
        }
        if (($v = $data['msg_info'] ?? null) !== null && is_array($v)) {
            $obj->msgInfo = \Oceanengine\Models\ToolsCluePrivateMessageCallbackV2RequestMsgInfo::fromArray($v);
        }
        if (($v = $data['source_type'] ?? null) !== null) {
            $obj->sourceType = (int) $v;
        }
        return $obj;
    }
}
