<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEvent implements \JsonSerializable
{
    /**
     * 游戏ID
     * @var string
     */
    protected ?string $gameId = null;

    /**
     * @var \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEventLink
     */
    protected ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEventLink $link = null;

    /**
     * 游戏ID
     * @return string
     */
    public function getGameId(): ?string
    {
        return $this->gameId;
    }

    /**
     * 游戏ID
     * @param string $gameId
     * @return self
     */
    public function setGameId(?string $gameId): self
    {
        $this->gameId = $gameId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEventLink
     */
    public function getLink(): ?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEventLink
    {
        return $this->link;
    }

    /**
     * @param \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEventLink $link
     * @return self
     */
    public function setLink(?\Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEventLink $link): self
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
            $obj->link = \Oceanengine\Models\ToolsSiteTemplateSiteCreateV2RequestBricksInnerButtonAppointEventLink::fromArray($v);
        }
        return $obj;
    }
}
