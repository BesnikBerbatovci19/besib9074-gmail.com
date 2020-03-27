<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Numerarray implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        $numrat = explode(',', $value);
        $ruls = [];
        $ruls[] = $numrat;

        foreach ($ruls as $num) {
          foreach ($num as $numri) {
              if(strlen($numri) == 11)
                continue;
              if($numri[0] !=3 and $numri[1]!=8 and $numri[2] != 3)
                  continue;
          }
    }
        return false;


    }


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Formati eshte i  gabuar';
    }
}
