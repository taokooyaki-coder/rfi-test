<?php
echo "<h3>--- MENGINTIP FOLDER RAHASIA ---</h3>";

$dir = "You_Cant_Find_This_Dir";
echo "Isi folder $dir : <br>";
$files = scandir($dir);
print_r($files);

echo "<br><br><b>Mencoba membuka file di dalamnya...</b><br>";
$target_file = $dir . "/flag.php";

if (file_exists($target_file)) {
    echo htmlspecialchars(file_get_contents($target_file));
} else {
    echo "Gak ada flag.php di dalam folder itu. Coba cek nama file lain di daftar array di atas.";
}
?>

