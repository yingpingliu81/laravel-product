<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerImport implements ToModel
{

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */



   public function model(array $row)
    {
        $contact = Contact::firstOrNew([
            'email' => $row[23]
        ]);
       // $contact->created_at = date('Y-m-d H:i:s',strtotime($row[2]));
        $contact->entity_id = $row[0];
        $contact->name = $row[6].' '.$row[7];
        $contact->username = $row[11];
        $contact->type = Contact::TYPE_CUSTOMER;
        $contact->save();
        return $contact;
    }

   /*public function model(array $row)
    {
        $contact = Contact::where([
            'entity_id' => $row[0],
        ])->first();
        if($contact) {
            $contact->company = $row[5];
            $contact->save();
        }
        return $contact;
    }*/
}
