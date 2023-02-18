<?php

namespace Routing;

class Route
{
    protected string $method;
    protected string $path;
    protected $handler;
    protected ?string $name = null;
    protected array $parameters = [];
    public function __construct(
        string $method,
        string $path,
        callable $handler
    ) {
        $this->method = $method;
        $this->path = $path;
        $this->handler = $handler;
    }
    public function method(): string
    {
        return $this->method;
    }
    public function path(): string
    {
        return $this->path;
    }
    public function parameters(): array
    {
        return $this->parameters;
    }

    public function name(string $name = null)
    {
        if ($name) {
            $this->name = $name;
            return $this;
        }
        return $this->name;
    }
    public function matches(string $method, string $path): bool
    {
        return $this->method === $method
        && $this->path === $path;
    }
    public function dispatch()
    {
        return call_user_func($this->handler);
    }
}
