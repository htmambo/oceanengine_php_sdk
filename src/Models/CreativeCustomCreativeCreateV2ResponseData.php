<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CreativeCustomCreativeCreateV2ResponseData implements \JsonSerializable
{
    /**
     * @var int[]
     */
    protected ?array $creativeIds = null;

    /**
     * @var \Oceanengine\Models\CreativeCustomCreativeCreateV2ResponseDataErrorsInner[]
     */
    protected ?array $errors = null;

    /**
     * @return int[]
     */
    public function getCreativeIds(): ?array
    {
        return $this->creativeIds;
    }

    /**
     * @param int[] $creativeIds
     * @return self
     */
    public function setCreativeIds(?array $creativeIds): self
    {
        $this->creativeIds = $creativeIds;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CreativeCustomCreativeCreateV2ResponseDataErrorsInner[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param \Oceanengine\Models\CreativeCustomCreativeCreateV2ResponseDataErrorsInner[] $errors
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->creativeIds !== null) {
            $result['creative_ids'] = $this->creativeIds;
        }
        if ($this->errors !== null) {
            $result['errors'] = $this->errors;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_ids'] ?? null) !== null && is_array($v)) {
            $obj->creativeIds = $v;
        }
        if (($v = $data['errors'] ?? null) !== null && is_array($v)) {
            $obj->errors = array_map(fn ($vv) => \Oceanengine\Models\CreativeCustomCreativeCreateV2ResponseDataErrorsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
