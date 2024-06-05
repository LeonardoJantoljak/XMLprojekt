<?php
$xml = simplexml_load_file('xml pro\players.xml'); 

echo '<table class="player-table">';
echo '<thead>';
echo '<tr>';
echo '<th>Broj</th>';
echo '<th>Ime</th>';
echo '<th>Prezime</th>';
echo '<th>Datum rođenja</th>';
echo '<th>Pozicija</th>';
echo '<th>Klub</th>';
echo '<th>Broj utakmica</th>';
echo '<th>Broj golova</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

foreach ($xml->player as $player) {
    echo '<tr>';
    echo '<td>' . $player->number . '</td>';
    echo '<td>' . $player->name . '</td>';
    echo '<td>' . $player->surname . '</td>';
    echo '<td>' . $player->date . '</td>';
    echo '<td>' . $player->position . '</td>';
    echo '<td>' . $player->club . '</td>';
    echo '<td>' . $player->matches . '</td>';
    echo '<td>' . $player->goals . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>
