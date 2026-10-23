<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEvent implements \JsonSerializable
{
    /**
     * 游戏站ID
     * @var string
     */
    protected ?string $gameId = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEventLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEventLink $link = null;

    /**
     * 游戏站ID
     * @return string
     */
    public function getGameId(): ?string
    {
        return $this->gameId;
    }

    /**
     * 游戏站ID
     * @param string $gameId
     * @return self
     */
    public function setGameId(?string $gameId): self
    {
        $this->gameId = $gameId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEventLink
     */
    public function getLink(): ?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEventLink
    {
        return $this->link;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEventLink $link
     * @return self
     */
    public function setLink(?\Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEventLink $link): self
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->gameId !== null) {
            $result['game_id'] = $this->gameId;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['game_id'] ?? null) !== null) {
            $obj->gameId = (string) $v;
        }
        if (($v = $data['link'] ?? null) !== null && is_array($v)) {
            $obj->link = \Oceanengine\Models\ToolsSiteTemplateGetV2ResponseDataListInnerBricksInnerButtonAppointEventLink::fromArray($v);
        }
        return $obj;
    }
}
