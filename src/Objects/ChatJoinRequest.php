<?php

namespace WeStacks\TeleBot\Objects;

use WeStacks\TeleBot\Interfaces\TelegramObject;

/**
 * Represents a join request sent to a chat.
 *
 * @property Chat	            $chat	            Chat to which the request was sent
 * @property User	            $from	            User that sent the join request
 * @property Integer            $date	            Date the request was sent in Unix time
 * @property string             $bio	            Bio of the user.
 * @property ChatInviteLink	    $invite_link	    _Optional_. Chat invite link that was used by the user to send the join request
 */
class ChatJoinRequest extends TelegramObject
{
    protected function relations()
    {
        return [
            'chat' => Chat::class,
            'from' => User::class,
            'date' => 'integer',
            'bio' => 'string',
            'invite_link' => ChatInviteLink::class,
        ];
    }
}
