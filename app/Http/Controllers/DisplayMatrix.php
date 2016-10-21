<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DisplayMatrix extends Controller
{
    public static function displayMatrix($matrix, $message, $float = 'null', $color = 'null') {
        ?>
        <form action="" class="form-inline" style="float: <?php echo $float ?>">
            <?php
            for($i = 1; $i <= sizeof($matrix); $i++){
                for($j = 1; $j <= sizeof($matrix); $j++){
                    ?>
                    <div class="form-group matrix-form">
                        <input type="text" class="form-control" style="width: 75px; background-color: <?php echo  $color?>" readonly value="<?php
                        if(strpos($matrix[$i][$j],'E'))
                        {
                            echo 0;
                        }
                        else
                        {
                            echo round($matrix[$i][$j],4);
                        }
                        ?>">
                    </div>
                    <?php
                }
                echo '<br>';
            }
            ?>
            <h4><?php echo  $message ?></h4>
        </form>
        <?php
    }
}
