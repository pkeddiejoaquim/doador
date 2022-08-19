<?php

function formatDateAndTime($value, $format = 'd/m/Y H:i:s')
{
    // Utiliza a classe de Carbon para converter ao formato de data ou hora desejado
    return Carbon\Carbon::parse($value)->format($format);
}

?>
