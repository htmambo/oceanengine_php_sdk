<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdCompensateStatusGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCompensateStatusGetV10DataListCompensateStatus
     */
    protected ?string $compensateStatus = null;

    /**
     * @var string
     */
    protected ?string $reason = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdCompensateStatusGetV10DataListStatus
     */
    protected ?string $status = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @return int
     */
    public function getAdId(): ?int
    {
        return $this->adId;
    }

    /**
     * @param int $adId
     * @return self
     */
    public function setAdId(?int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCompensateStatusGetV10DataListCompensateStatus
     */
    public function getCompensateStatus(): ?string
    {
        return $this->compensateStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCompensateStatusGetV10DataListCompensateStatus $compensateStatus
     * @return self
     */
    public function setCompensateStatus(?string $compensateStatus): self
    {
        $this->compensateStatus = $compensateStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return self
     */
    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdCompensateStatusGetV10DataListStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdCompensateStatusGetV10DataListStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adId !== null) {
            $result['ad_id'] = $this->adId;
        }
        if ($this->compensateStatus !== null) {
            $result['compensate_status'] = $this->compensateStatus;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['compensate_status'] ?? null) !== null) {
            $obj->compensateStatus = (string) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        return $obj;
    }
}
