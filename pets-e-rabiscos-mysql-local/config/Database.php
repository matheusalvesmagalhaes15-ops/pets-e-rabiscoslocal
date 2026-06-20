<?php

declare(strict_types=1);

class Database
{
    private array $env = [];

    public function __construct()
    {
        $this->env = $this->carregarEnv(__DIR__ . '/.env');
    }

    public function conectar(): PDO
    {
        $host = $this->getEnv('DB_HOST', '127.0.0.1');
        $port = $this->getEnv('DB_PORT', '3306');
        $dbname = $this->getEnv('DB_NAME', 'pets_e_rabiscos');
        $user = $this->getEnv('DB_USER', 'root');
        $password = $this->getEnv('DB_PASSWORD', '');
        $charset = $this->getEnv('DB_CHARSET', 'utf8mb4');

        return new PDO(
            sprintf('mysql:host=%s;port=%s;dbname=%s;charset=%s', $host, $port, $dbname, $charset),
            $user,
            $password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]
        );
    }

    private function getEnv(string $key, string $default = ''): string
    {
        $value = getenv($key);

        if ($value !== false && $value !== '') {
            return $value;
        }

        return $this->env[$key] ?? $default;
    }

    private function carregarEnv(string $path): array
    {
        if (!is_file($path)) {
            return [];
        }

        $env = [];
        $linhas = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($linhas ?: [] as $linha) {
            $linha = trim($linha);

            if ($linha === '' || str_starts_with($linha, '#') || !str_contains($linha, '=')) {
                continue;
            }

            [$chave, $valor] = explode('=', $linha, 2);
            $env[trim($chave)] = trim($valor, " \t\n\r\0\x0B\"'");
        }

        return $env;
    }
}
