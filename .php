<?php
// PHP section to handle random line generation
$rizzLines = [
    "I'd call you Ema Datshi, 'cause you're spicy and hot 🌶️🔥",
    "Are you from Paro? 'Cause you just landed in my heart like Druk Air 🛬❤️",
    "You must be suja, 'cause you're warming my soul 🧈☕",
    "If you were a momo, I'd never dip you — you're already perfect 🥟💘",
    "You're like Phobjikha Valley... rare, peaceful, and stunning 🏞️💚",
    "Call me a yak herder, 'cause I’d climb any mountain for you 🏔️😉",
    "You're sweeter than zaw soaked in honey 🍯💕",
    "Forget the coronation — you’re already my queen/king 👑❤️",
    "Are you Dochula Pass? 'Cause you take my breath away 🏔️💨",
    "Even the Buddha Dordenma can't bless me more than your smile 🧘‍♂️✨",
    "You're the wi-fi in my village — rare but worth the wait 📶💘",
    "Your beauty hits harder than Bhutanese chili 🌶️😩",
    "You must be from Bumthang — because you’ve got my *heart-tang* 💓😂",
    "If loving you was an exam, I'd get full marks without khenpo's notes 📝💯",
    "You're like tsechu — colorful, rare, and something I wait all year for 🎉🧡"
];


$line = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $line = $rizzLines[array_rand($rizzLines)];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bhutanese Rizz Generator 😏</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #fdf6e3;
            color: #333;
            text-align: center;
            margin-top: 100px;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            display: inline-block;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        button {
            background: #ffb347;
            border: none;
            padding: 10px 25px;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
        }
        .rizz {
            margin-top: 20px;
            font-size: 24px;
            color: #d85d17;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>💘 Bhutanese Rizz Generator 💘</h1>
        <form method="post">
            <button type="submit">Drop a Line 😎</button>
        </form>

        <?php if ($line): ?>
            <div class="rizz"><?= htmlspecialchars($line) ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
