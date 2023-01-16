<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;

class GetContactsAction
{
    private DB $db;

    public function __construct(
        DB $db,
    )
    {
        $this->db = $db;
    }

    public function handle(): array
    {
        return $this->db::table('contacts')->get()->all();
    }

}
