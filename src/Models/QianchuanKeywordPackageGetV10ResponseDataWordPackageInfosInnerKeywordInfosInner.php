<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanKeywordPackageGetV10ResponseDataWordPackageInfosInnerKeywordInfosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $degree = null;

    /**
     * @var int
     */
    protected ?int $keywordId = null;

    /**
     * @var \Oceanengine\Models\QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType
     */
    protected ?string $keywordMatchType = null;

    /**
     * @var string
     */
    protected ?string $keywordName = null;

    /**
     * @var int
     */
    protected ?int $searchSum = null;

    /**
     * @var string
     */
    protected ?string $wordPackageName = null;

    /**
     * @return int
     */
    public function getDegree(): ?int
    {
        return $this->degree;
    }

    /**
     * @param int $degree
     * @return self
     */
    public function setDegree(?int $degree): self
    {
        $this->degree = $degree;
        return $this;
    }

    /**
     * @return int
     */
    public function getKeywordId(): ?int
    {
        return $this->keywordId;
    }

    /**
     * @param int $keywordId
     * @return self
     */
    public function setKeywordId(?int $keywordId): self
    {
        $this->keywordId = $keywordId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType
     */
    public function getKeywordMatchType(): ?string
    {
        return $this->keywordMatchType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanKeywordPackageGetV10DataWordPackageInfosKeywordInfosKeywordMatchType $keywordMatchType
     * @return self
     */
    public function setKeywordMatchType(?string $keywordMatchType): self
    {
        $this->keywordMatchType = $keywordMatchType;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeywordName(): ?string
    {
        return $this->keywordName;
    }

    /**
     * @param string $keywordName
     * @return self
     */
    public function setKeywordName(?string $keywordName): self
    {
        $this->keywordName = $keywordName;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearchSum(): ?int
    {
        return $this->searchSum;
    }

    /**
     * @param int $searchSum
     * @return self
     */
    public function setSearchSum(?int $searchSum): self
    {
        $this->searchSum = $searchSum;
        return $this;
    }

    /**
     * @return string
     */
    public function getWordPackageName(): ?string
    {
        return $this->wordPackageName;
    }

    /**
     * @param string $wordPackageName
     * @return self
     */
    public function setWordPackageName(?string $wordPackageName): self
    {
        $this->wordPackageName = $wordPackageName;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->degree !== null) {
            $result['degree'] = $this->degree;
        }
        if ($this->keywordId !== null) {
            $result['keyword_id'] = $this->keywordId;
        }
        if ($this->keywordMatchType !== null) {
            $result['keyword_match_type'] = $this->keywordMatchType;
        }
        if ($this->keywordName !== null) {
            $result['keyword_name'] = $this->keywordName;
        }
        if ($this->searchSum !== null) {
            $result['search_sum'] = $this->searchSum;
        }
        if ($this->wordPackageName !== null) {
            $result['word_package_name'] = $this->wordPackageName;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['degree'] ?? null) !== null) {
            $obj->degree = (int) $v;
        }
        if (($v = $data['keyword_id'] ?? null) !== null) {
            $obj->keywordId = (int) $v;
        }
        if (($v = $data['keyword_match_type'] ?? null) !== null) {
            $obj->keywordMatchType = (string) $v;
        }
        if (($v = $data['keyword_name'] ?? null) !== null) {
            $obj->keywordName = (string) $v;
        }
        if (($v = $data['search_sum'] ?? null) !== null) {
            $obj->searchSum = (int) $v;
        }
        if (($v = $data['word_package_name'] ?? null) !== null) {
            $obj->wordPackageName = (string) $v;
        }
        return $obj;
    }
}
