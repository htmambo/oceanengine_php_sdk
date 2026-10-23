<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResults
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResults $results = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResults
     */
    public function getResults(): ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResults
    {
        return $this->results;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResults $results
     * @return self
     */
    public function setResults(?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResults $results): self
    {
        $this->results = $results;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->results !== null) {
            $result['results'] = $this->results;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['results'] ?? null) !== null && is_array($v)) {
            $obj->results = \Oceanengine\Models\QianchuanUniPromotionAdControlTaskDurationUpdateV10ResponseDataResults::fromArray($v);
        }
        return $obj;
    }
}
