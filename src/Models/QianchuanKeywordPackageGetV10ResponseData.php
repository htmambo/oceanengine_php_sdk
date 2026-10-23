<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanKeywordPackageGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanKeywordPackageGetV10ResponseDataWordPackageInfosInner[]
     */
    protected ?array $wordPackageInfos = null;

    /**
     * @return \Oceanengine\Models\QianchuanKeywordPackageGetV10ResponseDataWordPackageInfosInner[]
     */
    public function getWordPackageInfos(): ?array
    {
        return $this->wordPackageInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanKeywordPackageGetV10ResponseDataWordPackageInfosInner[] $wordPackageInfos
     * @return self
     */
    public function setWordPackageInfos(?array $wordPackageInfos): self
    {
        $this->wordPackageInfos = $wordPackageInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->wordPackageInfos !== null) {
            $result['word_package_infos'] = $this->wordPackageInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['word_package_infos'] ?? null) !== null && is_array($v)) {
            $obj->wordPackageInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanKeywordPackageGetV10ResponseDataWordPackageInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
