<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DmpCustomAudienceCopyV2ResponseData implements \JsonSerializable
{
    /**
     * 推送到云图平台的 advid
     * @var int
     */
    protected ?int $customAudienceId = null;

    /**
     * 推送到云图平台的 advid
     * @return int
     */
    public function getCustomAudienceId(): ?int
    {
        return $this->customAudienceId;
    }

    /**
     * 推送到云图平台的 advid
     * @param int $customAudienceId
     * @return self
     */
    public function setCustomAudienceId(?int $customAudienceId): self
    {
        $this->customAudienceId = $customAudienceId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->customAudienceId !== null) {
            $result['custom_audience_id'] = $this->customAudienceId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['custom_audience_id'] ?? null) !== null) {
            $obj->customAudienceId = (int) $v;
        }
        return $obj;
    }
}
