<?php
namespace App\Modules\{{Name}};

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
/**
 * Model of the table tasks.
 */
class {{Name}}Model extends Model  implements FromCollection, WithHeadings, WithMapping
{
    protected $table = '{{name}}';


    //public $timestamps=false;
    protected $hidden = [

    ];


    protected $fillable = [
    'name',
    'id',
    'uid'
    ];

    public function collection()
    {
        return {{Name}}Model::all();

    }

    public function headings(): array
    {
        return  $this->fillable;
    }

    public function map($user): array
    {

        $r=[];
        foreach ($this->fillable AS $c)
        {
            $r[]=$user->$c;
        }
        return $r;
    }
}
