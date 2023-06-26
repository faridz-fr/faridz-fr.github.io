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
<script>
    function getFloorMessage(floor) {
        const messages = {
            1: "Naughty Tongue Tease (2 minutes)",
            2: "Erotic Full-Body Massage (3 minutes)",
            3: "Oral Pleasure Roulette (4 minutes)",
            // Rest of the messages...
            100: "Climactic Finale Surprise (5 minutes)"
        };

        return messages[floor] || "Something wild and kinky (unknown duration)";
    }

    for (let i = 1; i <= 100; i++) {
        const message = getFloorMessage(i);
        const box = document.createElement("div");
        box.className = "box";
        box.innerText = i;
        box.onclick = function () {
            alert("Floor " + i + ": " + message);
        };
        document.body.appendChild(box);
    }
</script>
</body>
</html>
