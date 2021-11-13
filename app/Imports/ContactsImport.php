<?php

namespace App\Imports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class ContactsImport implements ToModel, WithHeadingRow, SkipsOnError, WithValidation
{
    use Importable, SkipsErrors;
    private $tag_id;
    private $client_id;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function __construct(int $tag_id, int $client_id)
    {
        $this->tag_id = $tag_id; 
        $this->client_id = $client_id;
    }

    public function model(array $row)
    {
        return new Contact([
            'name' => $row['name'],
            'phone' => '254'.$row['phone'],
            'tag_id' => $this->tag_id,
            'client_id' => $this->client_id
        ]);
    }

    public function rules(): array
    {
        return [
           '*.phone' => ['required','min:9','max:9']
        ];
    }
}
