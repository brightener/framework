<?php

namespace GigaAI\Message;

class Lists extends Message
{
    public function expectedFormat()
    {
        return is_array($this->body) && array_key_exists('elements', $this->body);
    }
    
    public function normalize()
    {
        $this->body['template_type'] = 'list';
        
        return [
            'attachment' => [
                'type'    => 'template',
                'payload' => $this->body,
            ],
        ];
    }
}