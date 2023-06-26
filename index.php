<!DOCTYPE html>
<html>
<head>
    <title>Snakes and Ladders</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
function getFloorMessage($floor)
{
    $messages = [
        1 => "Naughty Tongue Tease (2 minutes)",
        2 => "Erotic Full-Body Massage (3 minutes)",
        3 => "Oral Pleasure Roulette (4 minutes)",
        4 => "Sensual Lip Lock (2 minutes)",
        5 => "Seductive Feather Caress (3 minutes)",
        6 => "Spanking Frenzy (4 minutes)",
        7 => "Kinky Role Play Marathon (5 minutes)",
        8 => "Mutual Pleasure Exchange (2 minutes)",
        9 => "Blindfolded Erotic Adventure (4 minutes)",
        10 => "Wild Spanking Session (2 minutes)",
        11 => "Oral Pleasure Paradise (3 minutes)",
        12 => "Temperature Play Delight (4 minutes)",
        13 => "Nipple Play Obsession (5 minutes)",
        14 => "Bondage Domination (2 minutes)",
        15 => "Sensual Body Massage (5 minutes)",
        16 => "Fantasy Exploration and Dirty Talk (2 minutes)",
        17 => "Whispered Seduction (3 minutes)",
        18 => "Mirror of Desire (4 minutes)",
        19 => "Oral Pleasure Relay (5 minutes)",
        20 => "Sensual Taste Exploration (3 minutes)",
        21 => "Seductive Truth or Dare (4 minutes)",
        22 => "Pleasure Countdown (5 minutes)",
        23 => "Sensual Body Worship (2 minutes)",
        24 => "Oral Pleasure Symphony (3 minutes)",
        25 => "BDSM Introduction (4 minutes)",
        26 => "Kinky Countdown Challenge (5 minutes)",
        27 => "Sensual Sensory Deprivation (2 minutes)",
        28 => "Steamy Tantric Connection (3 minutes)",
        29 => "Provocative Truth or Dare (4 minutes)",
        30 => "Erotic Role Play (5 minutes)",
        31 => "Intense Mutual Masturbation (2 minutes)",
        32 => "Sensual Striptease Duel (3 minutes)",
        33 => "Sensory Pleasure Roulette (4 minutes)",
        34 => "Naughty Bedroom Olympics (5 minutes)",
        35 => "Steamy Oral Exploration (2 minutes)",
        36 => "Sensual Bondage Challenge (3 minutes)",
        37 => "Provocative Blindfolded Surprise (4 minutes)",
        38 => "Erotic Sensory Buffet (5 minutes)",
        39 => "Role Play as Master and Submissive (2 minutes)",
        40 => "Sensual Fantasy Exchange (3 minutes)",
        41 => "Provocative Truth or Dare (4 minutes)",
        42 => "Pleasure Countdown (5 minutes)",
        43 => "Sensual Body Worship (2 minutes)",
        44 => "Oral Pleasure Symphony (3 minutes)",
        45 => "BDSM Introduction (4 minutes)",
        46 => "Kinky Countdown Challenge (5 minutes)",
        47 => "Sensual Sensory Deprivation (2 minutes)",
        48 => "Steamy Tantric Connection (3 minutes)",
        49 => "Provocative Truth or Dare (4 minutes)",
        50 => "Erotic Role Play (5 minutes)",
        51 => "Intense Mutual Masturbation (2 minutes)",
        52 => "Sensory Pleasure Roulette (4 minutes)",
        53 => "Naughty Bedroom Olympics (5 minutes)",
        54 => "Steamy Oral Exploration (2 minutes)",
        55 => "Sensual Bondage Challenge (3 minutes)",
        56 => "Provocative Blindfolded Surprise (4 minutes)",
        57 => "Erotic Sensory Buffet (5 minutes)",
        58 => "Role Play as Master and Submissive (2 minutes)",
        59 => "Sensual Fantasy Exchange (3 minutes)",
        60 => "Provocative Truth or Dare (4 minutes)",
        61 => "Pleasure Countdown (5 minutes)",
        62 => "Sensual Body Worship (2 minutes)",
        63 => "Oral Pleasure Symphony (3 minutes)",
        64 => "BDSM Introduction (4 minutes)",
        65 => "Kinky Countdown Challenge (5 minutes)",
        66 => "Sensual Sensory Deprivation (2 minutes)",
        67 => "Steamy Tantric Connection (3 minutes)",
        68 => "Provocative Truth or Dare (4 minutes)",
        69 => "Erotic Role Play (5 minutes)",
        70 => "Intense Mutual Masturbation (2 minutes)",
        71 => "Sensory Pleasure Roulette (4 minutes)",
        72 => "Naughty Bedroom Olympics (5 minutes)",
        73 => "Steamy Oral Exploration (2 minutes)",
        74 => "Sensual Bondage Challenge (3 minutes)",
        75 => "Provocative Blindfolded Surprise (4 minutes)",
        76 => "Erotic Sensory Buffet (5 minutes)",
        77 => "Role Play as Master and Submissive (2 minutes)",
        78 => "Sensual Fantasy Exchange (3 minutes)",
        79 => "Provocative Truth or Dare (4 minutes)",
        80 => "Pleasure Countdown (5 minutes)",
        81 => "Sensual Body Worship (2 minutes)",
        82 => "Oral Pleasure Symphony (3 minutes)",
        83 => "BDSM Introduction (4 minutes)",
        84 => "Kinky Countdown Challenge (5 minutes)",
        85 => "Sensual Sensory Deprivation (2 minutes)",
        86 => "Steamy Tantric Connection (3 minutes)",
        87 => "Provocative Truth or Dare (4 minutes)",
        88 => "Erotic Role Play (5 minutes)",
        89 => "Intense Mutual Masturbation (2 minutes)",
        90 => "Sensory Pleasure Roulette (4 minutes)",
        91 => "Naughty Bedroom Olympics (5 minutes)",
        92 => "Steamy Oral Exploration (2 minutes)",
        93 => "Sensual Bondage Challenge (3 minutes)",
        94 => "Provocative Blindfolded Surprise (4 minutes)",
        95 => "Erotic Sensory Buffet (5 minutes)",
        96 => "Role Play as Master and Submissive (2 minutes)",
        97 => "Sensual Fantasy Exchange (3 minutes)",
        98 => "Provocative Truth or Dare (4 minutes)",
        99 => "Pleasure Countdown (5 minutes)",
        100 => "Climactic Finale Surprise (5 minutes)"
    ];

    return isset($messages[$floor]) ? $messages[$floor] : "Something wild and kinky (unknown duration)";
}

for ($i = 1; $i <= 100; $i++) {
    $message = getFloorMessage($i);
    echo "<div class='box' onclick='alert(\"Floor $i: $message\")'>$i</div>";
}
?>
</body>
</html>
