<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
/* Assume that movies are onlmy on every 3 hours
from 12pm to 12am  T12,T15, T18, T 21, T00*/
Mon-Fri All time discount except for T18 and T21
 Sat & Sun discount only for T00-->
<body>
    <?php
    function isFulllorDiscount($day,$hour){
      switch($day){
        case 'MON':
        case 'TUE':
        case 'WED':
        case 'THU':
        case 'FRI':
          switch($hour){
            case 'T12':
            case 'T15':
            case 'T00':
              return 'Discount';
            case'T18':
            case'T21':
              return 'full';
            default:
               return  'ERROR - HOUR NOT FOUND';
          }
          case 'SAT':
          case 'SUN':
                if ($hour=='T00')
                    return 'Discount';
                else if($hour == 'T12' || $hour == 'T15' ||$hour == 'T18' ||$hour == 'T21')
                    return 'Full';
                return 'ERROR - HOUR NOT FOUND';
          default:
              return 'ERROR - DAY NOT FOUND';
      }
    }

    $days = ['MON','TUE','WED','SUN','FUN'];
    $hours = ['T12','T15','T18','T21','T00','T11'];
    
    foreach ($days as $day){
      foreach ($hours as $hour){
        echo '<p>'.$day.' '.$hour.': '.isFulllorDiscount($day,$hout).'</>';
      }
    }
    ?>
</body>
</html>