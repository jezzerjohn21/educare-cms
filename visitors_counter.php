<?php
session_start();

// Check if the visitor has already been counted in the current session
if (!isset($_SESSION['visited'])) {
    // If not, increment the visitor count and set the session variable
    increment_visitor_count();
    $_SESSION['visited'] = true;
}

// Get the current visitor count
$visitor_count = get_visitor_count();

// Save the visitor count to a file
save_visitor_count($visitor_count);
?>

<!-- <div class="ticket">
    <span class="count"><?php echo $visitor_count; ?></span>
</div> -->

<style>
.ticket {
    position: fixed;
    top: 50%;
    left: 0;
    transform: translate(0, -50%);
    background-color: #ffcc00;
    color: #000000;
    padding: 10px;
    font-size: 15px;
    font-weight: bold;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    z-index: 9999;
    display: flex;
    align-items: center;
}

.ticket .count {
    margin-right: 10px;
}
</style>

<?php
// Function to get the current visitor count
function get_visitor_count() {
    $file = 'visitor_count.txt';
    if (!file_exists($file)) {
        // If the file does not exist, create it and initialize the visitor count to 0
        file_put_contents($file, 0);
    }

    // Read the visitor count from the file
    $count = file_get_contents($file);

    return $count;
}

// Function to increment the visitor count
function increment_visitor_count() {
    $file = 'visitor_count.txt';
    if (!file_exists($file)) {
        // If the file does not exist, create it and initialize the visitor count to 0
        file_put_contents($file, 0);
    }

    // Read the visitor count from the file and increment it
    $count = file_get_contents($file);
    $count++;
    file_put_contents($file, $count);
}

// Function to save the visitor count to a file
function save_visitor_count($count) {
    $file = 'visitor_count.txt';
    file_put_contents($file, $count);
}