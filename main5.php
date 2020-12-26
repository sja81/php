<?php
# arrow function

$series->each(fn($s) => $s->title = ucwords($s->title));  // only for 7.4+ limited to single line short function

$name ??= "Not provided";