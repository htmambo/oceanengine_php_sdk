<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportVideoUserLoseGetV10ResponseDataListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanReportVideoUserLoseGetV10ResponseDataListInnerFields
     */
    protected ?\Oceanengine\Models\QianchuanReportVideoUserLoseGetV10ResponseDataListInnerFields $fields = null;

    /**
     * @var int
     */
    protected ?int $hSec = null;

    /**
     * @return \Oceanengine\Models\QianchuanReportVideoUserLoseGetV10ResponseDataListInnerFields
     */
    public function getFields(): ?\Oceanengine\Models\QianchuanReportVideoUserLoseGetV10ResponseDataListInnerFields
    {
        return $this->fields;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportVideoUserLoseGetV10ResponseDataListInnerFields $fields
     * @return self
     */
    public function setFields(?\Oceanengine\Models\QianchuanReportVideoUserLoseGetV10ResponseDataListInnerFields $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * @return int
     */
    public function getHSec(): ?int
    {
        return $this->hSec;
    }

    /**
     * @param int $hSec
     * @return self
     */
    public function setHSec(?int $hSec): self
    {
        $this->hSec = $hSec;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->fields !== null) {
            $result['fields'] = $this->fields;
        }
        if ($this->hSec !== null) {
            $result['h_sec'] = $this->hSec;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['fields'] ?? null) !== null && is_array($v)) {
            $obj->fields = \Oceanengine\Models\QianchuanReportVideoUserLoseGetV10ResponseDataListInnerFields::fromArray($v);
        }
        if (($v = $data['h_sec'] ?? null) !== null) {
            $obj->hSec = (int) $v;
        }
        return $obj;
    }
}
