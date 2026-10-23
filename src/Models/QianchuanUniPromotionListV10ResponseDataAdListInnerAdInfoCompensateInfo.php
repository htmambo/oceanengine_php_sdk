<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionListV10ResponseDataAdListInnerAdInfoCompensateInfo implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus
     */
    protected ?string $compensateStatus = null;

    /**
     * @var string
     */
    protected ?string $reason = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoStatus
     */
    protected ?string $status = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus
     */
    public function getCompensateStatus(): ?string
    {
        return $this->compensateStatus;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoCompensateStatus $compensateStatus
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
     * @return \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoStatus
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionListV10DataAdListAdInfoCompensateInfoStatus $status
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->compensateStatus !== null) {
            $result['compensate_status'] = $this->compensateStatus;
        }
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['compensate_status'] ?? null) !== null) {
            $obj->compensateStatus = (string) $v;
        }
        if (($v = $data['reason'] ?? null) !== null) {
            $obj->reason = (string) $v;
        }
        if (($v = $data['status'] ?? null) !== null) {
            $obj->status = (string) $v;
        }
        return $obj;
    }
}
