<?php
namespace App\Utils;

class PythagoreUtility
{
    public function display(): string
    {
        $html = '<!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Table de Pythagore</title>
        </head>
        <body>
            <table border="1">';

        for ($i = 0; $i <= 10; $i++) {
            $html .= "<tr>";
            for ($j = 0; $j <= 10; $j++) {
                if ($i == 0 && $j == 0) {
                    $html .= "<td>0</td>";
                } elseif ($i == 0) {
                    $html .= "<td>$j</td>";
                } elseif ($j == 0) {
                    $html .= "<td>$i</td>";
                } elseif ($i == $j) {
                    $html .= "<td>X</td>";
                } else {
                    $html .= "<td>" . ($i * $j) . "</td>";
                }
            }
            $html .= "</tr>";
        }

        $html .= '</table>
        </body>
        </html>';

        return $html;
    }
}
?>