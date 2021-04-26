<?php

function a(): int
{
    try {
        echo "Código";
        return 0;
    } catch (Throwable $e) {
        echo "Problema";
        return 1;
    } finally {
        echo "Final da função";
    }

}

echo a();
