<?php

echo sprintf("013 = %d\n", 013); // 11
echo sprintf("7 = %d\n", 7); // 7
echo sprintf("0x70 = %d\n", 0x70); // 112
echo sprintf("010000000 = %d\n", bindec('010000000')); // 128

// (11 + 7 + 112) - 128
echo (013 + 7 + 0x70) - bindec('010000000'); // 2