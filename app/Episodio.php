<?php

namespace controle_series;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model
{
    public function temporada(){
        return $this->belongsTo(Temporada::class);
    }
}
