<?php

namespace PortalDev\Models;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    // A tabela a ser usada pelo Model.
    protected $table = 'certificados';

    // Os campos filhos da tabela.
    protected $filliable = [];
}
