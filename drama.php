<?php if (!isset($_GET["plain"])) : ?>
<!DOCTYPE html>
<html>
<head><title>MetaMC Drama Generator</title>
<style type="text/css">
h6 {
	text-align: center;
	font-weight: normal;
	color: #fff;
}
a {
	color: #fff;
}
h3 {
	text-align: center;
	font-family: "Comic Sans MS";
	color: #fff;
	font-weight: normal;
	font-size: 24px;
}
h1 {
	text-align: center;
	color: #fff;
	font-family: "Comic Sans MS";
}
body {
	background-color: #78f5b4;
	font-family: "Comic Sans MS";
}
</style>
</head>
<body>
<h3>The MetaMC Drama Generator</h3>
<h1><?php endif; ?>
<?php
$combinations = array(
	"people" => array("You", "Mr.Zomka", "*GreenGuns", "Sloth", "some random kid", "unkown_creatures", "*ScrewyBasil2902", "EnderC00kiez", "*NethrC00kez", "Bo242", "22Joshi22", "*FondGurgie", "Soaren_the_Great", "SuperPirateXV", "Epicsaurus"),
	"sites" => array("YouTube", "Twitter", "Reddit", "Google", "Discord", "Twitch"),
	"things" => array("Minecraft", "Server", "SkyWars", "BedWars", "Lucky SkyWars", "BedWars Hard", "Survival Games", "Spleef", "Build Battle", "Guess The Build", "Parkour", "SkyBlock", "Anti-Cheat", "Nory The Bot"),
	"function" => array("Oceania servers", "Asian servers", "US servers", "free Owner rank", "Bedrock skin support", "unban", "1.7.x support", "Bedrock 1.16.4 support", "Anti-Cheat", "Nory The Bot"),
	"adj" => array("bad", "wrong", "illegal", "horrible", "nasty", "hacking", "a serious problem", "incompatible", "a waste of time", "wonderful", "amazing", "toxic", "shameful", "disappointing", "bloated", "outdated", "incorrect", "full of drama", "too realistic"),
	"badsoft" => array("malware", "spyware", "adware", "DRM", "viruses", "trojans", "keyloggers", "easter eggs", "potential login stealers", "stolen assets", "lag machines", "kill abuse"),
	"drama" => array("bugs", "crashes", "drama", "lots of drama", "imbalance", "pain and suffering", "piracy", "bees", "bans", "kicks", "mutes"),
	"crash" => array("crash", "explode", "break", "lag", "blow up", "corrupt chunks", "corrupt worlds", "rain hellfish", "spawn bees"),
	"ban" => array("ban", "kick", "put a pumpkin of shame on", "add items mocking", "blacklist", "whitelist", "give admin rights to", "shame", "destroy"),
	"worse" => array("worse", "better", "faster", "slower", "more stable", "less buggy"),
	"ac1" => array("sue", "destroy the life of", "flame", "cause drama about", "complain about", "kick"),
	"price" => array("200$", "250$", "300$", "350$", "400$", "450$", "500$", "600$", "1k MetaMC coins"),
	"activates" => array("activates", "works", "functions", "breaks"),
	"says" => array("says", "tweets", "claims", "confirms", "denies"),
	"enormous" => array("big", "large", "huge", "gigantic", "enormous")
);
$sentences = array(
	"[people] launched a DoS attack on the website of MetaMC",
	"[sites] urges everyone to stop using [things]",
	"After a [enormous] amount of requests, MetaMC removes [things]",
	"After a [enormous] amount of requests, MetaMC adds [things]",
	"After a [enormous] amount of requests, MetaMC adds [function] to [things]",
	"[people] plays [things] on Twitch",
	"[people] fixes [function] in [things] to be unlike [things]",
	"[things] makes [things] [crash], [sites] users complain",
	"[people] complained about being in [things] on [sites]",
	"[sites] considers [things] worse than [things]",
	"[people] made [things] depend on [things]",
	"[people] bans [people] from using [things] on MetaMC",
	"[people] complains that [things] discussion doesn't belong on [sites]",
	"[people] has a Patreon goal to add [function] to [things] for [price] a month",
	"[people] has a Patreon goal to add [things] compatibility to [things] for [price] a month",
	"[people] complains that [people] replaced [things] by [things]",
	"[people] complains that [people] replaced [things] by [things] on MetaMC",
	"[people] complains that [people] removed [function] on MetaMC",
	"[people] decided that [things] is too [adj] and replaced it with [things]",
	"[people] [says] [things] is [adj].",
	"[people] [says] [things] is literally [adj].",
	"[things] is not updated for the latest version of Minecraft.",
	"[people] removes [things] from MetaMC.",
	"[people] adds [things] to MetaMC.",
	"[people] quits playing Minecraft. Fans of [things] rage.",
	"[people] is found to secretly like [things]",
	"[people] openly hates [function] in [things]",
	"[people] threatens to [ac1] [people] until they remove [things] from MetaMC",
	"[people] threatens to [ac1] [people] until they remove [function] from [things]",
	"[people] threatens to [ac1] [people] until they add [function] to [things]",
	"[people] came out in support of [things]",
	"[people] came out in support of [drama]",
	"[people] and [people] came out in support of [drama]",
	"[people] came out against [drama], [sites] rages",
	"[people] and [people] came out against [drama], [sites] rages",
	"[people] forks [things] causing [drama]",
	"[people] [says] to replace [things] with [things]",
	"[people] [says] [people] causes drama",
	"[things] fans claim that [things] should be more like [things]",
	"[things] fans claim that [things] should have better [function]",
	"[people] [says] that [things] should be more like [things]",
	"[people] [says] that [things] should be less like [things]",
	"[people] rebalances [things] for MetaMC",
	"[people] adds [function] to [things] by request of [people]",
	"[people] removes [function] from [things] by request of [people]",
	"[people] removes compatibility between [things] and [things] by request of [people]",
	"[people] [says] [people]'s attitude is [adj]",
	"[people] [says] [sites]'s attitude is [adj]",
	"[people] quits the development team of [things]",
	"[people] [says] [things] is too much like [things]",
	"[people] [says] [things] is a ripoff of [things]",
	"[people] decides to [ban] [people] from MetaMC",
	"[people] sues [things]",
	"[people] [says] [things] is [adj] on [sites]",
	"[people] [says] [things] is full of [badsoft]",
	"[people] [says] [things] causes [drama]",
	"[people] [says] [things] causes [drama] when used with [things]",
	"[people] [says] using [things] and [things] together is [adj]",
	"[people] rants about [things] on [sites]",
	"[people] rants about [function] in mods on [sites]",
	"[things] breaks [function]",
	"[people] sues [things] developers",
	"[people] reminds you that [things] is [adj]",
	"[people] and [people] get into a drama fight on [sites]",
	"Fans of [things] and [things] argue on [sites]",
	"[people] and [people] argue about [things]",
	"[people] puts [badsoft] in [things]",
	"[people] complains about [things] breaking [things]",
	"[people] complains about [things] breaking [function]",
	"[people] complains about [things] including [function]",
	"[things] breaks [function] in [things]",
	"[things] breaks [things] support in [things]",
	"[things] removes compatibility with [things]",
	"[people] [says] not to use [things]",
	"[people] [says] not to use [things] with [things]",
	"[people] finds [badsoft] in [things]",
	"[people] drew a nasty graffiti about [people]",
	"[people] drew a nasty graffiti about [things]",
	"[things] makes [things] [crash] when used with [things]",
	"[things] makes [things] [crash] when used by [people]",
	"[things] makes [things] crash [things] when used by [people]",
	"[things] adds [badsoft] that only [activates] in MetaMC",
	"[things] adds [badsoft] that only [activates] alongside [things]",
	"[things] makes [people] invincible from [things] in MetaMC",
	"[people] tweaks balance in [things] too much, annoying [sites]",
	"[people] tweaks balance in [things] too much, annoying [people]",
	"[people] [says] [people] is worse than [people]",
	"[people] [says] [things] is [worse] than [things]",
	"[people] bans [people] from [sites]"
);

function str_replace_first($search, $replace, $subject) {
    $pos = strpos($subject, $search);
    if ($pos !== false) {
        $subject = substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}

$s = $sentences[rand(0, count($sentences)-1)];
foreach(array_keys($combinations) as $key) {
	for($i = 0; $i < 4; $i++) {
		$combo = $combinations[$key][rand(0, count($combinations[$key])-1)];
		$s = str_replace_first("[".$key."]", $combo, $s);
	}
}
echo($s);
?>
<?php if (!isset($_GET["plain"])) : ?>
</h1>
<h3><a href="https://metamc.net/drama.php">Give it one more try!</a></h3>
</body>
</html>
<?php endif; ?>
