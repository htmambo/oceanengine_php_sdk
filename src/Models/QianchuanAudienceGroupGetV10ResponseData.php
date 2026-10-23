<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAudienceGroupGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $audienceGroupList = null;

    /**
     * @return string[]
     */
    public function getAudienceGroupList(): ?array
    {
        return $this->audienceGroupList;
    }

    /**
     * @param string[] $audienceGroupList
     * @return self
     */
    public function setAudienceGroupList(?array $audienceGroupList): self
    {
        $this->audienceGroupList = $audienceGroupList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->audienceGroupList !== null) {
            $result['audience_group_list'] = $this->audienceGroupList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['audience_group_list'] ?? null) !== null && is_array($v)) {
            $obj->audienceGroupList = $v;
        }
        return $obj;
    }
}
