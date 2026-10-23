<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeAwemeDeleteV10ResponseDataResultsInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $adId = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10ResponseDataResultsInnerError
     */
    protected ?\Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10ResponseDataResultsInnerError $error = null;

    /**
     * @var bool
     */
    protected ?bool $flag = null;

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
     * @return \Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10ResponseDataResultsInnerError
     */
    public function getError(): ?\Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10ResponseDataResultsInnerError
    {
        return $this->error;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10ResponseDataResultsInnerError $error
     * @return self
     */
    public function setError(?\Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10ResponseDataResultsInnerError $error): self
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFlag(): ?bool
    {
        return $this->flag;
    }

    /**
     * @param bool $flag
     * @return self
     */
    public function setFlag(?bool $flag): self
    {
        $this->flag = $flag;
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
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        if ($this->flag !== null) {
            $result['flag'] = $this->flag;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_id'] ?? null) !== null) {
            $obj->adId = (int) $v;
        }
        if (($v = $data['error'] ?? null) !== null && is_array($v)) {
            $obj->error = \Oceanengine\Models\QianchuanOverallAwemeAwemeDeleteV10ResponseDataResultsInnerError::fromArray($v);
        }
        if (($v = $data['flag'] ?? null) !== null) {
            $obj->flag = (bool) $v;
        }
        return $obj;
    }
}
