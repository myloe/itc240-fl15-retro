<? include 'includes/config.php';?>
<?php
//a6.php

if(isset($_GET['day']))
{//show the selected day
    $myDay = $_GET['day'];

}else{//show today
    $myDay = date('l');
}



$myDay = date('l');
$myPic = '';

//TESTING - DELETE THIS LINE BELOW
//$myDay = "Tuesday";
/*switch($myDay)
{

    case 'Monday':
        $myPic = "pumpkin-spice-latte.jpg";
        break;

    case 'Tuesday':
        $myPic = "iced-coffee.jpg";
        break;
}
*/

        if($myDay == "Sunday")
        {
        $backgroundColor = "#eee";
        $title = "SQUID SUNDAY";
        $content = "<p>Today is Squid Sunday! Here is some information about squids.</p><p>Squid are cephalopods of the order Teuthida, which comprises around 304 species.</p><p>Like all other cephalopods, squid have a distinct head, bilateral symmetry, a mantle, and arms. Squid, like cuttlefish, have eight arms arranged in pairs and two, usually longer, tentacles. Squid are strong swimmers and certain species can 'fly' for short distances out of the water.</p><p>Squid are members of the class Cephalopoda, subclass Coleoidea, order Teuthida, which has two major suborders, Myopsina and Oegopsina (including giant squid such as Architeuthis dux). Teuthida is the largest cephalopod order with around 300 species classified into 29 families.</p>";
        $image = "images/animals/squid.jpg";
        $alt = "alt='squid'";
        }
        else if($myDay == "Monday")
        {
        $backgroundColor = "#92B3D6";
        $title = " MOOSE MONDAY";
        $content = "<p>Today is Moose Monday! Here is some information about Moose.</p><p>The moose (North America) or elk (Eurasia), Alces alces, is the largest extant species in the deer family.</p><p>Moose are distinguished by the palmate antlers of the males; other members of the family have antlers with a dendritic ('twig-like') configuration. Moose typically inhabit boreal and mixed deciduous forests of the Northern Hemisphere in temperate to subarctic climates.</p><p>Moose used to have a much wider range but hunting and other human activities have greatly reduced it. Moose have been reintroduced to some of their former habitats. Currently, most moose are found in Canada, Alaska, Scandinavia, Latvia, Estonia, New England and Russia. Their diet consists of both terrestrial and aquatic vegetation.</p><p>The most common moose predators are wolves, bears and humans. Unlike most other deer species, moose are solitary animals and do not form herds. Although generally slow-moving and sedentary, moose can become aggressive and move quickly if angered or startled. Their mating season in the autumn can lead to spectacular fights between males competing for a female.</p>";
        $image = "images/animals/moose.jpg";
        $alt = "alt='moose'";
        }
        else if($myDay == "Tue")
        {
        $backgroundColor = "#DC8F02";
        $title = "TURTLE TUESDAY";
        $content = "<p>Today is Turtle Tuesday! Here is some information about Turtles.</p><p>Turtles are reptiles of the order Testudines (or Chelonii) characterised by a special bony or cartilaginous shell developed from their ribs and acting as a shield.</p><p> 'Turtle' may refer to the order as a whole (American English) or to fresh-water and sea-dwelling testudines (British English)The order Testudines includes both extant (living) and extinct species. The earliest known members of this group date from 157 million years ago, making turtles one of the oldest reptile groups and a more ancient group than snakes or crocodilians.</p><p> Of the 327 known species alive today, some are highly endangered.</p>";
        $image = "images/animals/turtle.jpg";
        $alt = "alt='turtle'";
        }
        else if($myDay == "Wednesday")
        {
        $backgroundColor = "#A68F6F";
        $title = "WALRUS WEDNESDAY";
        $content = "<p>Today is Walrus Wednesday! Here is some information about Walruses.</p><p>The walrus (Odobenus rosmarus) is a large flippered marine mammal with a discontinuous distribution about the North Pole in the Arctic Ocean and subarctic seas of the Northern Hemisphere. The walrus is the only living species in the Odobenidae family and Odobenus genus.</p><p>This species is subdivided into three subspecies: the Atlantic walrus (O. r. rosmarus) which lives in the Atlantic Ocean, the Pacific walrus (O. r. divergens) which lives in the Pacific Ocean, and O. r. laptevi, which lives in the Laptev Sea of the Arctic Ocean.</p><p>Adult walruses are easily recognized by their prominent tusks, whiskers, and bulkiness. Adult males in the Pacific can weigh more than 2,000 kg (4,400 lb) and, among pinnipeds, are exceeded in size only by the two species of elephant seals.</p><p> Walruses live mostly in shallow waters above the continental shelves, spending significant amounts of their lives on the sea ice looking for benthic bivalve mollusks to eat. Walruses are relatively long-lived, social animals, and they are considered to be a 'keystone species' in the Arctic marine regions.</p>";
        $image = "images/animals/walrus.jpg";
        $alt = "alt='walrus'";
        }
        else if($myDay == "Thursday")
        {
        $backgroundColor = "#BECCE3";
        $title = "TOUCAN THURSDAY";
        $content = "<p>Today is Toucan Thursday! Here is some information about Toucans.</p><p>Toucans are members of the family Ramphastidae of near passerine birds from the Neotropics. The Ramphastidae family is most closely related to the American barbets.</p><p>They are brightly marked and have large, often colorful bills. The family includes five genera and about forty different species. The name of this bird group is derived from the Tupi word tukana, via Portuguese.</p><p> The family includes toucans, aracaris and toucanets; more distant relatives include various families of barbets and woodpeckers in the suborder Pici.</p><p>Toucans range in size from the lettered aracari (Pteroglossus inscriptus), at 130 g (4.6 oz) and 29 cm (11.5 inches), to the toco toucan (Ramphastos toco), at 680 g (1.5 lb) and 63 cm (29 inches). Their bodies are short (of comparable size to a crow's) and compact.</p>";
        $image = "images/animals/toucan.jpg";
        $alt = "alt='toucan'";
        }
        else if($myDay == "Friday")
        {
        $backgroundColor = "#A1A3A6";
        $title = "FOX FRIDAY";
        $content = "<p>Today is Fox Friday! Here is some information about Foxes.</p><p>Foxes are small-to-medium-sized, omnivorous mammals belonging to several genera of the Canidae family.</p><p>Foxes are slightly smaller than a medium-size domestic dog, with a flattened skull, upright triangular ears, a pointed, slightly upturned snout, and a long bushy tail (or brush).</p><p>Twelve species belong to the monophyletic group of Vulpes genus of 'true foxes'. Approximately another 25 current or extinct species are always or sometimes called foxes; these foxes are either part of the paraphyletic group of the South American foxes, or of the outlying group, which consists of bat-eared fox, gray fox, and island fox</p>";
        $image = "images/animals/fox.jpg";
        $alt = "alt='fox'";
        }
        else if($myDay == "Saturday")
        {
        $backgroundColor = "#71B2F7";
        $title = "SEAL SATURDAY";
        $content = "<p>Today is Seal Saturday! Here is some information about Seals.</p><p>Seals are a widely distributed and diverse clade of carnivorous, fin-footed, semiaquatic marine mammals.</p><p>They comprise the extant families Odobenidae (whose only living member is the walrus), Otariidae (the eared seals: sea lions and fur seals), and Phocidae (the earless seals, or true seals). There are 33 extant species of pinnipeds, and more than 50 extinct species have been described from fossils.</p><p>While seals were historically thought to have descended from two ancestral lines, molecular evidence supports them as a monophyletic lineage (descended from one ancestral line). Pinnipeds belong to the order Carnivora and their closest living relatives are bears and musteloids (weasels, raccoons, skunks and red pandas), having diverged about 50 million years ago.</p>";
        $image = "images/animals/seal.jpg";
        $alt = "alt='seal'";
        }
?>
<? include 'includes/header.php';?>
<h1><?=$pageID?></h1>
<h1><?=$title;?></h1>
    <img src="<?=$image?>" <?=$alt?>/>
    <?=$content;?>
    <p>Hope you had an awesome <?=$title?>!</p>
    <p><a href="daily.php?day=Sunday">Sunday</a></p>
    <p><a href="daily.php?day=Monday">Monday</a></p>
    <p><a href="daily.php?day=Tuesday">Tuesday</a></p>
    <p><a href="daily.php?day=Wednesday">Wednesday</a></p>
    <p><a href="daily.php?day=Thursday">Thursday</a></p>
    <p><a href="daily.php?day=Friday">Friday</a></p>
    <p><a href="daily.php?day=Saturday">Saturday</a></p>
<? include 'includes/footer.php';?>
