<?php

namespace PortalDev\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $table = 'projetos';

    protected $fillible = [ 'titulo', 'empresa_id' ];
}
