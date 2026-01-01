<?php
namespace Osynapsy\AI\OpenAI\Response;

interface ResponseInterface
{
    public function hasError(): bool;

    public function getErrorMessage(): string;
}
