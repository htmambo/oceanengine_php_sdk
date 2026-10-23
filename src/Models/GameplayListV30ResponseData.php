<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class GameplayListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\GameplayListV30ResponseDataPage
     */
    protected ?\Oceanengine\Models\GameplayListV30ResponseDataPage $page = null;

    /**
     * 玩法详情
     * @var \Oceanengine\Models\GameplayListV30ResponseDataPlayInfosInner[]
     */
    protected ?array $playInfos = null;

    /**
     * @return \Oceanengine\Models\GameplayListV30ResponseDataPage
     */
    public function getPage(): ?\Oceanengine\Models\GameplayListV30ResponseDataPage
    {
        return $this->page;
    }

    /**
     * @param \Oceanengine\Models\GameplayListV30ResponseDataPage $page
     * @return self
     */
    public function setPage(?\Oceanengine\Models\GameplayListV30ResponseDataPage $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 玩法详情
     * @return \Oceanengine\Models\GameplayListV30ResponseDataPlayInfosInner[]
     */
    public function getPlayInfos(): ?array
    {
        return $this->playInfos;
    }

    /**
     * 玩法详情
     * @param \Oceanengine\Models\GameplayListV30ResponseDataPlayInfosInner[] $playInfos
     * @return self
     */
    public function setPlayInfos(?array $playInfos): self
    {
        $this->playInfos = $playInfos;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->playInfos !== null) {
            $result['play_infos'] = $this->playInfos;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['page'] ?? null) !== null && is_array($v)) {
            $obj->page = \Oceanengine\Models\GameplayListV30ResponseDataPage::fromArray($v);
        }
        if (($v = $data['play_infos'] ?? null) !== null && is_array($v)) {
            $obj->playInfos = array_map(fn ($vv) => \Oceanengine\Models\GameplayListV30ResponseDataPlayInfosInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
