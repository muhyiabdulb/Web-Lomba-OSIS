<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    /**
     * Mengambil juara 1 untuk lomba ini.
     */
    public function juara_1()
    {
        return $this->hasOne('Peserta', 'juara_1');
    }

    /**
     * Mengambil juara 1 untuk lomba ini.
     */
    public function juara_2()
    {
        return $this->hasOne('Peserta', 'juara_2');
    }

    /**
     * Mengambil juara 1 untuk lomba ini.
     */
    public function juara_3()
    {
        return $this->hasOne('Peserta', 'juara_3');
    }
}
