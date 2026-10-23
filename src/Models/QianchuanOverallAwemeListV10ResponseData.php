<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanOverallAwemeListV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInner[]
     */
    protected ?array $bindAwemeUserInfos = null;

    /**
     * @var \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataPagination
     */
    protected ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataPagination $pagination = null;

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInner[]
     */
    public function getBindAwemeUserInfos(): ?array
    {
        return $this->bindAwemeUserInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInner[] $bindAwemeUserInfos
     * @return self
     */
    public function setBindAwemeUserInfos(?array $bindAwemeUserInfos): self
    {
        $this->bindAwemeUserInfos = $bindAwemeUserInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataPagination
     */
    public function getPagination(): ?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataPagination
    {
        return $this->pagination;
    }

    /**
     * @param \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataPagination $pagination
     * @return self
     */
    public function setPagination(?\Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataPagination $pagination): self
    {
        $this->pagination = $pagination;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bindAwemeUserInfos !== null) {
            $result['bind_aweme_user_infos'] = $this->bindAwemeUserInfos;
        }
        if ($this->pagination !== null) {
            $result['pagination'] = $this->pagination;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bind_aweme_user_infos'] ?? null) !== null && is_array($v)) {
            $obj->bindAwemeUserInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataBindAwemeUserInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['pagination'] ?? null) !== null && is_array($v)) {
            $obj->pagination = \Oceanengine\Models\QianchuanOverallAwemeListV10ResponseDataPagination::fromArray($v);
        }
        return $obj;
    }
}
