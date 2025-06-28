<!DOCTYPE html>
<html>
<head>
    <title>gitaris terbaik di dunia</title>
    <style>
        table {
            border-collapse: collapse;
            width: 95%;
        }
        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>

<h2>Gitaris Terbaik di Dunia</h2>

<?php
$gitaris = array(
    array(
        "nama" => "Jimi Hendrix",
        "asal" => "Amerika Serikat",
        "bidang" => "Gitaris",
        "tahun" => 1942,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Jimi_Hendrix_1967_uncropped_%28cropped%29.jpg/500px-Jimi_Hendrix_1967_uncropped_%28cropped%29.jpg"
    ),
    array(
        "nama" => "kurt cobain",
        "asal" => "Amerika Serikat",
        "bidang" => "Gitaris",
        "tahun" => 1967,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Nirvana_around_1992.jpg/330px-Nirvana_around_1992.jpg"
    ),
    array(
        "nama" => "jhonny greenwood",
        "asal" => "Inggris",
        "bidang" => "Gitaris",
        "tahun" => 1971,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/SmileRoundhse300522_%2847_of_63%29_%2852112497131%29_%28cropped%29.jpg/500px-SmileRoundhse300522_%2847_of_63%29_%2852112497131%29_%28cropped%29.jpg"
    ),
    array(
        "nama" => "Eric Clapton",
        "asal" => "Inggris",
        "bidang" => "Gitaris",
        "tahun" => 1945,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Eric_Clapton_-_Royal_Albert_Hall_-_Wednesday_24th_May_2017_EricClaptonRAH240517-30_%2834987232355%29_%28cropped%29.jpg/500px-Eric_Clapton_-_Royal_Albert_Hall_-_Wednesday_24th_May_2017_EricClaptonRAH240517-30_%2834987232355%29_%28cropped%29.jpg"
    ),
    array(
        "nama" => "Jimmy Page",
        "asal" => "Inggris",
        "bidang" => "Gitaris",
        "tahun" => 1944,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Jimmy_Page_at_the_Echo_music_award_2013.jpg/500px-Jimmy_Page_at_the_Echo_music_award_2013.jpg"
    array(
        "nama" => "geezer butler",
        "asal" => "Inggris",
        "bidang" => "Gitaris",
        "tahun" => 1949,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/2019_RiP_Deadland_Ritual_-_Geezer_Butler_-_by_2eight_-_8SC9785.jpg/500px-2019_RiP_Deadland_Ritual_-_Geezer_Butler_-_by_2eight_-_8SC9785.jpg"
    ),
    array(
        "nama" => "syd barrett"
        "asal" => "Inggris",
        "bidang" => "gitaris",
        "tahun" => 1946,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/1/12/Pink_Floyd_1967_%28Syd_Barrett_headshot_crop%29.jpg"
    ),
    array(
        "nama" => "david gilmour",
        "asal" => "Inggris",
        "bidang" => "gitaris",
        "tahun" => 1946,
        "gambar" =>"https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/DGilmourRAH111024_%2821_of_63%29_%28cropped%29.jpg/500px-DGilmourRAH111024_%2821_of_63%29_%28cropped%29.jpg"
    ),
    array(
        "nama" => "ozzy osbourne",
        "asal" => "Inggris",
        "bidang" => "gitaris",
        "tahun" => 1948,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/OzzyChangingHands02-20-2010.jpg/375px-OzzyChangingHands02-20-2010.jpg"
    ),
    array(
        "nama" => "john frusciante",
        "asal" => "amerika serikat",
        "bidang" => "gitaris",
        "tahun" => 1970,
        "gambar" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/John_Frusciante_2016.jpg/500px-John_Frusciante_2016.jpg"
);

echo "<table>";
echo "<tr><th>Nama</th><th>Asal</th><th>bidang</th><th>Tahun</th><th>Gambar</th></tr>";

foreach ($perusahaan as $data) {
    echo "<tr>";
    echo "<td>{$data['nama']}</td>";
    echo "<td>{$data['asal']}</td>";
    echo "<td>{$data['bidang']}</td>";
    echo "<td>{$data['tahun']}</td>";
    echo "<td><img src='{$data['gambar']}' alt='{$data['nama']}'></td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>