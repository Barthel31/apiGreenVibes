<?php

namespace App\Model;

class MusicManager extends AbstractManager
{
    public const TABLE = 'music';

    public function selectAllMusic()
    {
        $query = 'SELECT * FROM ' . self::TABLE;
        $result = $this->pdo->query($query)->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($result);
    }
}
