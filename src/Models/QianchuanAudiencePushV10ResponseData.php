<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudiencePushV10ResponseData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $audienceId = null;

    /**
     * @return int
     */
    public function getAudienceId(): ?int
    {
        return $this->audienceId;
    }

    /**
     * @param int $audienceId
     * @return self
     */
    public function setAudienceId(?int $audienceId): self
    {
        $this->audienceId = $audienceId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audienceId !== null) {
            $result['audience_id'] = $this->audienceId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_id'] ?? null) !== null) {
            $obj->audienceId = (int) $v;
        }
        return $obj;
    }
}
