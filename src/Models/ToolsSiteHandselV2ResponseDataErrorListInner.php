<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteHandselV2ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * 失败原因，当对origin_site_id的操作失败时，返回error_reason字段，成功无
     * @var string
     */
    protected ?string $errorReason = null;

    /**
     * 返回转赠失败的原site_ids
     * @var string
     */
    protected ?string $originSiteId = null;

    /**
     * 返回转赠失败的目标广告主id
     * @var string
     */
    protected ?string $targetAdvertiserId = null;

    /**
     * 失败原因，当对origin_site_id的操作失败时，返回error_reason字段，成功无
     * @return string
     */
    public function getErrorReason(): ?string
    {
        return $this->errorReason;
    }

    /**
     * 失败原因，当对origin_site_id的操作失败时，返回error_reason字段，成功无
     * @param string $errorReason
     * @return self
     */
    public function setErrorReason(?string $errorReason): self
    {
        $this->errorReason = $errorReason;
        return $this;
    }

    /**
     * 返回转赠失败的原site_ids
     * @return string
     */
    public function getOriginSiteId(): ?string
    {
        return $this->originSiteId;
    }

    /**
     * 返回转赠失败的原site_ids
     * @param string $originSiteId
     * @return self
     */
    public function setOriginSiteId(?string $originSiteId): self
    {
        $this->originSiteId = $originSiteId;
        return $this;
    }

    /**
     * 返回转赠失败的目标广告主id
     * @return string
     */
    public function getTargetAdvertiserId(): ?string
    {
        return $this->targetAdvertiserId;
    }

    /**
     * 返回转赠失败的目标广告主id
     * @param string $targetAdvertiserId
     * @return self
     */
    public function setTargetAdvertiserId(?string $targetAdvertiserId): self
    {
        $this->targetAdvertiserId = $targetAdvertiserId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->errorReason !== null) {
            $result['error_reason'] = $this->errorReason;
        }
        if ($this->originSiteId !== null) {
            $result['origin_site_id'] = $this->originSiteId;
        }
        if ($this->targetAdvertiserId !== null) {
            $result['target_advertiser_id'] = $this->targetAdvertiserId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['error_reason'] ?? null) !== null) {
            $obj->errorReason = (string) $v;
        }
        if (($v = $data['origin_site_id'] ?? null) !== null) {
            $obj->originSiteId = (string) $v;
        }
        if (($v = $data['target_advertiser_id'] ?? null) !== null) {
            $obj->targetAdvertiserId = (string) $v;
        }
        return $obj;
    }
}
