<?php
  // System Stats
  $hostname = `hostname`;
  $version = `lsb_release -sd`;
  $uptime = `uptime | awk -F'( |,|:)+' '{if ($7=="min") m=$6; else {if ($7~/^day/) {d=$6;h=$8;m=$9} else {h=$6;m=$7}}} {print d+0,"days,",h+0,"hours,",m+0,"minutes"}'`;
  $date = `date`;

  // CPU Information
  $numProc = `grep 'model name' /proc/cpuinfo | wc -l`;
  $cpuLoad1 = `cat /proc/loadavg | awk '{print $1}'`;
  $cpuPercent = (int)(($cpuLoad1 / $numProc) * 100);
  $cpuLoad = `cat /proc/loadavg | awk '{print $1,$2,$3}'`;
  $top = `top -b -n 1 | head -n 12  | tail -n 5 | awk '{print "<li>", $12, "</li>"}'`;

  // Memory Information
  $memory = `free | grep Mem | awk '{printf "%.0f",($2-$4-$6-$7)/$2 * 100}'`;

  // Disk Utilization
  $diskUse = `df -hl --total | grep 'total' | awk '{print($5)}'`;

?>
