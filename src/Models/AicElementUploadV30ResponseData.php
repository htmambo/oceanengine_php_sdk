<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicElementUploadV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AicElementUploadV30ResponseDataElementList
     */
    protected ?\Oceanengine\Models\AicElementUploadV30ResponseDataElementList $elementList = null;

    /**
     * @return \Oceanengine\Models\AicElementUploadV30ResponseDataElementList
     */
    public function getElementList(): ?\Oceanengine\Models\AicElementUploadV30ResponseDataElementList
    {
        return $this->elementList;
    }

    /**
     * @param \Oceanengine\Models\AicElementUploadV30ResponseDataElementList $elementList
     * @return self
     */
    public function setElementList(?\Oceanengine\Models\AicElementUploadV30ResponseDataElementList $elementList): self
    {
        $this->elementList = $elementList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->elementList !== null) {
            $result['element_list'] = $this->elementList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['element_list'] ?? null) !== null && is_array($v)) {
            $obj->elementList = \Oceanengine\Models\AicElementUploadV30ResponseDataElementList::fromArray($v);
        }
        return $obj;
    }
}
