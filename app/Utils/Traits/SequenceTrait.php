<?php


namespace App\Utils\Traits;



use Illuminate\Support\Facades\DB;

trait SequenceTrait
{

    /**
     * get next val with hibernate sequence
     * @return mixed
     */
    private function sequence()
    {
        $next_id = DB::select("select nextval('hibernate_sequence')");
        $result = $next_id[0];
        return $result->nextval;
    }
}
