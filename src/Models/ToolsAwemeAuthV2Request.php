<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAwemeAuthV2Request implements \JsonSerializable
{
    /**
     * 广告主ID
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var \Oceanengine\Models\ToolsAwemeAuthV2AuthType
     */
    protected ?string $authType = null;

    /**
     * 抖音号
     * @var string
     */
    protected ?string $awemeId = null;

    /**
     * 授权码
     * @var string
     */
    protected ?string $code = null;

    /**
     * 授权结束时间
     * @var string
     */
    protected ?string $endTime = null;

    /**
     * 抖音短视频链接
     * @var string
     */
    protected ?string $itemUrl = null;

    /**
     * 备注
     * @var string
     */
    protected ?string $note = null;

    /**
     * 授权开始时间
     * @var string
     */
    protected ?string $startTime = null;

    /**
     * 广告主ID
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * 广告主ID
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsAwemeAuthV2AuthType
     */
    public function getAuthType(): ?string
    {
        return $this->authType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAwemeAuthV2AuthType $authType
     * @return self
     */
    public function setAuthType(?string $authType): self
    {
        $this->authType = $authType;
        return $this;
    }

    /**
     * 抖音号
     * @return string
     */
    public function getAwemeId(): ?string
    {
        return $this->awemeId;
    }

    /**
     * 抖音号
     * @param string $awemeId
     * @return self
     */
    public function setAwemeId(?string $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    /**
     * 授权码
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * 授权码
     * @param string $code
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * 授权结束时间
     * @return string
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * 授权结束时间
     * @param string $endTime
     * @return self
     */
    public function setEndTime(?string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 抖音短视频链接
     * @return string
     */
    public function getItemUrl(): ?string
    {
        return $this->itemUrl;
    }

    /**
     * 抖音短视频链接
     * @param string $itemUrl
     * @return self
     */
    public function setItemUrl(?string $itemUrl): self
    {
        $this->itemUrl = $itemUrl;
        return $this;
    }

    /**
     * 备注
     * @return string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * 备注
     * @param string $note
     * @return self
     */
    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    /**
     * 授权开始时间
     * @return string
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * 授权开始时间
     * @param string $startTime
     * @return self
     */
    public function setStartTime(?string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->authType !== null) {
            $result['auth_type'] = $this->authType;
        }
        if ($this->awemeId !== null) {
            $result['aweme_id'] = $this->awemeId;
        }
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->endTime !== null) {
            $result['end_time'] = $this->endTime;
        }
        if ($this->itemUrl !== null) {
            $result['item_url'] = $this->itemUrl;
        }
        if ($this->note !== null) {
            $result['note'] = $this->note;
        }
        if ($this->startTime !== null) {
            $result['start_time'] = $this->startTime;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['auth_type'] ?? null) !== null) {
            $obj->authType = (string) $v;
        }
        if (($v = $data['aweme_id'] ?? null) !== null) {
            $obj->awemeId = (string) $v;
        }
        if (($v = $data['code'] ?? null) !== null) {
            $obj->code = (string) $v;
        }
        if (($v = $data['end_time'] ?? null) !== null) {
            $obj->endTime = (string) $v;
        }
        if (($v = $data['item_url'] ?? null) !== null) {
            $obj->itemUrl = (string) $v;
        }
        if (($v = $data['note'] ?? null) !== null) {
            $obj->note = (string) $v;
        }
        if (($v = $data['start_time'] ?? null) !== null) {
            $obj->startTime = (string) $v;
        }
        return $obj;
    }
}
