<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteCopyV2ResponseDataErrorListInner implements \JsonSerializable
{
    /**
     * 当对origin_site_id的操作失败时，返回详细原因，成功无
     * @var string
     */
    protected ?string $errorReason = null;

    /**
     * 返回复制失败后的原站点id
     * @var string
     */
    protected ?string $originSiteId = null;

    /**
     * 当对origin_site_id的操作失败时，返回详细原因，成功无
     * @return string
     */
    public function getErrorReason(): ?string
    {
        return $this->errorReason;
    }

    /**
     * 当对origin_site_id的操作失败时，返回详细原因，成功无
     * @param string $errorReason
     * @return self
     */
    public function setErrorReason(?string $errorReason): self
    {
        $this->errorReason = $errorReason;
        return $this;
    }

    /**
     * 返回复制失败后的原站点id
     * @return string
     */
    public function getOriginSiteId(): ?string
    {
        return $this->originSiteId;
    }

    /**
     * 返回复制失败后的原站点id
     * @param string $originSiteId
     * @return self
     */
    public function setOriginSiteId(?string $originSiteId): self
    {
        $this->originSiteId = $originSiteId;
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
        return $obj;
    }
}
