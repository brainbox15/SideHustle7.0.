<?php
$voterAge = 19;
$hasPVC = true;
$voterWard = 020;
if ($voterAge > 18 && $hasPVC == true && $voterWard == 020) {
    echo "Voter eligible to vote";
} elseif ($voterAge < 18) {
    echo "Voter is below 18 years";
} elseif ($hasPVC == false) {
    echo "Voter don't have PVC";
} else {
    echo "Not voter's ward";
}
?>