<?php
// Replace these with your actual database credentials
$db_name = "sanashelter";
$db_username = "root";
$db_pass = "";
$db_host = "localhost";

// Create a connection to the database
$con = new mysqli("$db_host", "$db_username", "$db_pass", "$db_name");

$sql_create_table = "CREATE TABLE IF NOT EXISTS animals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    species VARCHAR(100) NOT NULL,
    breed VARCHAR(100) NOT NULL,
    description TEXT
)";
// Execute the query to create the table
if ($con->query($sql_create_table) === TRUE) {
    echo "Table created successfully.";
} else {
    echo "Error creating table: " . $con->error;
}

// Function to check if an animal already exists in the table
function animalExists($con, $name, $species, $breed) {
    $sql = "SELECT COUNT(*) as count FROM animals WHERE name = '$name' AND species = '$species' AND breed = '$breed'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    return $row['count'] > 0;
}

// Insert data into the animals table if the animal does not exist
$animals = [
    ['Bonnie', 'Dog', 'Beagador', 'Bonnie is a friendly and playful Beagador (Beagle-Labrador mix) with a beautiful golden brown coat.'],
    ['Gima', 'Dog', 'Jack Russell Terrier', 'Gima is an adorable Jack Russell Terrier with a white coat and golden brown spots. She is full of energy and loves to play.'],
    ['Puti', 'Dog', 'Aspin', 'Puti is a lovable Aspin (Asong Pinoy) with a pure white coat. She is a sweet and gentle dog looking for a loving home.'],
    ['Tres', 'Dog', 'Aspin', 'Tres is an Aspin (Asong Pinoy) with a golden brown coat and black spots. He is a playful and affectionate companion.'],
    ['Casper', 'Dog', 'Greyhound', 'Casper is a graceful Greyhound with a white coat and black spots. He is gentle, elegant, and loves a good run.'],
    ['Victor', 'Dog', 'Aspin', 'Victor is an Aspin (Asong Pinoy) with a white coat and black spots. He is a friendly and loyal companion.'],
    ['Miming', 'Cat', 'Polydactyl', 'Miming is an adorable Polydactyl cat with golden brown fur and white colors on her paws. She is curious and loves attention.'],
    ['Grace', 'Dog', 'Labrador Retriever', 'Grace is a beautiful Labrador Retriever with a black and white coat. She is gentle, intelligent, and great with families.'],
    ['Kaira', 'Dog', 'Aspin', 'Kaira is a lovely Aspin (Asong Pinoy) with a pure white coat. She is affectionate, loyal, and loves cuddling.'],
    ['Cookies', 'Dog', 'Australian Kelpie', 'Cookies is a smart and energetic Australian Kelpie with a brown coat. She is highly trainable and loves outdoor activities.']
];

foreach ($animals as $animal) {
    $name = $animal[0];
    $species = $animal[1];
    $breed = $animal[2];
    $description = $animal[3];

    if (!animalExists($con, $name, $species, $breed)) {
        $sql_insert_data = "INSERT INTO animals (name, species, breed, description) VALUES ('$name', '$species', '$breed', '$description')";
        if ($con->query($sql_insert_data) === TRUE) {
            echo "Data inserted successfully for $name. ";
        } else {
            echo "Error inserting data for $name: " . $con->error . ". ";
        }
    } else {
        echo "Skipping insertion for $name as it already exists. ";
    }
}

// Close the connection
$con->close();
?>
