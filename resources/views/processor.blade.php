<?php
$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$starttime = $mtime;
;?>

@extends('layout.master')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="top-right links">
            <a href="{{ url('/') }}">Home</a>
        </div>
        <div class="content">
            <div class="title m-b-md">
                Benz Matrix Inverter
            </div>
            <h3>Operation results shown below</h3>
            <hr>
            <div align="center">
                {{ \App\Http\Controllers\DisplayMatrix::displayMatrix($matrix, 'Matrix', 'left') }}
                <?php
                    ini_set('max_execution_time', 600);
                    use App\Http\Controllers\DisplayMatrix;
                    use App\Http\Controllers\MatrixProcessor;
                    use App\Http\Controllers\LUDecomposer;
                    use App\Http\Controllers\MultiplyMatrix;

                    $processor = new MatrixProcessor();
                    $inverse = $processor->backwardSubstitution($matrix);
                    DisplayMatrix::displayMatrix($inverse, 'Matrix Inverse', 'right', '#dff0d8');
                ?>
                <hr style="clear: both">
                <h4>Proof (The multiplication of the above matrix with the inverse produces the identity matrix below)</h4>
                <hr>
                <?php
                    DisplayMatrix::displayMatrix(MultiplyMatrix::multiplyMatrix($matrix, $inverse), 'Upper triangular Matrix');
                ?>
                <hr style="clear: both">
                <?php
                    DisplayMatrix::displayMatrix(LUDecomposer::upperAndLowerMatrix(1, $matrix), 'Upper triangular Matrix','left');
                    DisplayMatrix::displayMatrix(LUDecomposer::upperAndLowerMatrix(3, $matrix), 'Lower triangular Matrix','right');
                ?>
                <hr style="clear: both;">
                <?php
                $mtime = microtime();
                $mtime = explode(" ",$mtime);
                $mtime = $mtime[1] + $mtime[0];
                $endtime = $mtime;
                $totaltime = ($endtime - $starttime);
                ;?>
                <h3>The operation was executed in <?php echo $totaltime?> seconds</h3>
            </div>
        </div>
    </div>
@endsection