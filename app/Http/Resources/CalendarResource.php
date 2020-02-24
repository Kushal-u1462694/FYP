<?php

namespace App\Http\Resources\Json\JsonResource;

use Illuminate\Http\Resources\Json\JsonResource;

Class CalendarResource extends JsonResource

{

/*

*Transform the rescource file into an array *

* @param \Illuminate\Http\Request
*@return array
*/

public function toArray($request)
{

return [

            'id' => $this->id,
            'name' => $this->name,
            'to' => $this->to,
            'from'=> $this->from

];


}

}


