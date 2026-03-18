<?php
$objectif = "S'approprier les signes < et >";

$tmp = array();
$l=10;
$c=2;
$lI=10;
$cI=4;
$space = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
for ($i = 1; $i<=10; $i++)
{
	for ($j = 1; $j < 10; $j++)
	{
        if ($i - $j > 0) $tmp[] = array('q'=>"$i $space ### $space $j", 's'=>">");
        if ($i - $j < 0) $tmp[] = array('q'=>"$i $space  ### $space  $j", 's'=>"<");
		if ($i - $j == 0) $tmp[] = array('q'=>"$i $space  ### $space  $j", 's'=>"=");
	}
}
