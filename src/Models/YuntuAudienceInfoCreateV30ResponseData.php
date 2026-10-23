<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class YuntuAudienceInfoCreateV30ResponseData implements \JsonSerializable
{
    /**
     * 新人群包ID 打包成功后返回
     * @var int
     */
    protected ?int $customAudienceId = null;

    /**
     * 新人群包ID 打包成功后返回
     * @return int
     */
    public function getCustomAudienceId(): ?int
    {
        return $this->customAudienceId;
    }

    /**
     * 新人群包ID 打包成功后返回
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
