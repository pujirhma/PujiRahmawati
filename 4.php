    <?php
    $kata = array('Aku', 'Suka', 'Makan', 'Nasi', 'Padang');
    for ($i = 0; $i <= 4; $i++) {
        for ($j = 4; $j >= $i; $j--) {
            echo "  ";
        }
        for ($k = 0; $k <= $i; $k++) {
            echo "$kata[$k]";
        }
        echo "<br>";
    }
	$kata = array('Padang', 'Nasi', 'Makan', 'Suka', 'Aku');
    for ($i = 0; $i <= 4; $i++) {
        for ($j = 4; $j >= $i; $j--) {
            echo "  ";
        }
        for ($k = 0; $k <= $i; $k++) {
            echo "$kata[$k]";
	}
        echo "<br>";
	}