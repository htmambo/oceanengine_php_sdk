<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanKeywordPackageGetV10ResponseDataWordPackageInfosInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $degree = null;

    /**
     * @var int
     */
    protected ?int $id = null;

    /**
     * @var \Oceanengine\Models\QianchuanKeywordPackageGetV10ResponseDataWordPackageInfosInnerKeywordInfosInner[]
     */
    protected ?array $keywordInfos = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @var int
     */
    protected ?int $searchSum = null;

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
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanKeywordPackageGetV10ResponseDataWordPackageInfosInnerKeywordInfosInner[]
     */
    public function getKeywordInfos(): ?array
    {
        return $this->keywordInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanKeywordPackageGetV10ResponseDataWordPackageInfosInnerKeywordInfosInner[] $keywordInfos
     * @return self
     */
    public function setKeywordInfos(?array $keywordInfos): self
    {
        $this->keywordInfos = $keywordInfos;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
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
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->degree !== null) {
            $result['degree'] = $this->degree;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->keywordInfos !== null) {
            $result['keyword_infos'] = $this->keywordInfos;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->searchSum !== null) {
            $result['search_sum'] = $this->searchSum;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['degree'] ?? null) !== null) {
            $obj->degree = (int) $v;
        }
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (int) $v;
        }
        if (($v = $data['keyword_infos'] ?? null) !== null && is_array($v)) {
            $obj->keywordInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanKeywordPackageGetV10ResponseDataWordPackageInfosInnerKeywordInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        if (($v = $data['search_sum'] ?? null) !== null) {
            $obj->searchSum = (int) $v;
        }
        return $obj;
    }
}
